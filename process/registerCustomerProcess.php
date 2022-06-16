<?php
    if(isset($_POST['register']))
    {
        include('../db.php');
        $nama_customer = $_POST['nama_customer'];
        $alamat_customer = $_POST['alamat_customer'];
        $tanggal_lahir_customer = $_POST['tanggal_lahir_customer'];
        $jenis_kelamin_customer = $_POST['jenis_kelamin_customer'];
        $email_customer = $_POST['email_customer'];
        $no_telp_customer = $_POST['no_telp_customer'];
        $password_customer = password_hash($_POST['tanggal_lahir_customer'], PASSWORD_DEFAULT);
        
        $CekCustomer = mysqli_query($con,"SELECT * FROM customer WHERE email_customer = '$email_customer'") or die(mysqli_error($con));
        $CekPegawai = mysqli_query($con,"SELECT * FROM pegawai WHERE email_pegawai = '$email_customer'") or die(mysqli_error($con));

        if(mysqli_num_rows($CekCustomer) != 0 || mysqli_num_rows($CekPegawai) != 0)
        {
            echo'<script>alert("Email Sudah Terdaftar/Sama!");window.location = "../page/registerPage.php"</script>';
        }
        else
        {
           
            $RegisterCustomer = mysqli_query($con,"INSERT INTO customer(nomor_customer,nama_customer,alamat_customer,tanggal_lahir_customer,jenis_kelamin_customer,email_customer,password_customer,no_telp_customer) VALUES (CONCAT('CUS', DATE_FORMAT(CURRENT_DATE, '%y%m%d'), '-'),'$nama_customer','$alamat_customer','$tanggal_lahir_customer','$jenis_kelamin_customer','$email_customer','$password_customer','$no_telp_customer') ") or die(mysqli_error($con));
        
            if($RegisterCustomer)
            {
            echo'<script>alert("Register Sukses"); window.location = "../page/index.php"</script>';
            }
            else
            {
            echo'<script>alert("Register Gagal");window.location = "../page/registerPage.php"</script>';
            }
        } 

    }
    
    else
    {
        echo'<script>window.history.back()</script>';
    }
?>