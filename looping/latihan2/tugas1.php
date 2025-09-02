<?php

$nama = [
    ["nama" => "Budi", "nilai" => 80],
    ["nama" => "Ani", "nilai" => 90],
    ["nama" => "Siti", "nilai" => 75],
    ["nama" => "Dodi", "nilai" => 60],
    ["nama" => "Rina", "nilai" => 85]
];
foreach ($nama as $a) {
    echo "Nama: " . $a["nama"] . ", Nilai: " . $a["nilai"] . "<br>"; 
    
    if ($a["nilai"] > 75) {
    echo "Keterangan: Lulus <br><br>";
 }
    else {
        echo "Keterangan: Tidak Lulus <br><br>";
    }
}


?>