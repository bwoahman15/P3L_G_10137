<?php
    if(isset($_POST['editDriver']))
    {
        include('../db.php');
        $id_driver = $_GET['id'];
        $nama_driver = $_POST['nama_driver'];
        $alamat_driver = $_POST['alamat_driver'];
        $tanggal_lahir_driver = $_POST['tanggal_lahir_driver'];
        $jenis_kelamin_driver = $_POST['jenis_kelamin_driver'];
        $email_driver = $_POST['email_driver'];
        $no_telp_driver = $_POST['no_telp_driver'];
        $bahasa_driver = $_POST['bahasa_driver'];
        $sim_driver = $_POST['sim_driver'];
        $surat_napza = $_POST['surat_napza'];
        $surat_kejiwaan = $_POST['surat_kejiwaan'];
        $surat_jasmani = $_POST['surat_jasmani'];
        $skck = $_POST['skck'];
        $foto_driver = $_POST['foto_driver'];
        $tarif_driver = $_POST['tarif_driver'];
        $status_driver = $_POST['status_driver'];
        

        $cekEmailCustomer = mysqli_query($con,"SELECT * FROM customer WHERE email_customer = '$email_driver'") or die(mysqli_error($con));
        $cekEmailPegawai = mysqli_query($con,"SELECT * FROM pegawai WHERE email_pegawai = '$email_driver'") or die(mysqli_error($con));
        
        if(mysqli_num_rows($cekEmailCustomer) != 0 || mysqli_num_rows($cekEmailPegawai) != 0)
        {
            echo'<script>alert("Email Sudah Terdaftar/Sama !");window.location = "../page/editDriverPage.php"</script>';
        }
        else
        {
            $EditDriver = mysqli_query($con,"UPDATE driver SET nama_driver = '$nama_driver',alamat_driver = '$alamat_driver',
            tanggal_lahir_driver = '$tanggal_lahir_driver',jenis_kelamin_driver = '$jenis_kelamin_driver',email_driver = '$email_driver',no_telp_driver = '$no_telp_driver',bahasa_driver = '$bahasa_driver',sim_driver = '$sim_driver',surat_napza = '$surat_napza',surat_kejiwaan = '$surat_kejiwaan',surat_jasmani = '$surat_jasmani',skck = '$skck',foto_driver = '$foto_driver',tarif_driver = '$tarif_driver',status_driver = '$status_driver' WHERE id_driver = '$id_driver'") 
            or die(mysqli_error($con)); 
        
            if($EditDriver)
            {
            echo'<script>alert("Edit Driver Sukses"); window.location = "../page/driver.php"</script>';
            }
            else
            {
            echo'<script>alert("Edit Driver Gagal");window.location = "../page/driver.php"</script>';
            }
        } 

    }
    
    else
    {
        echo'<script>window.history.back()</script>';
    }
?>