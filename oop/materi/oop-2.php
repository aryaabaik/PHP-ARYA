<?php
class Kucing
{
    public $nama;
    public $warna;
    public $jenis;

    //method khusus yang akan di panggil pertama kali / diawal
    public function __construct($nama, $warna, $jenis)
    {
        $this->nama  = $nama;
        $this->warna = $warna;
        $this->jenis = $jenis;
    }

    public function makan()
    {
        return "Kucing Sedang Makan";
    }
}

$kucing1 = new Kucing("Luna", "Hitam", "Persia");
echo "<h1>" . "Nama Kucing : " . $kucing1->nama . "<br>";
echo "Warna Kucing : " . $kucing1->warna . "<br>";
echo "Jenis Kucing : " . $kucing1->jenis . "<br>";
echo "<br>Hari ini " . $kucing1->makan();