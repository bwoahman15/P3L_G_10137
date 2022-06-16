<?php
    if(isset($_POST['editShift']))
    {
        include('../db.php');
        $id_pegawai = $_POST['id_pegawai'];
        $id_shift = $_POST['id_shift'];
        $id_shift_lama = $_POST['id_shift_lama'];

        $temp = mysqli_query($con,"SELECT * FROM detail_shift WHERE id_pegawai='$id_pegawai' AND id_shift='$id_shift' ")
        or die(mysqli_error($con));

        if($id_shift!=$id_shift_lama)
        {
            if(mysqli_num_rows($temp)==0)
            {
                $EditShift = mysqli_query($con,"UPDATE detail_shift SET id_shift='$id_shift' WHERE id_pegawai='$id_pegawai' AND id_shift='$id_shift_lama' ")
                or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan di- tangani oleh perintah “or die”

                if($EditShift)
                {
                    echo'<script>alert("Edit Shift Sukses"); window.location = "../page/shift.php"</script>';
                }
                else
                {
                    echo'<script>alert("Edit Shift Gagal");</script>';
                }
            }
            else
            {
                echo'<script>alert("Shift Sudah Diambil!"); window.location = "../page/shift.php?id_pegawai='.$id_pegawai.'&id_shift='.$id_shift_lama.'"</script>';
            }
        }
        else
        {   
            echo'<script>alert("Edit Shift Pegawai Sukses"); window.location = "../page/shift.php"</script>';
        }
        
            

    }else{
    echo
    '<script> window.history.back()
    </script>';
    }
?>