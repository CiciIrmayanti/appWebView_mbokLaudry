<?php

class Dashboard extends CI_Controller {

    public function index()
    {
        $this->load->view('templates_owner/header');
        $this->load->view('templates_owner/sidebar');
        $this->load->view('dashboard');
        $this->load->view('templates_owner/footer');
    }
}