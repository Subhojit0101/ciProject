<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('RegisterModels');
        $this->RegisterModels = new RegisterModels;
    }

    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('includes/sidebar');
        $this->load->view('register');
        $this->load->view('includes/footer');
    }

    public function signin()

    {
            $this->RegisterModels->insert_user();
            redirect(base_url('register'));

    }
}
