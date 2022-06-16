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
    <title>Mitra</title>

    
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF" >
        <div class="row">
            <div class="col"></div>

        </div>
        <h4 >MITRA</h4>

        <!-- Tambah Customer -->
        <div class="d-grid gap-2">
            <a href="./tambahMitraPage.php?id='.$data[0].'"><i style="color:blue" class="fa fa-plus fa-2x pull-right" ></i></a>
        </div>

        <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th style="text-align:center"scope="col">Nomor</th>
                        <th style="text-align:center"scope="col">Nama</th>
                        <th style="text-align:center"scope="col">Alamat</th>
                        <th style="text-align:center"scope="col">No Telepon</th>
                        <th style="text-align:center"scope="col">Status</th>
                    </tr>
                </thead>

                <!-- Cari Mitra -->
                <tbody>
                <form action="./mitra.php" method="post">
                    <input type="search" class="form-control" id="nama_mitra" name="nama_mitra" aria-describedby="emailHelp">
                    <button type="submit" hidden class="btn btn success" name="cari">Cari</button>
                </form>

                <tbody>
                <?php
                
                if(isset($_POST['cari'])){
                    include('../db.php');

                    $nama_mitra = $_POST['nama_mitra'];

                    $query = mysqli_query($con, "SELECT * FROM mitra WHERE nama_mitra LIKE '%$nama_mitra%'") or die(mysqli_error($con));
                }else{
                    $query = mysqli_query($con, "SELECT * FROM mitra") or die(mysqli_error($con));
                }
                    if (mysqli_num_rows($query) == 0) {
                        echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                    }else{
                        $no = 1;
                    while($data = mysqli_fetch_array($query)){
                        echo'
    <tr style="text-align:center">
        <th scope="row">'.$no.'</th>
        <td >'.$data[1].'</td>
        <td>'.$data[2].'</td>
        <td>'.$data[3].'</td>
        <td>'.$data[5].'</td>
        <td>
            <a href="./editMitraPage.php?id='.$data[0].'"><i style="color: green" class="fa fa-edit"></i></a>
            <a href="../process/hapusMitraProcess.php?id='.$data[0].'"
                onClick="return confirm ( \'Ingin melakukan aksi ini?\')">
                <i style="color: red" class="fa fa-trash"></i>
            </a>
        </td>
    </tr>';
 $no++;
    }
    }
    ?>
 </tbody>
 </table>
 </div>
 </aside>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
    MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>