<?php
    if(isset($_POST['editKendaraan']))
    {
        include('../db.php');
        $id_kendaraan = $_GET['id'];
        $nama_kendaraan = $_POST['nama_kendaraan'];
        $kategori_kendaraan = $_POST['kategori_kendaraan'];
        $no_stnk_kendaraan = $_POST['no_stnk_kendaraan'];
        $jumlah_penumpang = $_POST['jumlah_penumpang'];
        $jenis_transmisi = $_POST['jenis_transmisi'];
        $jenis_bbm = $_POST['jenis_bbm'];
        $warna_mobil = $_POST['warna_mobil'];
        $volume_bagasi = $_POST['volume_bagasi'];
        $fasilitas_kendaraan = $_POST['fasilitas_kendaraan'];
        $harga_sewa = $_POST['harga_sewa'];
        $plat_nomor = $_POST['plat_nomor'];
        $tanggal_servis = $_POST['tanggal_servis'];
        $kontrak_awal = $_POST['kontrak_awal'];
        $kontrak_akhir = $_POST['kontrak_akhir'];
        
        $EditKendaraan = mysqli_query($con,"UPDATE kendaraan SET nama_kendaraan = '$nama_kendaraan', kategori_kendaraan = '$kategori_kendaraan',no_stnk_kendaraan = '$no_stnk_kendaraan',jumlah_penumpang = '$jumlah_penumpang',jenis_transmisi = '$jenis_transmisi',
            jenis_bbm = '$jenis_bbm',warna_mobil = '$warna_mobil',volume_bagasi = '$volume_bagasi',fasilitas_kendaraan = '$fasilitas_kendaraan',harga_sewa = '$harga_sewa',
            plat_nomor = '$plat_nomor',tanggal_servis = '$tanggal_servis',kontrak_awal = '$kontrak_awal',kontrak_akhir = '$kontrak_akhir' WHERE id_kendaraan = '$id_kendaraan'") 
            or die(mysqli_error($con)); 
        
            if($EditKendaraan)
            {
            echo'<script>alert("Edit Kendaraan Sukses"); window.location = "../page/kendaraan.php"</script>';
            }
            else
            {
            echo'<script>alert("Edit Kendaraan Gagal");window.location = "../page/kendaraan.php"</script>';
            }


    }
    
    else
    {
        echo'<script>window.history.back()</script>';
    }
?>