<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{


    public function index()
    {
        $this->template->load('dosen/data_dosen', 'template');
    }
    public function Agenda()
    {
        $this->template->load('dosen/agenda_dosen', 'template');
    }
}
