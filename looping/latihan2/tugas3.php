<?php
$film = [
   ["nama" => "Nezha", "Rating" => 9.5],
   ["nama" => "Spiderman", "Rating" => 8.5],
   ["nama" => "Avengers", "Rating" => 7.5],
   ["nama" => "Inception", "Rating" => 6.0],
   ["nama" => "Interstellar", "Rating" => 8.0]
];
foreach ($film as $a) {
    if ($a["Rating"] > 8) {
        echo "Nama Film : " . $a["nama"] . " - " . " Rating Film : " . $a["Rating"] . "<br>";
    }
}
