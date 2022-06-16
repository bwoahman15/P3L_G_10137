<?php
    if(isset($_POST['editPromo']))
    {

        include('../db.php');
        $id_promo = $_GET['id'];        
        $kode_promo = $_POST['kode_promo'];
        $jenis_promo = $_POST['jenis_promo'];
        $keterangan_promo = $_POST['keterangan_promo'];
        $besar_promo = $_POST['besar_promo'];
        $status_promo = $_POST['status_promo'];
  
        $EditPromo = mysqli_query($con,"UPDATE promo SET kode_promo = '$kode_promo',jenis_promo = '$jenis_promo',
        keterangan_promo = '$keterangan_promo',besar_promo = '$besar_promo',status_promo = '$status_promo' WHERE id_promo = '$id_promo' ") 
        or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

        if($EditPromo)
        {
            echo '<script>alert("Edit Promo Success"); window.location = "../page/promo.php"</script>';
        }

        else
        {
        echo '<script>alert("Edit Promo Failed");</script>';
        }
    }
        ?>