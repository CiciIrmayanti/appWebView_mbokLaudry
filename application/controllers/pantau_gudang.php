<?php

class Pantau_gudang extends CI_Controller {

    public function dashboard()
    {
        $this->load->view('templates_owner/header');
        $this->load->view('templates_owner/sidebar');
        $this->load->view('pantau_gudang/dashboard');
        $this->load->view('templates_owner/footer');
    }
}