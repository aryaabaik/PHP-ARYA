<?php

class Motor {
    public $merk;
    public $warna;
    public $alat;
    public $harga;

    public function __construct($a, $b, $c, $d)
    {
        $this->merk = $a;
        $this->warna = $b;
        $this->alat = $c;
        $this->harga = $d;
    }

    public function jalan()
    {
        return "Motor Ini Bisa Berjalan";
    }
}
$motor1 = new Motor("CBR150", "Merah", "Oli, Stang, Jok, Ban", 20000000);
echo "<h2>" .  "Merk Motor : " . $motor1->merk . "<br>";
echo "Warna Motor : " . $motor1->warna . "<br>";
echo "Alat Motor : " . $motor1->alat . "<br>";
echo "Harga Motor : " . $motor1->harga . "<br>";
echo "Merk Motor : " . $motor1->jalan() . "<br>";
