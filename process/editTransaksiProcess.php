<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['editTransaksi']))
    {
        include('../db.php');

        $id_customer = $_POST['id_customer'];
        $id_driver = $_POST['id_driver'];
        $id_kendaraan = $_POST['id_kendaraan'];
        $id_promo = $_POST['id_promo'];
        $id_pegawai = $_POST['id_pegawai'];
        $metode_pembayaran = $_POST['metode_pembayaran'];
    
        $CekTransaksi = mysqli_query($con,"SELECT * FROM transaksi WHERE id_transaksi = '$id_transaksi' AND id_customer = '$id_customer' AND status_transaksi!='Lunas'")or die(mysqli_error($con));
        
        if(mysqli_num_rows($status_transaksi) == 'Lunas')
        {   
            echo'<script>alert("Transaksi yang sudah lunas tidak dapat di edit!");window.location = "../page/editTransaksiPage.php"</script>';
        }
        else
        {
            if(empty($id_driver))
            {
                if(empty($id_promo))
                {
                    $query = mysqli_query($con,"UPDATE transaksi SET id_kendaraan = '$id_kendaraan',id_pegawai = '$id_pegawai',metode_pembayaran = '$metode_pembayaran' WHERE id_customer = '$id_customer'") 
                    or die(mysqli_error($con)); 

                        if($query)
                        {
                            echo'<script>alert("Edit Data Berhasil"); window.location = "../page/transaksi.php"</script>';
                        }
                        else
                        {
                            echo'<script>alert("Edit Data Gagal");</script>';
                        }
                }
                else
                {
                    $query = mysqli_query($con,"UPDATE transaksi SET id_kendaraan = '$id_kendaraan',id_promo = '$id_promo',id_pegawai = '$id_pegawai',metode_pembayaran = '$metode_pembayaran' WHERE id_transaksi = '$id_transaksi'") 
                    or die(mysqli_error($con));

                        if($query)
                        {
                            echo'<script>alert("Edit Data Sukses"); window.location = "../page/transaksi.php"</script>';
                        }
                        else
                        {
                            echo'<script>alert("Edit Data Gagal");</script>';
                        }
                }
            }
            else
            {
                if(empty($id_promo))
                {
                    $query = mysqli_query($con,"UPDATE transaksi SET id_driver = '$id_driver',id_kendaraan = '$id_kendaraan',id_pegawai = '$id_pegawai',metode_pembayaran = '$metode_pembayaran' WHERE id_transaksi = '$id_transaksi'") 
                    or die(mysqli_error($con));

                        if($query)
                        {
                            echo'<script>alert("Edit Data Berhasil"); window.location = "../page/transaksi.php"</script>';
                        }
                        else
                        {
                            echo'<script>alert("Edit Data Gagal");</script>';
                        }
                }
                else
                {
                    $query = mysqli_query($con,"UPDATE transaksi SET id_driver = '$id_driver',id_kendaraan = '$id_kendaraan',id_promo = '$id_promo',id_pegawai = '$id_pegawai',metode_pembayaran = '$metode_pembayaran' WHERE id_transaksi = '$id_transaksi'") 
                    or die(mysqli_error($con));

                        if($query)
                        {
                            echo'<script>alert("Edit Data Sukses"); window.location = "../page/transaksi.php"</script>';
                        }
                        else
                        {
                            echo'<script>alert("Edit Data Gagal");</script>';
                        }
                }
            }
        }
        
    }
    
    else
    {
        echo'<script>window.history.back()</script>';
    }
?>