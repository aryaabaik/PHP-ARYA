<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
      <?php $nilai = 90;

          if ($nilai >= 90) {
              echo "Lulus Dengan Nilai A";
          } elseif ($nilai >= 75) {
              echo "Lulus Dengan Nilai B";
          } elseif ($nilai >= 60) {
              echo "Lulus Dengan Nilai C";
          } else {
              echo "Tidak Lulus";
          }
      ?>
    </h1>
</body>
</html>