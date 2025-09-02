<?php
$barang = [
    ["nama" => "Handphone", "Stok" => 5],
    ["nama" => "Laptop", "Stok" => 3],
    ["nama" => "Tas", "Stok" => 4],
    ["nama" => "Sepatu", "Stok" => 2],
    ["nama" => "Baju", "Stok" => 10]
];
foreach ($barang as $info ) {
    if ($info["Stok"] < 5) { 
        echo "Nama Barang : " . $info["nama"] . "<br>" . " Stok: " . $info["Stok"] . "<br>";
    }
 }
