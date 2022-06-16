<?php
if(isset($_GET['id'])){
include ('../db.php');
$id_driver = $_GET['id'];
$HapusDriver = mysqli_query($con, "DELETE FROM driver WHERE id_driver='$id_driver'") or die(mysqli_error($con));
if($HapusDriver){
echo
'<script>
alert("Delete Success"); window.location = "../page/driver.php"
</script>';
}else{
echo
'<script>
alert("Delete Failed"); window.location = "../page/driver.php"
</script>';
}
}else {
echo
'<script>
window.history.back()
</script>';
}
?>