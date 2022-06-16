<?php
 include '../component/sidebarAdmin.php';
?>

<?php
  $id_driver = $_GET['id'];
  $driver = mysqli_query($con, "SELECT * FROM driver WHERE id_driver = '$id_driver'") or die(mysqli_error($con));
  $data = mysqli_fetch_array($driver);

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
    <title>Edit Driver</title>
  </head>

 <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A;  box-shadow: 5px 10px 18px #888888;" >
    <h4 >EDIT DRIVER</h4>
    <hr>
    <form action="../process/editDriverProcess.php?id='.$data[0].'" method="post">
    
    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
          <input class="form-control" id="nama_driver" required name="nama_driver" aria-describedby="emailHelp" value = "'.$data[1].'">
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Alamat Driver</label>
          <input class="form-control" id="alamat_driver" required name="alamat_driver" aria-describedby="emailHelp" value = "'.$data[2].'">
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
          <input type="date" class="form-control" id="tanggal_lahir_driver" required name="tanggal_lahir_driver" aria-describedby="emailHelp" value = "'.$data[3].'">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
        <select class="form-select" aria-label="Default select example" name="jenis_kelamin_driver" id="jenis_kelamin_driver" value = "'.$data[4].'">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="email_driver" required name="email_driver" aria-describedby="emailHelp" value = "'.$data[5].'">
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Telepon</label>
          <input class="form-control" id="no_telp_driver" required name="no_telp_driver" aria-describedby="emailHelp" value = "'.$data[7].'">
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Bahasa</label>
          <input class="form-control" id="bahasa_driver" required name="bahasa_driver" aria-describedby="emailHelp" value = "'.$data[8].'">
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Foto</label>
          <input class="form-control" id="sim_driver" name="sim_driver" aria-describedby="emailHelp" value = "'.$data[9].'">
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">SIM</label>
          <input class="form-control" id="surat_napza" name="surat_napza" aria-describedby="emailHelp" value = "'.$data[10].'">
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Surat Bebas Napza</label>
          <input class="form-control" id="surat_kejiwaan" name="surat_kejiwaan" aria-describedby="emailHelp" value = "'.$data[11].'">
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Surat Kesehatan Jiwa</label>
          <input class="form-control" id="surat_jasmani" name="surat_jasmani" aria-describedby="emailHelp" value = "'.$data[12].'">
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Surat Kesehatan Jasmani</label>
          <input class="form-control" id="skck" name="skck" aria-describedby="emailHelp"value = "'.$data[13].'">
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">SKCK</label>
          <input class="form-control" id="foto_driver" name="foto_driver" aria-describedby="emailHelp" value = "'.$data[14].'">
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Tarif</label>
          <input class="form-control" id="tarif_driver" name="tarif_driver" aria-describedby="emailHelp" value = "'.$data[15].'">
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Status Driver</label>
          <input class="form-control" id="status_driver" name="status_driver" aria-describedby="emailHelp" value = "'.$data[17].'">
    </div>
        
          <br><br>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="editDriver">Edit Driver</button>
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