<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$uang = 250000;

if ($uang >= 500000) {
    echo "anda dapat diskon 20%";
}
elseif ($uang >= 250000) {
    echo "anda dapat diskon 10%";
}
else {
    echo "anda tidak dapat diskon";
}
?>

</body>
</html>