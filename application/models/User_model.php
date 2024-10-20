<?php
class User_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_users($id = FALSE)
    {
        if ($id === FALSE) {
            $query = $this->db->get('users');
            return $query->result_array();
        }
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row_array();
    }

    public function set_user($data)
    {
        return $this->db->insert('users', $data);
    }

    // Tambahkan fungsi lain sesuai kebutuhan
}
