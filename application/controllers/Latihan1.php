<?php

class Latihan1 extends CI_Controller {

    public function index()
    {
        echo "Selamat datang.. selamat belajar web programming";
        
    }

    public function penjumlahan($n1,$n2,$n3)
    {
        $this->load->model('Model_latihan1');
        $data['nilai1']= $n1;
        $data['nilai2']= $n2;
        $data['nilai3']= $n3;
        $data['hasil']= $this->Model_latihan1->jumlah($n1,$n2,$n3);
        $this ->load->view('view-latihan', $data);
       }
}
