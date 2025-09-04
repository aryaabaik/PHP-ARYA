<?php
    class Penggajian
    {
        public $nama, $no_id, $gp, $jabatan, $status_k, $status_kk;
        public $tj, $tt, $tm;

        public function __construct($a, $b, $c, $d, $e, $f)
        {
            $this->nama      = $a;
            $this->no_id     = $b;
            $this->gp        = $c;
            $this->jabatan   = $d;
            $this->status_k  = $e;
            $this->status_kk = $f;
        }

        public function tunjanganJabatan()
        {
            $jabatan = $this->jabatan;

            if ($jabatan == "Manager") {
                $this->tj = $this->gp * 0.2;
            } elseif ($jabatan == "Supervisor") {
                $this->tj = $this->gp * 0.15;
            } elseif ($jabatan == "Staff") {
                $this->tj = $this->gp * 0.15;
            } else {
                $this->$tj = 0;
            }
            return $this->tj;
        }
        public function tunjanganTransport()
        {
            $status   = $this->status_k;
            $this->tt = 0;
            if ($status == "Tetap") {
                $this->tt = 500000;
            } else {
                $this->tt = 0;
            }
            return $this->tt;
        }
        public function tunjanganMenikah()
        {
            $statusKK = $this->status_kk;
            $this->tm = 0;

            if ($statusKK == "Menikah") {
                $this->tm = 300000;
            } else {
                $this->tm = 0;
            }
            return $this->tm;
        }

        public function gajiKotor()
        {
            $gajiKotor = $this->gp + $this->tunjanganJabatan() + $this->tunjanganMenikah() + $this->tunjanganTransport();
            return $gajiKotor;
        }

        public function pajak()
        {
            $pajak = $this->gajiKotor() * 0.05;
            return $pajak;
        }

        public function gajiBersih()
        {
            $Gajibersih = $this->gajiKotor() - $this->pajak();
            return $Gajibersih;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="soal3.css">
<title>Document</title>
</head>
<body>
    <div class="wrapper">
    <form action="" method="post">
        <label for="">Nama Karyawan</label>
        <div class="input-box">
            <input type="text" name="nama" placeholder="NAMA KARYAWAN">
        </div> <br>
        <label for="">No ID Karyawan</label>
        <div class="input-box">
        <input type="number" name="no_id" placeholder="NO ID KARYAWAN">
        </div> <br>
        <label for="">Gaji Pokok</label>
        <div class="inpux-box">
            <input type="number" name="gp" placeholder=""> <br>
        </div>
            <label for="">Jabatan</label>
             <div class="inpux-box">
        <select name="jabatan" id="">
            <option value=""></option>
            <option value="Manager">Manager</option>
            <option value="Supervisor">Supervisor</option>
            <option value="Staff">Staff</option>
            <option value="Karyawan">Karyawan</option>
        </select>
    </div> <br>
    <div class="input-box">
    <input type="radio" name="status_k" Value="Tetap">Tetap
    <input type="radio" name="status_k" Value="Kontrak">Kontrak
    </div> <br>
        <label for="">Status Menikah</label>
        <div class="input-box">
        <select name="status_kk" id="">
            <option value=""></option>
            <option value="Menikah">Menikah</option>
            <option value="Belum Menikah">Belum Menikah</option>
        </select>
        </div><br>
        <button type="submit">Simpan</button>
    </form>
    </div>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $a = $_POST['nama'];
            $b = $_POST['no_id'];
            $c = $_POST['gp'];
            $d = $_POST['jabatan'];
            $e = $_POST['status_k'];
            $f = $_POST['status_kk'];

            $gaji = new Penggajian($a, $b, $c, $d, $e, $f);

        ?>
<table border="1">
 <th>Nama</th>
 <th>No ID</th>
 <th>Gaji Pokok</th>
 <th>Jabatan</th>
 <th>Status Karyawan</th>
 <th>Status Menikah</th>
<tr>
    <td><?php echo $gaji->nama ?></td>
    <td><?php echo $gaji->no_id ?></td>
    <td>Rp.<?php echo number_format($gaji->gp, 0, ',', '.') ?></td>
    <td><?php echo $gaji->jabatan ?></td>
    <td><?php echo $gaji->status_k ?></td>
    <td><?php echo $gaji->status_kk ?></td>
</tr>
<tr>
    <th>Tunjangan Jabatan</th>
    <td colspan="5">
        Rp.                       <?php echo number_format($gaji->tunjanganJabatan(), 0, ',', '.'); ?>
    </td>
</tr>
<tr>
    <th>Tunjangan Jabatan</th>
    <td colspan="5">
        Rp.                       <?php echo number_format($gaji->tunjanganTransport(), 0, ',', '.'); ?>
    </td>
</tr>
<tr>
    <th>Tunjangan Menikah</th>
    <td colspan="5">
        Rp.                       <?php echo number_format($gaji->tunjanganMenikah(), 0, ',', '.'); ?>
    </td>
</tr>
<tr>
      <th>Gaji Kotor</th>
    <td colspan="5">
        Rp.                       <?php echo number_format($gaji->gajiKotor(), 0, ',', '.'); ?>
    </td>
</tr>
<tr>
      <th>Pajak</th>
    <td colspan="5">
        Rp.                       <?php echo number_format($gaji->pajak(), 0, ',', '.'); ?>
    </td>
</tr>
<tr>
      <th>Gaji Bersih</th>
    <td colspan="5">
        Rp.                       <?php echo number_format($gaji->gajiBersih(), 0, ',', '.'); ?>
    </td>
</tr>

</table>
<?php }?>
</body>
</html>