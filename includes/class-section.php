<?php
/**
 * Section Management Class
 */

if (!defined('ABSPATH')) {
    exit;
}

class Olama_School_Section
{

    /**
     * Get all sections
     */
    public static function get_sections()
    {
        global $wpdb;
        return $wpdb->get_results("SELECT s.*, g.grade_name FROM {$wpdb->prefix}olama_sections s JOIN {$wpdb->prefix}olama_grades g ON s.grade_id = g.id");
    }

    /**
     * Get sections by grade
     */
    public static function get_by_grade($grade_id)
    {
        global $wpdb;
        return $wpdb->get_results($wpdb->prepare(
            "SELECT * FROM {$wpdb->prefix}olama_sections WHERE grade_id = %d",
            $grade_id
        ));
    }

    /**
     * Get a single section by ID
     */
    public static function get_section($id)
    {
        global $wpdb;
        return $wpdb->get_row($wpdb->prepare(
            "SELECT * FROM {$wpdb->prefix}olama_sections WHERE id = %d",
            $id
        ));
    }

    /**
     * Add section
     */
    public static function add_section($data)
    {
        global $wpdb;

        // Check for duplicates in the same grade
        $exists = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(*) FROM {$wpdb->prefix}olama_sections WHERE grade_id = %d AND section_name = %s",
            $data['grade_id'],
            $data['section_name']
        ));

        if ($exists) {
            return new WP_Error('duplicate_section', __('A section with this name already exists for this grade.', 'olama-school'));
        }

        return $wpdb->insert(
            "{$wpdb->prefix}olama_sections",
            array(
                'grade_id' => $data['grade_id'],
                'section_name' => $data['section_name'],
                'room_number' => $data['room_number'] ?? '',
            )
        );
    }

    /**
     * Update section
     */
    public static function update_section($id, $data)
    {
        global $wpdb;

        // Check for duplicates (excluding current ID)
        $exists = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(*) FROM {$wpdb->prefix}olama_sections WHERE grade_id = %d AND section_name = %s AND id != %d",
            $data['grade_id'],
            $data['section_name'],
            $id
        ));

        if ($exists) {
            return new WP_Error('duplicate_section', __('A section with this name already exists for this grade.', 'olama-school'));
        }

        return $wpdb->update(
            "{$wpdb->prefix}olama_sections",
            array(
                'grade_id' => $data['grade_id'],
                'section_name' => $data['section_name'],
                'room_number' => $data['room_number'] ?? '',
            ),
            array('id' => $id)
        );
    }

    /**
     * Delete section with validation
     */
    public static function delete_section($id)
    {
        global $wpdb;

        // Check for related records (students)
        $count = $wpdb->get_var($wpdb->prepare(
            "SELECT COUNT(*) FROM {$wpdb->prefix}olama_students WHERE section_id = %d",
            $id
        ));

        if ($count > 0) {
            return new WP_Error('linked_records', sprintf(__('This section is linked to %d students.', 'olama-school'), $count));
        }

        return $wpdb->delete("{$wpdb->prefix}olama_sections", array('id' => $id));
    }
}
