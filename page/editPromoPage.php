<?php
 include '../component/sidebarAdmin.php';
?>

<?php
  $id_promo = $_GET['id'];
  $promo = mysqli_query($con, "SELECT * FROM promo WHERE id_promo = '$id_promo'") or die(mysqli_error($con));
  $data = mysqli_fetch_array($promo);

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
    <title>Edit Promo</title>
  </head>

 <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A;  box-shadow: 5px 10px 18px #888888;" >
    <h4 >EDIT PROMO</h4>
    <hr>
    <form action="../process/editPromoProcess.php?id='.$data[0].'" method="post">
    
    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Kode</label>
          <input class="form-control" id="kode_promo" required name="kode_promo" aria-describedby="emailHelp" value = "'.$data[1].'">
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Jenis</label>
          <input class="form-control" id="jenis_promo" required name="jenis_promo" aria-describedby="emailHelp" value = "'.$data[2].'">
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Keterangan</label>
          <input type="form-control" class="form-control" id="keterangan_promo" required name="keterangan_promo" aria-describedby="emailHelp" value = "'.$data[3].'">
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Jumlah</label>
          <input type="form-control" class="form-control" id="besar_promo" required name="besar_promo" aria-describedby="emailHelp" value = "'.$data[4].'">
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Status</label>
    <input type="form-control" class="form-control" id="status_promo" required name="status_promo" aria-describedby="emailHelp" value = "'.$data[5].'">
</div>
        
          <br><br>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="editPromo">Edit Promo</button>
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