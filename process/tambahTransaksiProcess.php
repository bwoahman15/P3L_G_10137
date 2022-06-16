<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['tambahTransaksi']))
    {
        include('../db.php');

        $id_customer = $_POST['id_customer'];
        $id_driver = $_POST['id_driver'];
        $id_kendaraan = $_POST['id_kendaraan'];
        $id_promo = $_POST['id_promo'];
        $id_pegawai = $_POST['id_pegawai'];
        $no_ktp = $_POST['no_ktp'];
        $no_sim = $_POST['no_sim'];
        $tanggal_sewa = $_POST['tanggal_sewa'];
        $tanggal_selesai = $_POST['tanggal_selesai'];
        $tanggal_transaksi = $_POST['tanggal_transaksi'];
        $metode_pembayaran = $_POST['metode_pembayaran'];
    
        $CekTransaksi = mysqli_query($con,"SELECT * FROM transaksi WHERE id_customer = '$id_customer' AND status_transaksi!='Lunas'")or die(mysqli_error($con));
        
        if(mysqli_num_rows($CekTransaksi) !=0)
        {   
            echo'<script>alert("Hanya dapat menerima satu transaksi!");window.location = "../page/tambahTransaksiPage.php"</script>';
        }
        else
        {
            if(empty($id_driver))
            {
                if(empty($id_promo))
                {
                    $query = mysqli_query($con,
                                "INSERT INTO transaksi(format_transaksi, id_customer, id_kendaraan, id_pegawai, no_ktp, no_sim, tanggal_sewa, tanggal_selesai, tanggal_transaksi, metode_pembayaran, status_transaksi,sub_total)
                                VALUES
                                    (CONCAT('TRN',DATE_FORMAT(CURRENT_DATE, '%y%m%d'), '02','-'), '$id_customer', '$id_kendaraan', '$id_pegawai', '$no_ktp', '$no_sim', '$tanggal_sewa', '$tanggal_selesai', NOW(), 
                                    '$metode_pembayaran', 'Dalam Proses' ,(((SELECT harga_sewa FROM kendaraan WHERE id_kendaraan='$id_kendaraan') * TIMESTAMPDIFF(DAY,tanggal_sewa, tanggal_selesai))))")or die(mysqli_error($con));

                        if($query)
                        {
                            echo'<script>alert("Tambah Data Berhasil"); window.location = "../page/transaksi.php"</script>';
                        }
                        else
                        {
                            echo'<script>alert("Tambah Data Gagal");</script>';
                        }
                }
                else
                {
                    $query = mysqli_query($con,
                                "INSERT INTO transaksi(format_transaksi, id_customer, id_kendaraan, id_pegawai, id_promo, no_ktp, no_sim, tanggal_sewa, tanggal_selesai, tanggal_transaksi, metode_pembayaran, status_transaksi,sub_total)
                                VALUES
                                    (CONCAT('TRN',DATE_FORMAT(CURRENT_DATE, '%y%m%d'), '02','-'), '$id_customer', '$id_kendaraan', '$id_pegawai', '$id_promo', '$no_ktp', '$no_sim', '$tanggal_sewa', '$tanggal_selesai', NOW(), 
                                    '$metode_pembayaran', 'Dalam Proses' ,(((SELECT harga_sewa FROM kendaraan WHERE id_kendaraan='$id_kendaraan') * TIMESTAMPDIFF(DAY,tanggal_sewa, tanggal_selesai))))")or die(mysqli_error($con));

                        if($query)
                        {
                            echo'<script>alert("Tambah Data Sukses"); window.location = "../page/transaksi.php"</script>';
                        }
                        else
                        {
                            echo'<script>alert("Tambah Data Gagal");</script>';
                        }
                }
            }
            else
            {
                if(empty($id_promo))
                {
                    $query = mysqli_query($con,
                                "INSERT INTO transaksi(format_transaksi, id_customer, id_driver, id_kendaraan, id_pegawai, no_ktp, no_sim, tanggal_sewa, tanggal_selesai, tanggal_transaksi, metode_pembayaran, status_transaksi,sub_total)
                                VALUES
                                    (CONCAT('TRN',DATE_FORMAT(CURRENT_DATE, '%y%m%d'), '01','-'), '$id_customer', '$id_driver', '$id_kendaraan', '$id_pegawai', '$no_ktp', '$no_sim', '$tanggal_sewa', '$tanggal_selesai', NOW(), 
                                    '$metode_pembayaran', 'Dalam Proses' ,(((SELECT harga_sewa FROM kendaraan WHERE id_kendaraan='$id_kendaraan') * TIMESTAMPDIFF(DAY,tanggal_sewa, tanggal_selesai))))")or die(mysqli_error($con));

                        if($query)
                        {
                            echo'<script>alert("Tambah Data Berhasil"); window.location = "../page/transaksi.php"</script>';
                        }
                        else
                        {
                            echo'<script>alert("Tambah Data Gagal");</script>';
                        }
                }
                else
                {
                    $query = mysqli_query($con,
                                "INSERT INTO transaksi(format_transaksi, id_customer, id_kendaraan, id_pegawai, id_driver, id_promo, no_ktp, no_sim, tanggal_sewa, tanggal_selesai, tanggal_transaksi, metode_pembayaran, status_transaksi,sub_total)
                                VALUES
                                    (CONCAT('TRN',DATE_FORMAT(CURRENT_DATE, '%y%m%d'), '01','-'), '$id_customer', '$id_kendaraan', '$id_pegawai', '$id_driver', '$id_promo', '$no_ktp', '$no_sim', '$tanggal_sewa', '$tanggal_selesai', NOW(), 
                                    '$metode_pembayaran', 'Dalam Proses' ,(((SELECT harga_sewa FROM kendaraan WHERE id_kendaraan='$id_kendaraan') * TIMESTAMPDIFF(DAY,tanggal_sewa, tanggal_selesai))))")or die(mysqli_error($con));

                        if($query)
                        {
                            echo'<script>alert("Tambah Data Sukses"); window.location = "../page/transaksi.php"</script>';
                        }
                        else
                        {
                            echo'<script>alert("Tambah Data Gagal");</script>';
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