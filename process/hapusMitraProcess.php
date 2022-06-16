<?php
if(isset($_GET['id'])){
include ('../db.php');
$id_mitra = $_GET['id'];
$HapusMitra = mysqli_query($con, "DELETE FROM mitra WHERE id_mitra='$id_mitra'") or die(mysqli_error($con));
if($HapusMitra){
echo
'<script>
alert("Delete Sukses"); window.location = "../page/mitra.php"
</script>';
}else{
echo
'<script>
alert("Delete Gagal"); window.location = "../page/mitra.php"
</script>';
}
}else {
echo
'<script>
window.history.back()
</script>';
}
?>