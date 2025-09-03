<?php

//blueprint atau class
class Kucing { 
    //porperty atau atribut
    public $warna = "merah";
    public $jumlah_kaki = 4;   

    //method atau fungsi
    public function bersuara()
    {
        return "meong meong";
    }

    public function berburu() 
    {
        return "kucing sedang berburu tikus";

    }
}

//instansiasi (pembuatan object)
$kucing1 = new Kucing();
echo "<h2>warna kucing : " . $kucing1->warna . "<br>";
echo "jumlah kaki kucing : " . $kucing1->jumlah_kaki . "<br>";
echo "suara kucing : " . $kucing1->bersuara() . "<br>";
echo $kucing1->berburu() . "<br>";