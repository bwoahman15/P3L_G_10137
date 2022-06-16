<?php
    if(isset($_POST['editPegawai']))
    {
        include('../db.php');
        $id_pegawai = $_GET['id'];
        $nama_pegawai = $_POST['nama_pegawai'];
        $jabatan_pegawai = $_POST['jabatan_pegawai'];
        $alamat_pegawai = $_POST['alamat_pegawai'];
        $tanggal_lahir_pegawai = $_POST['tanggal_lahir_pegawai'];
        $jenis_kelamin_pegawai = $_POST['jenis_kelamin_pegawai'];
        $email_pegawai = $_POST['email_pegawai'];
        $no_telp_pegawai = $_POST['no_telp_pegawai'];
        $foto_pegawai = $_POST['foto_pegawai'];
        

        $CekEmailDriver = mysqli_query($con,"SELECT * FROM driver WHERE email_driver = '$email_pegawai'") or die(mysqli_error($con));
        $CekEmailCustomer = mysqli_query($con,"SELECT * FROM customer WHERE email_customer = '$email_pegawai'") or die(mysqli_error($con));
        
        if(mysqli_num_rows($CekEmailDriver) != 0 || mysqli_num_rows($CekEmailCustomer) != 0)
        {
            echo'<script>alert("Email Sudah Terdaftar/Sama !");window.location = "../page/editPegawaiPage.php"</script>';
        }
        else
        {
            $EditPegawai = mysqli_query($con,"UPDATE pegawai SET nama_pegawai = '$nama_pegawai', jabatan_pegawai = '$jabatan_pegawai', alamat_pegawai = '$alamat_pegawai',
            tanggal_lahir_pegawai = '$tanggal_lahir_pegawai',jenis_kelamin_pegawai = '$jenis_kelamin_pegawai',email_pegawai = '$email_pegawai',no_telp_pegawai = '$no_telp_pegawai', foto_pegawai = '$foto_pegawai' WHERE id_pegawai = '$id_pegawai'") 
            or die(mysqli_error($con)); 
        
            if($EditPegawai)
            {
            echo'<script>alert("Edit Pegawai Sukses"); window.location = "../page/pegawai.php"</script>';
            }
            else
            {
            echo'<script>alert("Edit Pegawai Gagal");window.location = "../page/pegawai.php"</script>';
            }
        } 

    }
    
    else
    {
        echo'<script>window.history.back()</script>';
    }
?>