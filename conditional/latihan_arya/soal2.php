<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $user = "admin";
    $password = "12345";


    if ($user == "admin") {
        if ($password == "12345") {
            echo "Login Berhasil Sebagai Admin!";
        }

        else {
            echo "Password Salah!";
        }    
        
}  else if ($user == "admin") {
        if ($password == "12345") {
            echo "Login Berhasil Sebagai Siswa!";
        } else {
            echo "Password Salah!";
        }
    } else {
        echo "Username Tidak Ditemukan!";
    }
    ?>
</body>
</html>