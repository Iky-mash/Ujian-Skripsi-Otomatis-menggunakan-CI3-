<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{


    public function index()
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
}
