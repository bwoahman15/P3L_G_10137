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
    <title>Kendaraan</title>

    
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF" >
        <div class="row">
            <div class="col"></div>

        </div>
        <h4 >KENDARAAN</h4>

        <!-- Tambah Kendaraan -->
        <div class="d-grid gap-2">
            <a href="./tambahKendaraanPage.php?id='.$data[0].'"><i style="color:blue" class="fa fa-plus fa-2x pull-right" ></i></a>
        </div>

        <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th style="text-align:center"scope="col">Nomor</th>
                        <th style="text-align:center"scope="col">Pemilik</th>
                        <th style="text-align:center"scope="col">Nama Kendaraan</th>
                        <th style="text-align:center"scope="col">Kategori</th>
                        <th style="text-align:center"scope="col">No STNK</th>
                        <th style="text-align:center"scope="col">Jumlah Penumpang</th>
                        <th style="text-align:center"scope="col">Harga Sewa</th>
                        <th style="text-align:center"scope="col">Plat Nomor</th>
                        <th style="text-align:center"scope="col">Kontrak Awal</th>
                        <th style="text-align:center"scope="col">Kontrak Akhir</th>
                    </tr>
                </thead>
                <tbody>
                <form action="./kendaraan.php" method="post">
                    <input type="search" class="form-control" id="nama_kendaraan" name="nama_kendaraan" aria-describedby="emailHelp">
                    <button type="submit" hidden class="btn btn success" name="cari">Cari</button>
                </form>

                <tbody>
                <?php
                
                if(isset($_POST['cari'])){
                    include('../db.php');

                    $nama_kendaraan = $_POST['nama_kendaraan'];

                    $query = mysqli_query($con, "SELECT * FROM kendaraan k JOIN mitra m ON k.id_mitra = m.id_mitra WHERE nama_kendaraan LIKE '%$nama_kendaraan%'") or die(mysqli_error($con));
                }else{
                    $query = mysqli_query($con, "SELECT * FROM kendaraan k JOIN mitra m ON k.id_mitra = m.id_mitra") or die(mysqli_error($con));
                }
                    if (mysqli_num_rows($query) == 0) {
                        echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                    }else{
                        $no = 1;
                    while($data = mysqli_fetch_array($query)){
                        echo'
    <tr style="text-align:center">
        <th scope="row">'.$no.'</th>
        <td >'.$data[18].'</td>
        <td >'.$data[3].'</td>
        <td>'.$data[4].'</td>
        <td>'.$data[5].'</td>
        <td>'.$data[6].'</td>
        <td>'.$data[12].'</td>
        <td>'.$data[13].'</td>
        <td>'.$data[15].'</td>
        <td>'.$data[16].'</td>
        <td>
            <a href="./editKendaraanPage.php?id='.$data[0].'"><i style="color: green" class="fa fa-edit"></i></a>
            <a href="../process/hapusKendaraanProcess.php?id='.$data[0].'"
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