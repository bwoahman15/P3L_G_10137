<?php
    if(isset($_POST['editMitra']))
    {

        include('../db.php');
        $id_mitra = $_GET['id'];        
        $nama_mitra = $_POST['nama_mitra'];
        $alamat_mitra = $_POST['alamat_mitra'];
        $no_telp_mitra = $_POST['no_telp_mitra'];
        $no_ktp_mitra = $_POST['no_ktp_mitra'];
        $status_mitra = $_POST['status_mitra'];
  
        $EditMitra = mysqli_query($con,"UPDATE mitra SET nama_mitra = '$nama_mitra',alamat_mitra = '$alamat_mitra',
        no_telp_mitra = '$no_telp_mitra',no_ktp_mitra = '$no_ktp_mitra',status_mitra = '$status_mitra' WHERE id_mitra = '$id_mitra' ") 
        or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

        if($EditMitra)
        {
            echo '<script>alert("Edit Mitra Sukses"); window.location = "../page/mitra.php"</script>';
        }

        else
        {
        echo '<script>alert("Edit Mitra Gagal");</script>';
        }
    }
        ?>