<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Latihan1 extends CI_Controller
{
    public function index()
    {
        //echo "Selamat Datang. . selamat belajar Web Programming";
        //$this->load->view('view-latihan');
        $this->load->view('view-form-tokosepatu');
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihan1');

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);

        $this->load->view('view-latihan', $data);
    }

    public function hitungSepatu()
    {
        $kode= $this->input->POST('kode');
        $this->load->model('Model_latihan1');

        $data['kode'] =$kode;
        $data['ukuran'] = $this->input->POST('ukuran');

        $data['hasil'] = $this->Model_latihan1->total($kode);

        $this->load->view('view-data-tokosepatu', $data);
    }
    
}