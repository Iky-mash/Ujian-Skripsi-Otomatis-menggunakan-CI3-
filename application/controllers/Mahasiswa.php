<?php
class Mahasiswa extends CI_Controller
{
    private function load_template($view, $data = [])
    {
        $this->load->view('mahasiswa/templates/navbar', $data);
        $this->load->view('mahasiswa/templates/sidebar', $data);
        $this->load->view($view, $data);
        $this->load->view('mahasiswa/templates/footer', $data);
    }

    public function index()
    {
        $data['title'] = 'Dashboard Mahasiswa';
        $this->load_template('mahasiswa/dashboard', $data);
    }

    // Method untuk view lain, contoh: profil mahasiswa
    public function profil()
    {
        $data['title'] = 'Profil Mahasiswa';
        $this->load_template('mahasiswa/profil', $data);
    }
}
