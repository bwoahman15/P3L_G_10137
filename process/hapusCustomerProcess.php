<?php
if(isset($_GET['id'])){
include ('../db.php');
$id_customer = $_GET['id'];
$HapusCustomer = mysqli_query($con, "DELETE FROM customer WHERE id_customer='$id_customer'") or die(mysqli_error($con));
if($HapusCustomer){
echo
'<script>
alert("Delete Success"); window.location = "../page/customer.php"
</script>';
}else{
echo
'<script>
alert("Delete Failed"); window.location = "../page/customer.php"
</script>';
}
}else {
echo
'<script>
window.history.back()
</script>';
}
?>