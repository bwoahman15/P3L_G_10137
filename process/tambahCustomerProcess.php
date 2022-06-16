<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['tambahCustomer']))
    {
        include('../db.php');
        $nama_customer = $_POST['nama_customer'];
        $alamat_customer = $_POST['alamat_customer'];
        $tanggal_lahir_customer = $_POST['tanggal_lahir_customer'];
        $jenis_kelamin_customer = $_POST['jenis_kelamin_customer'];
        $email_customer = $_POST['email_customer'];
        $no_telp_customer = $_POST['no_telp_customer'];
        $password_customer = password_hash($_POST['tanggal_lahir_customer'], PASSWORD_DEFAULT);

        $CekEmailDriver = mysqli_query($con,"SELECT * FROM driver WHERE email_driver = '$email_customer'") or die(mysqli_error($con));
        $CekEmailPegawai = mysqli_query($con,"SELECT * FROM pegawai WHERE email_pegawai = '$email_customer'") or die(mysqli_error($con));
        
        if(mysqli_num_rows($CekEmailDriver) != 0 || mysqli_num_rows($CekEmailPegawai) != 0)
        {
            echo'<script>alert("Email Sudah Terdaftar/Sama !");window.location = "../page/tambahCustomerPage.php"</script>';
        }
        else
        {
            $TambahCustomer = mysqli_query($con,"INSERT INTO customer(nomor_customer,nama_customer,alamat_customer,tanggal_lahir_customer,jenis_kelamin_customer,email_customer,no_telp_customer,password_customer) VALUES (CONCAT('CUST','-',DATE_FORMAT(CURRENT_DATE, '%y%m%d')),'$nama_customer','$alamat_customer','$tanggal_lahir_customer','$jenis_kelamin_customer','$email_customer','$no_telp_customer','$password_customer')") or die(mysqli_error($con));
        
            if($TambahCustomer)
            {
            echo'<script>alert("Tambah Customer Sukses"); window.location = "../page/customer.php"</script>';
            }
            else
            {
            echo'<script>alert("Tambah Customer Gagal");window.location = "../page/customer.php"</script>';
            }
        } 

    }
    
    else
    {
        echo'<script>window.history.back()</script>';
    }
?>