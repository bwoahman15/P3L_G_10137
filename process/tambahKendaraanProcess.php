<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['tambahKendaraan']))
    {
        include('../db.php');

        $id_mitra = $_POST['id_mitra'];
        $pemilik_kendaraan = $_POST['pemilik_kendaraan'];
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
    
        $TambahKendaraan = mysqli_query($con,"INSERT INTO kendaraan(id_mitra,pemilik_kendaraan,nama_kendaraan,kategori_kendaraan,no_stnk_kendaraan,
        jumlah_penumpang,jenis_transmisi,jenis_bbm,warna_mobil,volume_bagasi,fasilitas_kendaraan,harga_sewa,plat_nomor,tanggal_servis,kontrak_awal,
        kontrak_akhir) VALUES ('$id_mitra','$pemilik_kendaraan','$nama_kendaraan','$kategori_kendaraan','$no_stnk_kendaraan','$jumlah_penumpang',
        '$jenis_transmisi','$jenis_bbm','$warna_mobil','$volume_bagasi','$fasilitas_kendaraan','$harga_sewa','$plat_nomor','$tanggal_servis','$kontrak_awal','$kontrak_akhir')") or die(mysqli_error($con));
        
        if($TambahKendaraan)
        {
            echo'<script>alert("Tambah Kendaraan Sukses"); window.location = "../page/kendaraan.php"</script>';
        }
        else
        {
            echo'<script>alert("Tambah Kendaraan Gagal");window.location = "../page/kendaraan.php"</script>';
        }
        

    }
    
    else
    {
        echo'<script>window.history.back()</script>';
    }
?>