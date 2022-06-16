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
    <title>Tambah Promo</title>
  </head>

<body>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow:
0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
<h4 >TAMBAH PROMO</h4>
<hr>
<form action="../process/tambahPromoProcess.php" method="post">

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Kode</label>
<input class="form-control" id="kode_promo" name="kode_promo" aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Jenis</label>
<input class="form-control" id="jenis_promo" name="jenis_promo" aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Keterangan</label>
<input class="form-control" id="keterangan_promo" name="keterangan_promo" aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Jumlah</label>
<input class="form-control" id="besar_promo" name="besar_promo" aria-describedby="emailHelp">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Status</label>
<input class="form-control" id="status_promo" name="status_promo" aria-describedby="emailHelp">
</div>


<div class="d-grid gap-2">
<button type="submit" class="btn btn-primary" name="tambahPromo">Tambah Promo</button>
</div>
</form>
</div>
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>