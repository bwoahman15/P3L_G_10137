<?php
    if(isset($_GET['id_pegawai'])&&isset($_GET['id_shift'])){
        include ('../db.php');
        $id_pegawai = $_GET['id_pegawai'];
        $id_shift = $_GET['id_shift'];
        $HapusShift = mysqli_query($con, "DELETE FROM detail_shift WHERE id_pegawai='$id_pegawai' AND id_shift='$id_shift'") or die(mysqli_error($con));
        if($HapusShift){
            echo
            '<script>
            alert("Hapus Shift Sukses"); window.location = "../page/shift.php"
            </script>';
        }else{
        echo
            '<script>
            alert("Hapus Shift Gagal"); window.location = "../page/shift.php"
            </script>';
        }
    }else {
        echo
        '<script>
        window.history.back()
        </script>';
    }
?>