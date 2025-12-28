<?php
/**
 * Olama School Exporter Class
 */

if (!defined('ABSPATH')) {
    exit;
}

class Olama_School_Exporter
{
    /**
     * Export all plans to CSV
     */
    public static function export_plans_csv()
    {
        global $wpdb;

        // Verify nonce
        if (!isset($_POST['_wpnonce']) || !wp_verify_nonce($_POST['_wpnonce'], 'olama_export_action')) {
            wp_die(__('Security check failed.', 'olama-school'));
        }

        // Check permissions
        if (!current_user_can('olama_import_export_data')) {
            wp_die(__('You do not have permission to export data.', 'olama-school'));
        }

        $filename = 'olama-weekly-plans-' . date('Y-m-d') . '.csv';

        // Fetch plans data
        $plans = $wpdb->get_results("
            SELECT p.*, g.grade_name, s.section_name, sub.subject_name, u.display_name as teacher_name
            FROM {$wpdb->prefix}olama_plans p
            LEFT JOIN {$wpdb->prefix}olama_sections s ON p.section_id = s.id
            LEFT JOIN {$wpdb->prefix}olama_grades g ON s.grade_id = g.id
            LEFT JOIN {$wpdb->prefix}olama_subjects sub ON p.subject_id = sub.id
            LEFT JOIN {$wpdb->users} u ON p.teacher_id = u.ID
            ORDER BY p.plan_date DESC, p.period_number ASC
        ");

        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=' . $filename);

        $output = fopen('php://output', 'w');

        // Add UTF-8 BOM for Excel compatibility
        fprintf($output, chr(0xEF) . chr(0xBB) . chr(0xBF));

        // Column headers
        fputcsv($output, array(
            __('Plan ID', 'olama-school'),
            __('Date', 'olama-school'),
            __('Period', 'olama-school'),
            __('Grade', 'olama-school'),
            __('Section', 'olama-school'),
            __('Subject', 'olama-school'),
            __('Teacher', 'olama-school'),
            __('Custom Topic', 'olama-school'),
            __('Status', 'olama-school'),
            __('Created At', 'olama-school')
        ));

        if ($plans) {
            foreach ($plans as $plan) {
                fputcsv($output, array(
                    $plan->id,
                    $plan->plan_date,
                    $plan->period_number,
                    $plan->grade_name,
                    $plan->section_name,
                    $plan->subject_name,
                    $plan->teacher_name,
                    $plan->custom_topic,
                    $plan->status,
                    $plan->created_at
                ));
            }
        }

        fclose($output);

        // Log export activity
        if (class_exists('Olama_School_Logger')) {
            Olama_School_Logger::log('data_export', sprintf('CSV export triggered for %d plans', count($plans)));
        }

        exit;
    }

    /**
     * Export curriculum (units and lessons) to CSV
     */
    public static function export_curriculum_csv($semester_id, $grade_id, $subject_id)
    {
        global $wpdb;

        // Verify nonce
        if (!isset($_POST['_wpnonce']) || !wp_verify_nonce($_POST['_wpnonce'], 'olama_export_curriculum')) {
            wp_die(__('Security check failed.', 'olama-school'));
        }

        // Check permissions
        if (!current_user_can('olama_manage_curriculum')) {
            wp_die(__('You do not have permission to export curriculum data.', 'olama-school'));
        }

        $semester_id = intval($semester_id);
        $grade_id = intval($grade_id);
        $subject_id = intval($subject_id);

        if (!$semester_id || !$grade_id || !$subject_id) {
            wp_die(__('Invalid parameters for export.', 'olama-school'));
        }

        // Fetch names for filename
        $semester_name = $wpdb->get_var($wpdb->prepare("SELECT semester_name FROM {$wpdb->prefix}olama_semesters WHERE id = %d", $semester_id));
        $grade_name = $wpdb->get_var($wpdb->prepare("SELECT grade_name FROM {$wpdb->prefix}olama_grades WHERE id = %d", $grade_id));
        $subject_name = $wpdb->get_var($wpdb->prepare("SELECT subject_name FROM {$wpdb->prefix}olama_subjects WHERE id = %d", $subject_id));

        $filename = 'curriculum-' . sanitize_title($grade_name) . '-' . sanitize_title($subject_name) . '-' . date('Y-m-d') . '.csv';

        // Fetch Units and their Lessons
        $data = $wpdb->get_results($wpdb->prepare("
            SELECT u.unit_number, u.unit_name, u.objectives, l.lesson_number, l.lesson_title, l.video_url
            FROM {$wpdb->prefix}olama_curriculum_units u
            LEFT JOIN {$wpdb->prefix}olama_curriculum_lessons l ON u.id = l.unit_id
            WHERE u.semester_id = %d AND u.grade_id = %d AND u.subject_id = %d
            ORDER BY CAST(u.unit_number AS UNSIGNED) ASC, u.unit_number ASC, CAST(l.lesson_number AS UNSIGNED) ASC, l.lesson_number ASC
        ", $semester_id, $grade_id, $subject_id));

        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=' . $filename);

        $output = fopen('php://output', 'w');

        // Add UTF-8 BOM
        fprintf($output, chr(0xEF) . chr(0xBB) . chr(0xBF));

        // Headers
        fputcsv($output, array(
            __('Unit #', 'olama-school'),
            __('Unit Name', 'olama-school'),
            __('Objectives', 'olama-school'),
            __('Lesson #', 'olama-school'),
            __('Lesson Title', 'olama-school'),
            __('Video URL', 'olama-school')
        ));

        if ($data) {
            foreach ($data as $row) {
                fputcsv($output, array(
                    $row->unit_number,
                    $row->unit_name,
                    $row->objectives,
                    $row->lesson_number,
                    $row->lesson_title,
                    $row->video_url
                ));
            }
        }

        fclose($output);

        // Log export activity
        if (class_exists('Olama_School_Logger')) {
            Olama_School_Logger::log('curriculum_export', sprintf('Curriculum export triggered for Grade: %s, Subject: %s', $grade_name, $subject_name));
        }

        exit;
    }
}
