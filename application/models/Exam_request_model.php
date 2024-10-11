<?php
class Exam_request_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_exam_requests($id = FALSE)
    {
        if ($id === FALSE) {
            $query = $this->db->get('exam_requests');
            return $query->result_array();
        }
        $query = $this->db->get_where('exam_requests', array('id' => $id));
        return $query->row_array();
    }

    public function set_exam_request($data)
    {
        return $this->db->insert('exam_requests', $data);
    }

    // Tambahkan fungsi lain sesuai kebutuhan
}
