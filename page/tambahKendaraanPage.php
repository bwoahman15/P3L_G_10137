<?php
include '../component/sidebarAdmin.php'
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Tambah Kendaraan</title>
  </head>

<body>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow:
0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
<h4 >TAMBAH Kendaraan</h4>
<hr>
<form action="../process/tambahKendaraanProcess.php" method="post">

<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Pilih Mitra</label>
  <select class="form-select" aria-label="Default select example" name="id_mitra" id="id_mitra" required>
    <?php
      include('../db.php');
      $query = mysqli_query($con, "SELECT id_mitra, nama_mitra FROM mitra") or die(mysqli_error($con));
      echo '<option value="" selected hidden>Pilih Mitra</option>';
      echo '<option value="" >-</option>';
      while($query2 = mysqli_fetch_array($query)) {
        echo '<option value="'.$query2[0].'">'.$query2[0].' - '.$query2[1].' - '.$query2[2].'</option>'; }
          ?>
  </select>
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Pemilik</label>
<select class="form-select" aria-label="Default select example" name="pemilik_kendaraan" id="pemilik_kendaraan">
<option value="AJR">AJR</option>
<option value="Mitra">Mitra</option>
</select>
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Nama Kendaraan</label>
<input class="form-control" id="nama_kendaraan" name="nama_kendaraan" aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Kategori Kendaraan</label>
<select class="form-select" aria-label="Default select example" name="kategori_kendaraan" id="kategori_kendaraan">
<option value="Sedan">Sedan</option>
<option value="City Car">City Car</option>
<option value="MPV">MPV</option>
<option value="SUV">SUV</option>
</select>
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">No STNK</label>
<input class="form-control" id="no_stnk_kendaraan" name="no_stnk_kendaraan" aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Jumlah Penumpang</label>
<input class="form-control" id="jumlah_penumpang" name="jumlah_penumpang" aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Jenis Transmisi</label>
<select class="form-select" aria-label="Default select example" name="jenis_transmisi" id="jenis_transmisi">
<option value="Manual">Manual</option>
<option value="Automatic">Automatic</option>
</select>
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Jenis BBM</label>
<select class="form-select" aria-label="Default select example" name="jenis_bbm" id="jenis_bbm">
<option value="Pertamax">Pertamax</option>
<option value="Pertalite">Pertalite</option>
</select>
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Warna</label>
<input class="form-control" id="warna_mobil" name="warna_mobil" aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Bagasi</label>
<input class="form-control" id="volume_bagasi" name="volume_bagasi" aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Fasilitas</label>
<input class="form-control" id="fasilitas_kendaraan" name="fasilitas_kendaraan" aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Harga Sewa</label>
<input class="form-control" id="harga_sewa" name="harga_sewa" aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Plat Nomor</label>
<input class="form-control" id="plat_nomor" name="plat_nomor" aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Tanggal Servis</label>
<input type="date" class="form-control" id="tanggal_servis" name="tanggal_servis" aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Kontrak Awal</label>
<input type="date" class="form-control" id="kontrak_awal" name="kontrak_awal" aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Kontrak Akhir</label>
<input type="date" class="form-control" id="kontrak_akhir" name="kontrak_akhir" aria-describedby="emailHelp">
</div>

<div class="d-grid gap-2">
<button type="submit" class="btn btn-primary" name="tambahKendaraan">Tambah Kendaraan</button>
</div>
</form>
</div>
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>