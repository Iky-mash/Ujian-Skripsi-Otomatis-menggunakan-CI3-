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
        $this->template->load('dosen/data_dosen', 'template');
    }
    public function Agenda_dosen()
    {
        $this->template->load('dosen/agenda_dosen', 'template');
    }
    public function Mahasiswa()
    {
        $this->template->load('mahasiswa/data_mahasiswa', 'template');
    }
    public function TA()
    {
        $this->template->load('TA/tugas_akhir', 'template');
    }
    public function DPS()
    {
        $this->template->load('DPS/dosen_penguji', 'template');
    }
    public function sempro()
    {
        $this->template->load('sempro/jadwal', 'template');
    }
    public function semhas()
    {
        $this->template->load('semhas/jadwal', 'template');
    }
}
