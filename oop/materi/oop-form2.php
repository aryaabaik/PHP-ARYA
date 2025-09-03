<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            Biodata
        </legend>

        <form action="" method="POST">
        <label for="">nama</label>
        <input type="text" name="nama" id="" required>
        <br>
        <label for="">kelas</label>
        <input type="text" name="kelas" id="" required>
        <br>
        <label for="">jenis Kelamin</label>
        <input type="radio" name="jenis_kelamin" value="laki- laki" required> Laki-laki
        <input type="radio" name="jenis_kelamin" value="perempuan" required> Perempuan
        <br>
        <label for="">tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" required>
        <br> <br>
        <label for="">agama</label>
        <select name="agama" id="">
            <option value=""></option>
            <option value="islam">Islam</option>
            <option value="kristen">Kristen</option>
            <option value="konghucu">Konghucu</option>
        </select>
        <br>
        <br>
        <button type="submit" >Submit</button>
        </form>
    </fieldset>
    <?php
        class Biodata
        {
            public $nama, $kelas, $jenis_kelamin, $tanggal_lahir, $agama;

            public function __construct($nama, $kelas, $jenis_kelamin, $tanggal_lahir, $agama)
            {
                $this->nama          = $nama;
                $this->kelas         = $kelas;
                $this->jenis_kelamin = $jenis_kelamin;
                $this->tanggal_lahir = $tanggal_lahir;
                $this->agama         = $agama;
            }

            public function tampilkanBiodata()
            {
                return "Nama : " . $this->nama . "<br>" . 
                 "Kelas : " . $this->kelas . "<br>" . 
                 "Jenis Kelamin : " . $this->jenis_kelamin . "<br>" . 
                 "Tanggal Lahir : " . $this->tanggal_lahir . "<br>" . 
                "Agama : " . $this->agama . "<br>";
            }
        }

        if (isset($_SERVER['REQUEST_METHOD']) == 'POST') {
            $a = $_POST['nama'];
            $b = $_POST['kelas'];
            $c = $_POST['jenis_kelamin'];
            $d = $_POST['tanggal_lahir'];
            $e = $_POST['agama'];

        }
        $bio = new Biodata($a, $b, $c, $d, $e);
        echo $bio->tampilkanBiodata();
    ?>
</body>
</html>