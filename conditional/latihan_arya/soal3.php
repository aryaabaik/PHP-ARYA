<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$uang = 500000;
$disc = 0;



if ($uang >= 500000) {
    $disc = 0.2 * $uang;
    echo "<h1>Selamat!!!";
    echo "<br>Anda Dapat Diskon 20%";
}
elseif ($uang >= 250000) {
    $disc = 0.1 * $uang;
    echo "Selamat!!!";
    echo "<br>Anda Dapat Diskon 10%";
}
else {
    $disc = 0;
    echo "Anda Tidak Dapat Diskon";
}

echo "<br><br> Uang Anda = $uang";
echo "<br>Total Diskon = $disc";
$total = $uang - $disc;
echo "<br>Total Bayar = $total";

?>

</body>
</html>