<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['tambahDriver']))
    {
        include('../db.php');
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
        $password_driver = password_hash($_POST['tanggal_lahir_driver'], PASSWORD_DEFAULT);

        $CekEmailCustomer = mysqli_query($con,"SELECT * FROM customer WHERE email_customer = '$email_driver'") or die(mysqli_error($con));
        $CekEmailPegawai = mysqli_query($con,"SELECT * FROM pegawai WHERE email_pegawai = '$email_driver'") or die(mysqli_error($con));
        
        if(mysqli_num_rows($CekEmailCustomer) != 0 || mysqli_num_rows($CekEmailPegawai) != 0)
        {
            echo'<script>alert("Email Sudah Terdaftar/Sama !");window.location = "../page/tambahDriverPage.php"</script>';
        }
        else
        {
            $TambahDriver = mysqli_query($con,"INSERT INTO driver(nomor_driver,nama_driver,alamat_driver,tanggal_lahir_driver,jenis_kelamin_driver,email_driver,no_telp_driver,bahasa_driver,sim_driver,surat_napza,surat_kejiwaan,surat_jasmani,skck,password_driver,foto_driver,tarif_driver,status_driver) VALUES (CONCAT('DRV','-',DATE_FORMAT(CURRENT_DATE, '%y%m%d')),'$nama_driver','$alamat_driver','$tanggal_lahir_driver','$jenis_kelamin_driver','$email_driver','$no_telp_driver','$bahasa_driver','$sim_driver','$surat_napza','$surat_kejiwaan','$surat_jasmani','$skck','$password_driver','$foto_driver','$tarif_driver','$status_driver')") or die(mysqli_error($con));
        
            if($TambahDriver)
            {
            echo'<script>alert("Tambah Driver Sukses"); window.location = "../page/driver.php"</script>';
            }
            else
            {
            echo'<script>alert("Tambah Driver Gagal");window.location = "../page/driver.php"</script>';
            }
        } 

    }
    
    else
    {
        echo'<script>window.history.back()</script>';
    }
?>