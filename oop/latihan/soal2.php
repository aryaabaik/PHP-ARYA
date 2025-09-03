<?php

class Siswa {
    public $nama;
    public $jenis_kelamin;
    public $tinggi;

    public function __construct($nama, $jenis_kelamin, $tinggi,)
    {
        $this->nama = $nama;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->tinggi = $tinggi;
    }

    public function bicara()
    {
        return "Sedang Bicara";
    }
}

$siswa1 = new Siswa("Budi", "Laki-Laki", 170);
echo "<h1> Nama : " . $siswa1->nama . "<br>";
echo "Jenis Kelamin : " . $siswa1->jenis_kelamin . "<br>";
echo "Tinggi : " . $siswa1->tinggi . "<br>";
echo "Siswa Ini " . $siswa1->bicara() . "<br>";

echo "<hr>";

$siswa2 = new Siswa("Rehan", "Laki-Laki", 160);

echo "Nama : " . $siswa2->nama . "<br>";
echo "Jenis Kelamin : " . $siswa2->jenis_kelamin . "<br>";
echo "Tinggi : " . $siswa2->tinggi . "<br>";
echo "Siswa Ini " . $siswa2->bicara() . "<br>";

echo "<hr>";

$siswa3 = new Siswa("Dadan", "Laki-Laki", 170);

echo "Nama : " . $siswa3->nama . "<br>";
echo "Jenis Kelamin : " . $siswa3->jenis_kelamin . "<br>";
echo "Tinggi : " . $siswa3->tinggi . "<br>";
echo "Siswa Ini " . $siswa3->bicara() . "<br>";

echo "<hr>";

$siswa4 = new Siswa("Maryana", "Perempuan", 165);

echo "Nama : " . $siswa4->nama . "<br>";
echo "Jenis Kelamin : " . $siswa4->jenis_kelamin . "<br>";
echo "Tinggi : " . $siswa4->tinggi . "<br>";
echo "Siswa Ini " . $siswa4->bicara() . "<br>";


