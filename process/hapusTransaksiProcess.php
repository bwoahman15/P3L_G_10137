<?php
  if(isset($_GET['id']))
  {
    include ('../db.php');
    $id_transaksi = $_GET['id'];

    $HapusTransaksi = mysqli_query($con, "DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'") or die(mysqli_error($con));
    
    if($HapusTransaksi)
    {
        echo'<script>alert("Hapus Sukses"); window.location = "../page/transaksi.php"</script>';
    }
    else
    {
        echo'<script>alert("Hapus Gagal"); window.location = "../page/transaksi.php"</script>';
    }
  }
  
  else 
  {
    echo'<script>window.history.back()</script>';
  }
?>