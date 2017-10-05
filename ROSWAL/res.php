<?php
include('admin/connect.php');

if(isset($_POST['res'])){

$id=$_POST['reserveid'];
$roomID=$_POST['roomID'];
$roomp=$_POST['roomp'];


	$result = mysqli_query($connection,"UPDATE tb_reserva SET roomID = '$roomID' where reserveid='$id'")or die(mysqli_error());
	
	$qry = mysqli_query($connection,"UPDATE tb_habitaciones SET status = 'Reserved' where roomID='$roomID'") or die (mysqli_error());
	
	$up = mysqli_query($connection,"UPDATE tb_habitaciones SET status = 'Available' where roomID='$roomp'") or die (mysqli_error());

?>

											<script type="text/javascript">
                                                alert("Has cambiado de habitación con éxito");
                                                window.location= "member.php";
                                            </script>
                                            
                                            <?php }?>