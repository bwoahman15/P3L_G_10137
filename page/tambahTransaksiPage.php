<?php
 include '../component/sidebarCustomer.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Tambah Transaksi</title>
  </head>

  <body>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow:
0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
<h4 >Tambah Transaksi</h4>
<hr>
<form action="../process/tambahTransaksiProcess.php" method="post">

<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">ID Customer</label>
  <select class="form-select" aria-label="Default select example" name="id_customer" id="id_customer" required>
    <?php
      include('../db.php');
      $query = mysqli_query($con, "SELECT id_customer, nama_customer FROM customer") or die(mysqli_error($con));
      echo '<option value="" selected hidden>Pilih Customer</option>';
      echo '<option value="" >-</option>';
      while($query2 = mysqli_fetch_array($query)) {
        echo '<option value="'.$query2[0].'">'.$query2[0].' - '.$query2[1].' - '.$query2[2].'</option>'; }
          ?>
  </select>
</div>

<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">ID Driver</label>
  <select class="form-select" aria-label="Default select example" name="id_driver" id="id_driver" required>
    <?php
      include('../db.php');
      $query = mysqli_query($con, "SELECT id_driver, nama_driver FROM driver") or die(mysqli_error($con));
      echo '<option value="" selected hidden>Pilih Driver</option>';
      echo '<option value="" >-</option>';
      while($query2 = mysqli_fetch_array($query)) {
        echo '<option value="'.$query2[0].'">'.$query2[0].' - '.$query2[1].' - '.$query2[2].'</option>'; }
          ?>
  </select>
</div>

<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">ID Kendaraan</label>
  <select class="form-select" aria-label="Default select example" name="id_kendaraan" id="id_kendaraan" required>
    <?php
      include('../db.php');
      $query = mysqli_query($con, "SELECT id_kendaraan, nama_kendaraan FROM kendaraan") or die(mysqli_error($con));
      echo '<option value="" selected hidden>Pilih Kendaraan</option>';
      echo '<option value="" >-</option>';
      while($query2 = mysqli_fetch_array($query)) {
        echo '<option value="'.$query2[0].'">'.$query2[0].' - '.$query2[1].' - '.$query2[2].'</option>'; }
          ?>
  </select>
</div>

<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">ID Promo</label>
  <select class="form-select" aria-label="Default select example" name="id_promo" id="id_promo" required>
    <?php
      include('../db.php');
      $query = mysqli_query($con, "SELECT id_promo, kode_promo, jenis_promo FROM promo") or die(mysqli_error($con));
      echo '<option value="" selected hidden>Pilih Promo</option>';
      echo '<option value="" >-</option>';
      while($query2 = mysqli_fetch_array($query)) {
        echo '<option value="'.$query2[0].'">'.$query2[0].' - '.$query2[1].' - '.$query2[2].'</option>'; }
          ?>
  </select>
</div>

<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">ID Pegawai</label>
  <select class="form-select" aria-label="Default select example" name="id_pegawai" id="id_pegawai" required>
    <?php
      include('../db.php');
      $query = mysqli_query($con, "SELECT id_pegawai, nama_pegawai FROM pegawai") or die(mysqli_error($con));
      echo '<option value="" selected hidden>Pilih Customer</option>';
      echo '<option value="" >-</option>';
      while($query2 = mysqli_fetch_array($query)) {
        echo '<option value="'.$query2[0].'">'.$query2[0].' - '.$query2[1].' - '.$query2[2].'</option>'; }
          ?>
  </select>
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Tanggal Sewa</label>
<input type="datetime-local" class="form-control" id="tanggal_sewa" name="tanggal_sewa" aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Tanggal Selesai</label>
<input type="datetime-local" class="form-control" id="tanggal_selesai" name="tanggal_selesai" aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Tanggal Transaksi</label>
<input type="datetime-local" class="form-control" id="tanggal_transaksi" name="tanggal_transaksi" aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Metode Pembayaran</label>
<select class="form-select" aria-label="Default select example" name="metode_pembayaran" id="metode_pembayaran">
<option value="Tunai">Tunai</option>
<option value="Transfer">Transfer</option>
</select>
</div>

<div class="d-grid gap-2">
<button type="submit" class="btn btn-primary" name="tambahTransaksi">Tambah Transaksi</button>
</div>
        </form>
    </div>
            </aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>