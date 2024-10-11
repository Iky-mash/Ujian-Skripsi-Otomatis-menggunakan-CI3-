<?php
class Schedule_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_schedules($id = FALSE)
    {
        if ($id === FALSE) {
            $query = $this->db->get('schedules');
            return $query->result_array();
        }
        $query = $this->db->get_where('schedules', array('id' => $id));
        return $query->row_array();
    }

    public function set_schedule($data)
    {
        return $this->db->insert('schedules', $data);
    }

    // Tambahkan fungsi lain sesuai kebutuhan
}
