<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['tambahMitra']))
    {
        include('../db.php');
        $nama_mitra = $_POST['nama_mitra'];
        $alamat_mitra = $_POST['alamat_mitra'];
        $no_telp_mitra = $_POST['no_telp_mitra'];
        $no_ktp_mitra = $_POST['no_ktp_mitra'];
        $status_mitra = $_POST['status_mitra'];
        
        $TambahMitra = mysqli_query($con,"INSERT INTO mitra(id_mitra,nama_mitra,alamat_mitra,no_telp_mitra,no_ktp_mitra,status_mitra) VALUES ('$id_mitra','$nama_mitra','$alamat_mitra','$no_telp_mitra','$no_ktp_mitra','$status_mitra')") or die(mysqli_error($con));
        
        if($TambahMitra)
        {
            echo'<script>alert("Tambah Mitra Sukses"); window.location = "../page/mitra.php"</script>';
        }
        else
        {
            echo'<script>alert("Tambah Mitra Gagal");window.location = "../page/mitra.php"</script>';
        }
        
    }
    
    else
    {
        echo'<script>window.history.back()</script>';
    }
?>