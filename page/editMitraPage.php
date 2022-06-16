<?php
 include '../component/sidebarAdmin.php';
?>

<?php
  $id_mitra = $_GET['id'];
  $mitra = mysqli_query($con, "SELECT * FROM mitra WHERE id_mitra = '$id_mitra'") or die(mysqli_error($con));
  $data = mysqli_fetch_array($mitra);

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
    <title>Edit Mitra</title>
  </head>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A;  box-shadow: 5px 10px 18px #888888;" >
    <h4 >EDIT MITRA</h4>
    <hr>
    <form action="../process/editMitraProcess.php?id='.$data[0].'" method="post">
    
    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
          <input class="form-control" id="nama_mitra" required name="nama_mitra" aria-describedby="emailHelp" value = "'.$data[1].'">
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Alamat</label>
          <input class="form-control" id="alamat_mitra" required name="alamat_mitra" aria-describedby="emailHelp" value = "'.$data[2].'">
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">No Telepon</label>
          <input type="form-control" class="form-control" id="no_telp_mitra" required name="no_telp_mitra" aria-describedby="emailHelp" value = "'.$data[3].'">
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">No KTP</label>
          <input type="form-control" class="form-control" id="no_ktp_mitra" required name="no_ktp_mitra" aria-describedby="emailHelp" value = "'.$data[4].'">
    </div>
    
    <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Status</label>
            <select class="form-select" aria-label="Default select example" name="status_mitra" id="status_mitra" value = "'.$data[5].'">
            <option value="Aktif">Aktif</option>
            <option value="Tidak aktif">Tidak aktif</option>
      </select>
      </div>
        
          <br><br>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="editMitra">Edit Mitra</button>
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