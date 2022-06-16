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
    <title>Tambah Pegawai</title>
  </head>

<body>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow:
0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
<h4 >TAMBAH CUSTOMER</h4>
<hr>
<form action="../process/tambahCustomerProcess.php" method="post">

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Nama</label>
<input class="form-control" id="nama_customer" name="nama_customer" aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Alamat</label>
<input class="form-control" id="alamat_customer" name="alamat_customer" aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
<input type="date" class="form-control" id="tanggal_lahir_customer" name="tanggal_lahir_customer" aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
<select class="form-select" aria-label="Default select example" name="jenis_kelamin_customer" id="jenis_kelamin_customer">
<option value="Laki-laki">Laki-laki</option>
<option value="Perempuan">Perempuan</option>
</select>
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Email</label>
<input class="form-control" id="email_customer" name="email_customer" aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">No Telepon</label>
<input class="form-control" id="no_telp_customer" name="no_telp_customer" aria-describedby="emailHelp">
</div>

<div class="d-grid gap-2">
<button type="submit" class="btn btn-primary" name="tambahCustomer">Tambah Customer</button>
</div>
</form>
</div>
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>