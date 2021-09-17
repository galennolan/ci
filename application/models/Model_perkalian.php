<?php

class Model_perkalian extends CI_Model
{
    //Membuat variabel untuk menampung nilai
    public $nilai1, $nilai2, $hasil, $hasiljml;

    //method perkalian
    public function kali($n1= null, $n2 =null)
    {
        $this->nilai1= $n1;
        $this->nilai2= $n2;
        $this->hasil = $this->nilai1 * $this->nilai2;
        return $this->hasil;
    }

    public function kurang($n1= null, $n2=null)
    {
        $this->nilai1=$n1;
        $this->nilai2=$n2;
        $this->hasiljml=$this->nilai1 - $this->nilai2;
        return $this->hasiljml;
    }
}
