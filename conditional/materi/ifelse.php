<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php $umur = 16;

            if ($umur >= 17) {
                echo "Boleh membuat KTP";
            } else {
                echo "Belum boleh membuat KTP";
            }
        ?>
    </h1>
</body>
</html>