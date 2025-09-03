<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <legend>Sistem Penggajian</legend>
    <form action="" method="post">
        <label for="">Nama</label>
        <input type="text" name="nama" required>
        <br>
        <label for="">No ID Karyawan</label>
        <input type="number" name="id" required>
        <br>
        <label for="">Gaji Pokok</label>
        <input type="number" name="gaji" required>
        <br>
        <label for="">Status Karyawan</label>
        <input type="radio" name="status" required>
        <br>
        <label for="">Tunjangan Jabatan</label>
        <input type="number" name="tunjangan" required> 
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>

    <?php
    class Penggajian{
        public $nama,
        $id,
        $gaji,
        $status,
        $tunjangan;

        public function __construct($nama, $id, $gaji, $status, $tunjangan)
        {
         $this->nama = $nama;
         $this->id = $id;
         $this->gaji = $gaji;
         $this->status = $status;
         $this->tunjangan = $tunjangan;
        }

        public function tampilkan()
        {
         
         }
        }
    }
    ?>
</body>
</html>