<?php
class Perkalian extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. Ini Perkalian";
    }

    public function kali($n1, $n2)
    {
        $this->load->model('Model_perkalian');
        $hasil = $this->Model_perkalian->kali($n1,$n2);
        echo "Hasil perkalian dari ". $n1 ." x ". $n2 ." = " .$hasil;
    
        $hasiljml = $this->Model_perkalian->kurang($n1,$n2);
        echo "Hasil Pengurangan dari ". $n1 ." - ". $n2 ." = " .$hasiljml;

    }
}


?>