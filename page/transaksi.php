<?php
 include '../component/sidebarCustomer.php'
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
    <title>Transaksi</title>

    
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF" >
        <div class="row">
            <div class="col"></div>

        </div>
        <h4 >Transaksi</h4>

        <!-- Tambah Customer -->
        <div class="d-grid gap-2">
            <a href="./tambahTransaksiPage.php?id='.$data[0].'"><i style="color:blue" class="fa fa-plus fa-2x pull-right" ></i></a>
        </div>

        <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th style="text-align:center"scope="col">Nomor</th>
                        <th style="text-align:center"scope="col">Nama Customer</th>
                        <th style="text-align:center"scope="col">Tanggal Sewa</th>
                        <th style="text-align:center"scope="col">Tanggal Kembali</th>
                        <th style="text-align:center"scope="col">Tanggal Transaksi</th>
                        <th style="text-align:center"scope="col">Metode Pembayaran</th>
                        <th style="text-align:center"scope="col">Jumlah Pembayaran</th>
                        <th style="text-align:center"scope="col">Harga Promo</th>
                        <th style="text-align:center"scope="col">Denda Pembayaran</th>
                        <th style="text-align:center"scope="col">Sub Total</th>
                        <th style="text-align:center"scope="col">Status Transaksi</th>
                        <th style="text-align:center"scope="col">Rating Driver</th>
                        <th style="text-align:center"scope="col">Jenis Transaksi</th>
                        <th style="text-align:center"scope="col">Aksi</th>
                    </tr>
                </thead>

                <!-- Cari Pegawai -->
                <tbody>
                <form action="./transaksi.php" method="post">
                    <input type="search" class="form-control" id="nama_customer" name="nama_customer" aria-describedby="emailHelp">
                    <button type="submit" hidden class="btn btn success" name="cari">Cari</button>
                </form>

                <tbody>
                <?php
                
                if(isset($_POST['cari'])){
                    include('../db.php');

                    $nama_customer = $_POST['nama_customer'];

                    $query = mysqli_query($con, "SELECT * FROM transaksi t JOIN customer c ON t.id_customer = c.id_customer JOIN driver d ON d.id_driver = t.id_driver JOIN kendaraan k ON k.id_kendaraan = t.id_kendaraan WHERE nama_customer LIKE '%$nama_customer%'") or die(mysqli_error($con));
                }else{
                    $query = mysqli_query($con, "SELECT * FROM transaksi t JOIN customer c ON t.id_customer = c.id_customer JOIN driver d ON d.id_driver = t.id_driver JOIN kendaraan k ON k.id_kendaraan = t.id_kendaraan") or die(mysqli_error($con));
                }
                    if (mysqli_num_rows($query) == 0) {
                        echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                    }else{
                        $no = 1;
                    while($data = mysqli_fetch_array($query)){
                        echo'
    <tr style="text-align:center">
        <th scope="row">'.$no.'</th>
        <td >'.$data[21].'</td>
        <td>'.$data[8].'</td>
        <td>'.$data[9].'</td>
        <td>'.$data[10].'</td>
        <td>'.$data[11].'</td>
        <td>'.$data[12].'</td>
        <td>'.$data[13].'</td>
        <td>'.$data[14].'</td>
        <td>'.$data[15].'</td>
        <td>'.$data[16].'</td>
        <td>'.$data[17].'</td>
        <td>'.$data[18].'</td>
        <td>
            <a href="./editTransaksiPage.php?id_transaksi='.$data[0].'&id_customer='.$data[1].'&id_driver='.$data[2].'&id_kendaraan='.$data[3].'&id_promo='.$data[4].'&id_pegawai='.$data[5].'&metode_pembayaran='.$data[11].'"><i style="color: green" class="fa fa-edit"></i></a>
            <a href="../process/hapusTransaksiProcess.php?id='.$data[0].'"
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