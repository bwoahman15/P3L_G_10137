<?php
    if(isset($_POST['editCustomer']))
    {
        include('../db.php');
        $id_customer = $_GET['id'];
        $nama_customer = $_POST['nama_customer'];
        $alamat_customer = $_POST['alamat_customer'];
        $tanggal_lahir_customer = $_POST['tanggal_lahir_customer'];
        $jenis_kelamin_customer = $_POST['jenis_kelamin_customer'];
        $email_customer = $_POST['email_customer'];
        $no_telp_customer = $_POST['no_telp_customer'];

        $CekEmailDriver = mysqli_query($con,"SELECT * FROM driver WHERE email_driver = '$email_customer'") or die(mysqli_error($con));
        $CekEmailPegawai = mysqli_query($con,"SELECT * FROM pegawai WHERE email_pegawai = '$email_customer'") or die(mysqli_error($con));
        
        if(mysqli_num_rows($cekEmailDriver) != 0 || mysqli_num_rows($cekEmailPegawai) != 0)
        {
            echo'<script>alert("Email Sudah Terdaftar/Sama !");window.location = "../page/editCustomerPage.php"</script>';
        }
        else
        {
            $EditCustomer = mysqli_query($con,"UPDATE customer SET nama_customer = '$nama_customer',alamat_customer = '$alamat_customer',
            tanggal_lahir_customer = '$tanggal_lahir_customer',jenis_kelamin_customer = '$jenis_kelamin_customer',email_customer = '$email_customer',no_telp_customer = '$no_telp_customer' WHERE id_customer = '$id_customer'") 
            or die(mysqli_error($con)); 
        
            if($EditCustomer)
            {
            echo'<script>alert("Edit Customer Sukses"); window.location = "../page/customer.php"</script>';
            }
            else
            {
            echo'<script>alert("Edit Customer Gagal");window.location = "../page/customer.php"</script>';
            }
        } 

    }
    
    else
    {
        echo'<script>window.history.back()</script>';
    }
?>