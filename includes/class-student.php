<?php
/**
 * Student Management Class
 */

if (!defined('ABSPATH')) {
    exit;
}

class Olama_School_Student
{

    /**
     * Get all students
     */
    public static function get_students()
    {
        global $wpdb;
        return $wpdb->get_results("SELECT s.*, g.grade_name, sec.section_name 
			FROM {$wpdb->prefix}olama_students s 
			LEFT JOIN {$wpdb->prefix}olama_grades g ON s.grade_id = g.id
			LEFT JOIN {$wpdb->prefix}olama_sections sec ON s.section_id = sec.id");
    }

    /**
     * Add student
     */
    public static function add_student($data)
    {
        global $wpdb;
        return $wpdb->insert(
            "{$wpdb->prefix}olama_students",
            array(
                'student_name' => $data['student_name'],
                'student_id_number' => $data['student_id_number'],
                'grade_id' => $data['grade_id'],
                'section_id' => $data['section_id'],
            )
        );
    }
}
