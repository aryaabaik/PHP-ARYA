<?php

class Orang {
    public $nama = "Dadan";
    public $umur = 16;
    public $jenis_kelamin = "Laki-laki";
    public $tinggi = 170; 

    public function berjalan()
    {
        return "Sedang Berjalan";
    }
    public function makan() 
    {
        return "Sedang Makan";

    }
}

$orang1 = new Orang();
echo "<h2> Nama : " . $orang1->nama . "<br>";
echo "Umur : " . $orang1->umur . "<br>";
echo "Jenis Kelamin : " . $orang1->jenis_kelamin . "<br>";
echo "Tinggi : " . $orang1->tinggi . " cm<br> <br>";
echo "Hari ini " . $orang1->nama . " " . $orang1->berjalan() . "<br>";
echo "Dari Tadi " . $orang1->nama . " " . $orang1->makan() . "<br>"; 