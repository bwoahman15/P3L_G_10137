<?php
if(isset($_GET['id'])){
include ('../db.php');
$id_pegawai = $_GET['id'];
$HapusPegawai = mysqli_query($con, "DELETE FROM pegawai WHERE id_pegawai='$id_pegawai'") or die(mysqli_error($con));

if($HapusPegawai){
echo
'<script>
alert("Hapus Data Sukses"); window.location = "../page/pegawai.php"
</script>';
}else{
echo
'<script>
alert("Hapus Data Gagal"); window.location = "../page/pegawai.php"
</script>';
}
}else {
echo
'<script>
window.history.back()
</script>';
}
?>