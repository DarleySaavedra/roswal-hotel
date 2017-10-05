<?php include('admin/connect.php');?>

<?php

$id=$_POST['roomid'];

		mysqli_query($connection,"update tb_reserva set modeofpayment='Online' where memberID='$id'") or die(mysqli_error());			

?>
		