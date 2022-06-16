<?php
if(isset($_GET['id'])){
include ('../db.php');
$id_promo = $_GET['id'];
$HapusPromo = mysqli_query($con, "DELETE FROM promo WHERE id_promo='$id_promo'") or die(mysqli_error($con));

if($HapusPromo){
echo
'<script>
alert("Delete Sukses"); window.location = "../page/promo.php"
</script>';
}else{
echo
'<script>
alert("Delete Gagal"); window.location = "../page/promo.php"
</script>';
}
}else {
echo
'<script>
window.history.back()
</script>';
}
?>