<?php
include '../component/sidebarAdmin.php'
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
    <title>Tambah Shift</title>
  </head>

<body>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow:
0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
<h4 >Tambah Shift</h4>
<hr>
<form action="../process/tambahShiftProcess.php" method="post">

<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Pilih Pegawai</label>
  <select class="form-select" aria-label="Default select example" name="id_pegawai" id="id_pegawai" required>
    <?php
      include('../db.php');
      $query = mysqli_query($con, "SELECT id_pegawai, nama_pegawai FROM pegawai") or die(mysqli_error($con));
      echo '<option value="" selected hidden>Pilih Pegawai</option>';
      echo '<option value="" >-</option>';
      while($query2 = mysqli_fetch_array($query)) {
        echo '<option value="'.$query2[0].'">'.$query2[0].' - '.$query2[1].' - '.$query2[2].'</option>'; }
          ?>
  </select>
</div>

<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Pilih Shift</label>
  <select class="form-select" aria-label="Default select example" name="id_shift" id="id_shift" required>
    <?php
      include('../db.php');
      $query = mysqli_query($con, "SELECT id_shift, hari_bekerja FROM shift") or die(mysqli_error($con));
      echo '<option value="" selected hidden>Pilih Shift</option>';
      echo '<option value="" >-</option>';
      while($query2 = mysqli_fetch_array($query)) {
        echo '<option value="'.$query2[0].'">'.$query2[0].' - '.$query2[1].'</option>'; }
          ?>
  </select>
</div>

<div class="d-grid gap-2">
<button type="submit" class="btn btn-primary" name="tambahShift">Tambah Shift</button>
</div>

</form>
</div>
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>