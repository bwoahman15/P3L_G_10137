<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['tambahPegawai']))
    {
        include('../db.php');
        $nama_pegawai = $_POST['nama_pegawai'];
        $jabatan_pegawai = $_POST['jabatan_pegawai'];
        $alamat_pegawai = $_POST['alamat_pegawai'];
        $tanggal_lahir_pegawai = $_POST['tanggal_lahir_pegawai'];
        $jenis_kelamin_pegawai = $_POST['jenis_kelamin_pegawai'];
        $email_pegawai = $_POST['email_pegawai'];
        $no_telp_pegawai = $_POST['no_telp_pegawai'];
        $foto_pegawai = $_POST['foto_pegawai'];
        $password_pegawai = password_hash($_POST['tanggal_lahir_pegawai'], PASSWORD_DEFAULT);

        $CekEmailDriver = mysqli_query($con,"SELECT * FROM driver WHERE email_driver = '$email_pegawai'") or die(mysqli_error($con));
        $CekEmailCustomer = mysqli_query($con,"SELECT * FROM customer WHERE email_customer = '$email_pegawai'") or die(mysqli_error($con));
        
        if(mysqli_num_rows($CekEmailDriver) != 0 || mysqli_num_rows($CekEmailCustomer) != 0)
        {
            echo'<script>alert("Email Sudah Terdaftar/Sama !");window.location = "../page/tambahPegawaiPage.php"</script>';
        }
        else
        {
            $TambahPegawai = mysqli_query($con,"INSERT INTO pegawai(nama_pegawai,jabatan_pegawai,alamat_pegawai,tanggal_lahir_pegawai,jenis_kelamin_pegawai,email_pegawai,no_telp_pegawai,foto_pegawai) VALUES ('$nama_pegawai','$jabatan_pegawai','$alamat_pegawai','$tanggal_lahir_pegawai','$jenis_kelamin_pegawai','$email_pegawai','$no_telp_pegawai','$foto_pegawai')") or die(mysqli_error($con));
        
            if($TambahPegawai)
            {
            echo'<script>alert("Tambah Pegawai Sukses"); window.location = "../page/pegawai.php"</script>';
            }
            else
            {
            echo'<script>alert("Tambah Pegawai Gagal");window.location = "../page/pegawai.php"</script>';
            }
        } 

    }
    
    else
    {
        echo'<script>window.history.back()</script>';
    }
?>