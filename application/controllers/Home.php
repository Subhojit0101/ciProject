<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{ 
    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('includes/slider');
        $this->load->view('includes/sidebar');
        $this->load->view('home');
        $this->load->view('includes/footer');
    }
}
