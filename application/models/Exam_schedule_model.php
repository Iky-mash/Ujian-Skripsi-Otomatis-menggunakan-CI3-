<?php
class Exam_schedule_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_exam_schedules($id = FALSE)
    {
        if ($id === FALSE) {
            $query = $this->db->get('exam_schedules');
            return $query->result_array();
        }
        $query = $this->db->get_where('exam_schedules', array('id' => $id));
        return $query->row_array();
    }

    public function set_exam_schedule($data)
    {
        return $this->db->insert('exam_schedules', $data);
    }

    // Tambahkan fungsi lain sesuai kebutuhan
}
