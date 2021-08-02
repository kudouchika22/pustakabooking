<?php
class Tokosepatu extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-sepatu');
    }
    public function hitung()
    {
        $this->load->model('Model_tokosepatu');

        $merk = $this->input->POST('merk');
        $data['merk'] = $merk;
        $data['ukuran'] = $this->input->POST('ukuran');
        $data['hasil'] = $this->Model_tokosepatu->total($merk);

        $this->load->view('view-data-sepatu', $data);
    }
}