<?php
/**
 * Olama School Importer Class
 */

if (!defined('ABSPATH')) {
    exit;
}

class Olama_School_Importer
{
    /**
     * Import plans from CSV
     */
    public static function import_plans_csv()
    {
        global $wpdb;

        // Verify nonce
        if (!isset($_POST['_wpnonce']) || !wp_verify_nonce($_POST['_wpnonce'], 'olama_import_action')) {
            wp_die(__('Security check failed.', 'olama-school'));
        }

        // Check permissions
        if (!current_user_can('olama_import_export_data')) {
            wp_die(__('You do not have permission to import data.', 'olama-school'));
        }

        if (empty($_FILES['olama_import_file']['tmp_name'])) {
            wp_die(__('Please upload a valid CSV file.', 'olama-school'));
        }

        $file = $_FILES['olama_import_file']['tmp_name'];
        $handle = fopen($file, 'r');

        if ($handle !== false) {
            // Skip BOM if present
            $bom = fread($handle, 3);
            if ($bom !== "\xEF\xBB\xBF") {
                rewind($handle);
            }

            // Get headers and map them to indices
            $headers = fgetcsv($handle);
            if (!$headers) {
                wp_die(__('Invalid CSV header.', 'olama-school'));
            }

            $map = array();
            $fields = array(
                'Plan ID' => 'id',
                'Date' => 'plan_date',
                'Period' => 'period_number',
                'Grade' => 'grade_name',
                'Section' => 'section_name',
                'Subject' => 'subject_name',
                'Teacher' => 'teacher_name',
                'Custom Topic' => 'custom_topic',
                'Status' => 'status'
            );

            foreach ($headers as $index => $header) {
                $header = trim($header);
                if (isset($fields[$header])) {
                    $map[$fields[$header]] = $index;
                }
            }

            $imported_count = 0;
            while (($data = fgetcsv($handle)) !== false) {
                // Ensure we have enough data
                if (count($data) < 5)
                    continue;

                $plan_row = array();
                foreach ($map as $field => $index) {
                    $plan_row[$field] = isset($data[$index]) ? trim($data[$index]) : '';
                }

                $plan_date = !empty($plan_row['plan_date']) ? $plan_row['plan_date'] : current_time('mysql', false);
                $period_number = intval($plan_row['period_number'] ?? 1);
                $grade_id = self::get_id_by_name($wpdb->prefix . 'olama_grades', 'grade_name', $plan_row['grade_name'] ?? '');
                $section_id = self::get_id_by_name($wpdb->prefix . 'olama_sections', 'section_name', $plan_row['section_name'] ?? '');
                $subject_id = self::get_id_by_name($wpdb->prefix . 'olama_subjects', 'subject_name', $plan_row['subject_name'] ?? '');

                $teacher_id = 0;
                if (!empty($plan_row['teacher_name'])) {
                    $teacher_user = get_user_by('login', $plan_row['teacher_name']);
                    if (!$teacher_user) {
                        $teacher_user = get_user_by('slug', sanitize_title($plan_row['teacher_name']));
                    }
                    $teacher_id = $teacher_user ? $teacher_user->ID : 0;
                }

                $custom_topic = $plan_row['custom_topic'] ?? '';
                $status = !empty($plan_row['status']) ? $plan_row['status'] : 'draft';

                if ($section_id && $subject_id) {
                    $wpdb->insert($wpdb->prefix . 'olama_plans', array(
                        'section_id' => $section_id,
                        'subject_id' => $subject_id,
                        'teacher_id' => $teacher_id,
                        'plan_date' => $plan_date,
                        'period_number' => $period_number,
                        'custom_topic' => $custom_topic,
                        'status' => $status,
                        'created_at' => current_time('mysql'),
                    ));
                    $imported_count++;
                }
            }
            fclose($handle);

            // Log activity
            if (class_exists('Olama_School_Logger')) {
                Olama_School_Logger::log('data_import', sprintf('CSV import completed: %d plans imported', $imported_count));
            }

            set_transient('olama_import_message', sprintf(__('%d plans imported successfully.', 'olama-school'), $imported_count), 30);
        }

        wp_redirect(admin_url('admin.php?page=olama-data-management&import=success'));
        exit;
    }

    /**
     * Import students from CSV
     */
    public static function import_students_csv()
    {
        global $wpdb;

        // Verify nonce
        if (!isset($_POST['_wpnonce']) || !wp_verify_nonce($_POST['_wpnonce'], 'olama_import_students')) {
            wp_die(__('Security check failed.', 'olama-school'));
        }

        // Check permissions
        if (!current_user_can('olama_manage_academic_structure')) {
            wp_die(__('You do not have permission to import students.', 'olama-school'));
        }

        if (empty($_FILES['olama_import_file']['tmp_name'])) {
            wp_die(__('Please upload a valid CSV file.', 'olama-school'));
        }

        $file = $_FILES['olama_import_file']['tmp_name'];
        $handle = fopen($file, 'r');

        if ($handle !== false) {
            // Skip BOM
            $bom = fread($handle, 3);
            if ($bom !== "\xEF\xBB\xBF") {
                rewind($handle);
            }

            $headers = fgetcsv($handle);
            if (!$headers) {
                wp_die(__('Invalid CSV header.', 'olama-school'));
            }

            $map = array();
            $fields = array(
                'Name' => 'student_name',
                'ID Number' => 'student_id_number',
                'Grade' => 'grade_name',
                'Section' => 'section_name',
            );

            foreach ($headers as $index => $header) {
                $header = trim($header);
                if (isset($fields[$header])) {
                    $map[$fields[$header]] = $index;
                }
            }

            $imported_count = 0;
            while (($data = fgetcsv($handle)) !== false) {
                $row = array();
                foreach ($map as $field => $index) {
                    $row[$field] = isset($data[$index]) ? trim($data[$index]) : '';
                }

                if (empty($row['student_name']) || empty($row['student_id_number'])) {
                    continue;
                }

                $grade_id = self::get_id_by_name($wpdb->prefix . 'olama_grades', 'grade_name', $row['grade_name'] ?? '');
                $section_id = self::get_id_by_name($wpdb->prefix . 'olama_sections', 'section_name', $row['section_name'] ?? '');

                if ($grade_id && $section_id) {
                    $wpdb->insert($wpdb->prefix . 'olama_students', array(
                        'student_name' => $row['student_name'],
                        'student_id_number' => $row['student_id_number'],
                        'grade_id' => $grade_id,
                        'section_id' => $section_id,
                    ));
                    $imported_count++;
                }
            }
            fclose($handle);

            set_transient('olama_import_message', sprintf(__('%d students imported successfully.', 'olama-school'), $imported_count), 30);
        }

        wp_redirect(admin_url('admin.php?page=olama-school-users&import=success'));
        exit;
    }

    /**
     * Import curriculum from CSV
     */
    public static function import_curriculum_csv($semester_id, $grade_id, $subject_id)
    {
        global $wpdb;

        // Verify nonce
        if (!isset($_POST['_wpnonce']) || !wp_verify_nonce($_POST['_wpnonce'], 'olama_import_curriculum')) {
            wp_die(__('Security check failed.', 'olama-school'));
        }

        // Check permissions
        if (!current_user_can('olama_manage_curriculum')) {
            wp_die(__('You do not have permission to import curriculum data.', 'olama-school'));
        }

        if (empty($_FILES['olama_import_file']['tmp_name'])) {
            wp_die(__('Please upload a valid CSV file.', 'olama-school'));
        }

        $semester_id = intval($semester_id);
        $grade_id = intval($grade_id);
        $subject_id = intval($subject_id);

        if (!$semester_id || !$grade_id || !$subject_id) {
            wp_die(__('Invalid parameters for import.', 'olama-school'));
        }

        $file = $_FILES['olama_import_file']['tmp_name'];
        $handle = fopen($file, 'r');

        if ($handle !== false) {
            // Skip BOM
            $bom = fread($handle, 3);
            if ($bom !== "\xEF\xBB\xBF") {
                rewind($handle);
            }

            $headers = fgetcsv($handle);
            if (!$headers) {
                wp_die(__('Invalid CSV header.', 'olama-school'));
            }

            // Map headers
            $map = array();
            $fields = array(
                'Unit #' => 'unit_number',
                'Unit Name' => 'unit_name',
                'Objectives' => 'objectives',
                'Lesson #' => 'lesson_number',
                'Lesson Title' => 'lesson_title',
                'Video URL' => 'video_url'
            );

            foreach ($headers as $index => $header) {
                $header = trim($header);
                if (isset($fields[$header])) {
                    $map[$fields[$header]] = $index;
                }
            }

            $units_count = 0;
            $lessons_count = 0;
            $current_unit_id = 0;
            $last_unit_number = '';

            while (($data = fgetcsv($handle)) !== false) {
                $row = array();
                foreach ($map as $field => $index) {
                    $row[$field] = isset($data[$index]) ? trim($data[$index]) : '';
                }

                if (empty($row['unit_number'])) {
                    continue;
                }

                // If unit number changed, create/get new unit
                if ($row['unit_number'] !== $last_unit_number) {
                    $unit_id = $wpdb->get_var($wpdb->prepare(
                        "SELECT id FROM {$wpdb->prefix}olama_curriculum_units WHERE semester_id = %d AND grade_id = %d AND subject_id = %d AND unit_number = %s",
                        $semester_id,
                        $grade_id,
                        $subject_id,
                        $row['unit_number']
                    ));

                    if ($unit_id) {
                        $wpdb->update($wpdb->prefix . 'olama_curriculum_units', array(
                            'unit_name' => $row['unit_name'],
                            'objectives' => $row['objectives']
                        ), array('id' => $unit_id));
                    } else {
                        $wpdb->insert($wpdb->prefix . 'olama_curriculum_units', array(
                            'semester_id' => $semester_id,
                            'grade_id' => $grade_id,
                            'subject_id' => $subject_id,
                            'unit_number' => $row['unit_number'],
                            'unit_name' => $row['unit_name'],
                            'objectives' => $row['objectives']
                        ));
                        $unit_id = $wpdb->insert_id;
                        $units_count++;
                    }
                    $current_unit_id = $unit_id;
                    $last_unit_number = $row['unit_number'];
                }

                // Handle lesson
                if (!empty($row['lesson_number'])) {
                    $lesson_id = $wpdb->get_var($wpdb->prepare(
                        "SELECT id FROM {$wpdb->prefix}olama_curriculum_lessons WHERE unit_id = %d AND lesson_number = %s",
                        $current_unit_id,
                        $row['lesson_number']
                    ));

                    if ($lesson_id) {
                        $wpdb->update($wpdb->prefix . 'olama_curriculum_lessons', array(
                            'lesson_title' => $row['lesson_title'],
                            'video_url' => $row['video_url']
                        ), array('id' => $lesson_id));
                    } else {
                        $wpdb->insert($wpdb->prefix . 'olama_curriculum_lessons', array(
                            'unit_id' => $current_unit_id,
                            'lesson_number' => $row['lesson_number'],
                            'lesson_title' => $row['lesson_title'],
                            'video_url' => $row['video_url']
                        ));
                        $lessons_count++;
                    }
                }
            }
            fclose($handle);

            // Log activity
            if (class_exists('Olama_School_Logger')) {
                Olama_School_Logger::log('curriculum_import', sprintf('Curriculum import completed: %d units and %d lessons processed.', $units_count, $lessons_count));
            }

            set_transient('olama_import_message', sprintf(__('%d units and %d lessons processed successfully.', 'olama-school'), $units_count, $lessons_count), 30);
        }

        wp_redirect(admin_url('admin.php?page=olama-school-curriculum&semester_id=' . $semester_id . '&grade_id=' . $grade_id . '&subject_id=' . $subject_id . '&import=success'));
        exit;
    }

    /**
     * Helper to find ID by name in a table
     */
    private static function get_id_by_name($table, $column, $name)
    {
        global $wpdb;
        return $wpdb->get_var($wpdb->prepare("SELECT id FROM $table WHERE $column = %s", $name));
    }
}
