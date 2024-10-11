<?php
class Template
{
    var $template_data = array();
    private $CI; // Properti dideklarasikan

    public function __construct()
    {
        $this->CI = &get_instance(); // Inisialisasi di konstruktor
    }

    function set($name, $value)
    {
        $this->template_data[$name] = $value;
    }

    function load($view, $template = '', $view_data = array(), $return = FALSE)

    {
        $this->set('contents', $this->CI->load->view($view, $view_data, TRUE)); // Memuat view ke dalam 'contents'
        return $this->CI->load->view($template, $this->template_data, $return); // Memuat template utama
    }
}
