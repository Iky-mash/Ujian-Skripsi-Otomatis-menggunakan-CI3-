<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{


    public function index()
    {
        $this->template->load('sempro/jadwal', 'template');
    }
    public function semhas()
    {
        $this->template->load('semhas/jadwal', 'template');
    }
}
