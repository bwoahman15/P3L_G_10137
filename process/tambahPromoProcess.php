<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['tambahPromo']))
    {
        include('../db.php');
        $kode_promo = $_POST['kode_promo'];
        $jenis_promo = $_POST['jenis_promo'];
        $keterangan_promo = $_POST['keterangan_promo'];
        $besar_promo = $_POST['besar_promo'];
        $status_promo = $_POST['status_promo'];
        
        $TambahPromo = mysqli_query($con,"INSERT INTO promo(kode_promo,jenis_promo,keterangan_promo,besar_promo,status_promo) VALUES ('$kode_promo','$jenis_promo','$keterangan_promo','$besar_promo','$status_promo')") or die(mysqli_error($con));
        
        if($TambahPromo)
        {
            echo'<script>alert("Tambah Promo Sukses"); window.location = "../page/promo.php"</script>';
        }
        else
        {
            echo'<script>alert("Tambah Promo Gagal");window.location = "../page/promo.php"</script>';
        }
        
    }
    
    else
    {
        echo'<script>window.history.back()</script>';
    }
?>