<?php
if(isset($_GET['id'])){
include ('../db.php');
$id_kendaraan = $_GET['id'];
$HapusKendaraan = mysqli_query($con, "DELETE FROM kendaraan WHERE id_kendaraan='$id_kendaraan'") or die(mysqli_error($con));
if($HapusKendaraan){
echo
'<script>
alert("Delete Sukses"); window.location = "../page/kendaraan.php"
</script>';
}else{
echo
'<script>
alert("Delete Gagal"); window.location = "../page/kendaraan.php"
</script>';
}
}else {
echo
'<script>
window.history.back()
</script>';
}
?>