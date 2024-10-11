<?php
class Notification_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_notifications($id = FALSE)
    {
        if ($id === FALSE) {
            $query = $this->db->get('notifications');
            return $query->result_array();
        }
        $query = $this->db->get_where('notifications', array('id' => $id));
        return $query->row_array();
    }

    public function set_notification($data)
    {
        return $this->db->insert('notifications', $data);
    }

    // Tambahkan fungsi lain sesuai kebutuhan
}
