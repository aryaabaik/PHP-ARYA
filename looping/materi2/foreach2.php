<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            $siswa = [
                ["nama" => "Arya", "Kelas" => "XI RPL 3 "],
                ["nama" => "Abdan", "Kelas" => "XI RPL 3 "],
                ["nama" => "Gojin", "Kelas" => "XI RPL 3 "],
            ];
            foreach ($siswa as $s) {
                echo "Nama: " . $s["nama"] . "<br>" . " Kelas: " . $s["Kelas"] . "<br>";
            }
        ?>
    </h1>
</body>
</html>