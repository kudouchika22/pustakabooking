<?php
class sepatu extends CI_Controller
{
        public function index()
    {
        $this->load->view('view-sepatu');
    }
        public function cetak()
    {
        $data = [
            'merk' => $this->input->post('merk'),
            'harga' => $this->input->post('harga'),
            'ukuran' => $this->input->post('ukuran')
            ];
            
            $this->load->view('view-data-sepatu', $data);
            }
    }