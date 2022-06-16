<?php
 include '../component/sidebarAdmin.php';
?>

<?php
  $id_kendaraan = $_GET['id'];
  $kendaraan = mysqli_query($con, "SELECT * FROM kendaraan WHERE id_kendaraan = '$id_kendaraan'") or die(mysqli_error($con));
  $data = mysqli_fetch_array($kendaraan);

echo'
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Edit Customer</title>
  </head>

 <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A;  box-shadow: 5px 10px 18px #888888;" >
    <h4 >EDIT CUSTOMER</h4>
    <hr>
    <form action="../process/editKendaraanProcess.php?id='.$data[0].'" method="post">

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Nama Kendaraan</label>
<input class="form-control" id="nama_kendaraan" name="nama_kendaraan" aria-describedby="emailHelp" value = "'.$data[3].'">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Kategori Kendaraan</label>
<select class="form-select" aria-label="Default select example" name="kategori_kendaraan" id="kategori_kendaraan" value = "'.$data[4].'">
<option value="Sedan">Sedan</option>
<option value="City Car">City Car</option>
<option value="MPV">MPV</option>
<option value="SUV">SUV</option>
</select>
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">No STNK</label>
<input class="form-control" id="no_stnk_kendaraan" name="no_stnk_kendaraan" aria-describedby="emailHelp" value = "'.$data[5].'">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Jumlah Penumpang</label>
<input class="form-control" id="jumlah_penumpang" name="jumlah_penumpang" aria-describedby="emailHelp" value = "'.$data[6].'">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Jenis Transmisi</label>
<select class="form-select" aria-label="Default select example" name="jenis_transmisi" id="jenis_transmisi" value = "'.$data[7].'">
<option value="Manual">Manual</option>
<option value="Automatic">Automatic</option>
</select>
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Jenis BBM</label>
<select class="form-select" aria-label="Default select example" name="jenis_bbm" id="jenis_bbm" value = "'.$data[8].'">
<option value="Pertamax">Pertamax</option>
<option value="Pertalite">Pertalite</option>
</select>
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Warna</label>
<input class="form-control" id="warna_mobil" name="warna_mobil" aria-describedby="emailHelp" value = "'.$data[9].'">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Bagasi</label>
<input class="form-control" id="volume_bagasi" name="volume_bagasi" aria-describedby="emailHelp" value = "'.$data[10].'">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Fasilitas</label>
<input class="form-control" id="fasilitas_kendaraan" name="fasilitas_kendaraan" aria-describedby="emailHelp" value = "'.$data[11].'">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Harga Sewa</label>
<input class="form-control" id="harga_sewa" name="harga_sewa" aria-describedby="emailHelp" value = "'.$data[12].'">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Plat Nomor</label>
<input class="form-control" id="plat_nomor" name="plat_nomor" aria-describedby="emailHelp" value = "'.$data[13].'">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Tanggal Servis</label>
<input type="date" class="form-control" id="tanggal_servis" name="tanggal_servis" aria-describedby="emailHelp" value = "'.$data[14].'">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Kontrak Awal</label>
<input type="date" class="form-control" id="kontrak_awal" name="kontrak_awal" aria-describedby="emailHelp" value = "'.$data[15].'">
</div>

<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Kontrak Akhir</label>
<input type="date" class="form-control" id="kontrak_akhir" name="kontrak_akhir" aria-describedby="emailHelp" value = "'.$data[16].'">
</div>
        
          <br><br>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="editKendaraan">Edit Kendaraan</button>
        </div>
        <br>
    
 </form>
 </div>
 </aside>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
  '
?>