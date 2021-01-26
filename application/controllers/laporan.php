<?php

class Laporan extends CI_Controller {

    public function laporan_pengeluaran()
    {
        $this->load->view('templates_owner/header');
        $this->load->view('templates_owner/sidebar');
        $this->load->view('laporan/laporan_pengeluaran');
        $this->load->view('templates_owner/footer');
    }

    public function laporan_pendapatan()
    {
        $this->load->view('templates_owner/header');
        $this->load->view('templates_owner/sidebar');
        $this->load->view('laporan/laporan_pendapatan');
        $this->load->view('templates_owner/footer');
    }
}