<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $this->template->load('dashboard', 'template');
    }

    public function Data_dosen()
    {
        $this->template->load('Admin/dosen/data_dosen', 'template');
    }
    public function Agenda_dosen()
    {
        $this->template->load('Admin/dosen/agenda_dosen', 'template');
    }
    public function Mahasiswa()
    {
        $this->template->load('Admin/mahasiswa/data_mahasiswa', 'template');
    }
    public function TA()
    {
        $this->template->load('Admin/TA/tugas_akhir', 'template');
    }
    public function DPS()
    {
        $this->template->load('Admin/DPS/dosen_penguji', 'template');
    }
    public function sempro()
    {
        $this->template->load('Admin/sempro/jadwal', 'template');
    }
    public function semhas()
    {
        $this->template->load('Admin/semhas/jadwal', 'template');
    }
}
