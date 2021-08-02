<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class hitungsepatu extends CI_Controller
{
 public function index()
 {
 $this->load->view('view-sepatu');
}
  public function penjumlahan($n1,$n2)
    {
        $this->load->model('model_tokosepatu');
         
        $data['nilai1'] =$n1;
        $data['nilai2'] = $n2;   
       
        $data['hasil'] = $this->model_tokosepatu->jumlah($n1,$n2);

        $this->load->view('view-sepatu', $data);
    }
 public function hitungsepatu()
    {
        $merk= $this->input->POST('merk');
        $this->load->model('model_tokosepatu');
         
        $data['merk'] =$merk;
        $data['ukuran'] = $this->input->POST('ukuran');   
       
        $data['hasil'] = $this->model_tokosepatu->total($merk);

        $this->load->view('view-data-sepatu', $data);
    }
 }
