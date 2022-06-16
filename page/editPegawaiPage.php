<?php
 include '../component/sidebarAdmin.php';
?>

<?php
  $id_pegawai = $_GET['id'];
  $pegawai = mysqli_query($con, "SELECT * FROM pegawai WHERE id_pegawai = '$id_pegawai'") or die(mysqli_error($con));
  $data = mysqli_fetch_array($pegawai);

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
    <title>Edit Pegawai</title>
  </head>

 <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A;  box-shadow: 5px 10px 18px #888888;" >
    <h4 >EDIT PEGAWAI</h4>
    <hr>
    <form action="../process/editPegawaiProcess.php?id='.$data[0].'" method="post">
    
    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
          <input class="form-control" id="nama_pegawai" required name="nama_pegawai" aria-describedby="emailHelp" value = "'.$data[1].'">
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jabatan</label>
        <select class="form-select" aria-label="Default select example" name="jabatan_pegawai" id="jabatan_pegawai" value = "'.$data[2].'">
            <option value="CS">Customer Service</option>
            <option value="Admin">Admin</option>
            <option value="Manajer">Manajer</option>
        </select>
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat </label>
    <input class="form-control" id="alamat_pegawai" required name="alamat_pegawai" aria-describedby="emailHelp" value = "'.$data[3].'">
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
          <input type="date" class="form-control" id="tanggal_lahir_pegawai" required name="tanggal_lahir_pegawai" aria-describedby="emailHelp" value = "'.$data[4].'">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
        <select class="form-select" aria-label="Default select example" name="jenis_kelamin_pegawai" id="jenis_kelamin_pegawai" value = "'.$data[5].'">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="email_pegawai" required name="email_pegawai" aria-describedby="emailHelp" value = "'.$data[6].'">
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">No Telepon</label>
          <input class="form-control" id="no_telp_pegawai" required name="no_telp_pegawai" aria-describedby="emailHelp" value = "'.$data[8].'">
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Foto</label>
    <input class="form-control" id="foto_pegawai" name="foto_pegawai" aria-describedby="emailHelp" value = "'.$data[9].'">
    </div>
        
          <br><br>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="editPegawai">Edit Pegawai</button>
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