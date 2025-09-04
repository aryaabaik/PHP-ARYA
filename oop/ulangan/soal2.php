<?php
    class Bioskop
    {
        public $nama, $jumlah, $hari, $kursi;
        public $tiksar = 50000;
        public $weekend = 10000;
        public $vip = 20000;

        public function __construct($a, $b, $c, $d)
        {
            $this->nama = $a;
            $this->jumlah = $b;
            $this->hari = $c;
            $this->kursi = $d;
        }
        public function totalharga()
        {
            $pertiket = $this->tiksar;
        
        if ($this->hari == "Minggu" || $this->hari == "Sabtu") {
            $this->pertiket + $this->weekend;
        }    elseif ($this->kursi == "Vip") {
            $this->pertiket + $this->vip;
        }
        $total = $pertiket * $this->jumlah;
        $pajak = $total * 0.05;
        $totalbayar = $total + $pajak;

        return [
            'pertiket' => $pertiket,
            'total' => $total,
            'pajak' => $pajak,
            'total' => $totalbayar;
        ]
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Nama Pembeli</label>
        <input type="text" name="nama" palceholder="silahkan masukkan nama">
        <label for="">Harga Tiker Dasar : Rp. 50.000</label>
        <input type="number" name="jumlah" placeholder="pilih jumlah">
        <br>
        <label for="">Siahkan Pilih Hari</label>
        <select name="hari" id="">
            <option value=""></option>
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option>
            <option value="Kamis">Kamis</option>
            <option value="Jumat">Jumat</option>
            <option value="Sabtu">Sabtu</option>
            <option value="Minggu">Minggu</option>
        </select><br>
        <label for="">Kursi</label>
        <select name="kursi" id="">
            <option value=""></option>
            <option value="Regular">Regular</option>
            <option value="Vip">Vip</option>
        </select><br>
        <button type="submit">Pesan</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $a = $_POST['nama'];
        $b = $_POST['jumlah'];
        $c = $_POST['hari'];
        $d = $_POST['kursi'];

        $bio = new Bioskop($nama, $jumlah, $hari, $kursi);
    
    ?>
    <table border="1">
        <th>Nama Pembeli</th>
        <tr>
            <td><?php echo $nama ?></td>
        </tr>
        <th>Jumlah </th>
        <tr>
            <td><?php echo $jumlah ?></td>
        </tr>
        <th>Hari</th>
        <tr>
            <td><?php echo $hari ?></td>
        </tr>
        <th>Kuri</th>
        <tr>
            <td><?php echo $kursi ?></td>
        </tr>
    </table>
    <?php
     }
    ?>
</body>
</html>
