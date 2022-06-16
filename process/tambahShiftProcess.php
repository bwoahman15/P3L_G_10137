<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['tambahShift']))
    {
        include('../db.php');

        $id_shift = $_POST['id_shift'];
        $id_pegawai = $_POST['id_pegawai'];
    
        $TambahShift = mysqli_query($con,"INSERT INTO detail_shift(id_shift, id_pegawai) VALUES('$id_shift','$id_pegawai')")or die(mysqli_error($con));
        
        if($TambahShift)
        {
            echo'<script>alert("Tambah Shift Sukses"); window.location = "../page/shift.php"</script>';
        }
        else
        {
            echo'<script>alert("Tambah Shift Gagal");window.location = "../page/shift.php"</script>';
        }
        

    }
    
    else
    {
        echo'<script>window.history.back()</script>';
    }
?>