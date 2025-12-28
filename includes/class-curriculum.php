<?php
/**
 * Curriculum Management Class
 */

if (!defined('ABSPATH')) {
    exit;
}

class Olama_School_Curriculum
{

    /**
     * Get curriculum by subject and grade
     */
    public static function get_curriculum($subject_id, $grade_id)
    {
        global $wpdb;
        return $wpdb->get_results($wpdb->prepare(
            "SELECT * FROM {$wpdb->prefix}olama_curriculum WHERE subject_id = %d AND grade_id = %d ORDER BY unit_number ASC, lesson_number ASC",
            $subject_id,
            $grade_id
        ));
    }

    /**
     * Get units for a subject and grade
     */
    public static function get_units($subject_id, $grade_id)
    {
        global $wpdb;
        return $wpdb->get_results($wpdb->prepare(
            "SELECT DISTINCT unit_number, unit_name FROM {$wpdb->prefix}olama_curriculum WHERE subject_id = %d AND grade_id = %d ORDER BY unit_number ASC",
            $subject_id,
            $grade_id
        ));
    }

    /**
     * Get lessons for a unit
     */
    public static function get_lessons($subject_id, $grade_id, $unit_number)
    {
        global $wpdb;
        return $wpdb->get_results($wpdb->prepare(
            "SELECT * FROM {$wpdb->prefix}olama_curriculum WHERE subject_id = %d AND grade_id = %d AND unit_number = %s ORDER BY lesson_number ASC",
            $subject_id,
            $grade_id,
            $unit_number
        ));
    }

    /**
     * Add curriculum item
     */
    public static function add_curriculum_item($data)
    {
        global $wpdb;
        return $wpdb->insert(
            "{$wpdb->prefix}olama_curriculum",
            array(
                'grade_id' => $data['grade_id'],
                'subject_id' => $data['subject_id'],
                'semester_id' => $data['semester_id'],
                'unit_number' => $data['unit_number'],
                'unit_name' => $data['unit_name'],
                'lesson_number' => $data['lesson_number'],
                'lesson_title' => $data['lesson_title'],
                'objectives' => $data['objectives'] ?? '',
                'pages' => $data['pages'] ?? '',
                'duration' => $data['duration'] ?? 1,
                'resources' => $data['resources'] ?? '',
            )
        );
    }

    /**
     * Get a single curriculum item by ID
     */
    public static function get_item($id)
    {
        global $wpdb;
        return $wpdb->get_row($wpdb->prepare(
            "SELECT * FROM {$wpdb->prefix}olama_curriculum WHERE id = %d",
            $id
        ));
    }
}
