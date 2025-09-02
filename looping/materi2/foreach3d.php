<?php
$nilai = [
    //index -> key -> value
    ["nama" => "Arya", "mapel" => ["Matematika" => 80, "IPA" => 90, "Bahasa" => 85]],
    ["nama" => "Dadan", "mapel" => ["Matematika" => 75, "IPA" => 88, "Bahasa" => 79]],
    ["nama" => "Caca", "mapel" => ["Matematika" => 92, "IPA" => 81, "Bahasa" => 87]],
];
// index as $key => value
foreach ($nilai as $data) {
    echo "Nilai " . $data["nama"] . ": <br>";
    foreach ($data["mapel"] as $pelajaran => $nilai) {
        echo "- $pelajaran: $nilai <br>";
    }
    echo "<br>";
}
