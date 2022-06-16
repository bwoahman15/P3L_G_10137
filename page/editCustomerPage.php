<?php
 include '../component/sidebarAdmin.php';
?>

<?php
  $id_customer = $_GET['id'];
  $customer = mysqli_query($con, "SELECT * FROM customer WHERE id_customer = '$id_customer'") or die(mysqli_error($con));
  $data = mysqli_fetch_array($customer);

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
    <form action="../process/editCustomerProcess.php?id='.$data[0].'" method="post">
    
    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama</label>
          <input class="form-control" id="nama_customer" required name="nama_customer" aria-describedby="emailHelp" value = "'.$data[1].'">
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Alamat</label>
          <input class="form-control" id="alamat_customer" required name="alamat_customer" aria-describedby="emailHelp" value = "'.$data[2].'">
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
          <input type="date" class="form-control" id="tanggal_lahir_customer" required name="tanggal_lahir_customer" aria-describedby="emailHelp" value = "'.$data[3].'">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
        <select class="form-select" aria-label="Default select example" name="jenis_kelamin_customer" id="jenis_kelamin_customer" value = "'.$data[4].'">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="email_customer" required name="email_customer" aria-describedby="emailHelp" value = "'.$data[5].'">
    </div>

    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Telepon</label>
          <input class="form-control" id="no_telp_customer" required name="no_telp_customer" aria-describedby="emailHelp" value = "'.$data[7].'">
    </div>
        
          <br><br>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="editCustomer">Edit Customer</button>
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