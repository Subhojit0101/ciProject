<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        $this->load->view('register');
        $this->load->view('includes/footer');
    }
}
