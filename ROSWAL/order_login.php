<?php include('header.php'); ?>
<?php include('admin/connect.php');?>


                                    
<?php

ini_set('display_errors', 'off');

	function createRandomPassword() {



    $chars = "abcdefghijkmnopqrstuvwxyz023456789";

    srand((double)microtime()*1000000);

    $i = 0;

    $pass = '' ;



    while ($i <= 11) {

        $num = rand() % 33;

        $tmp = substr($chars, $num, 1);

        $pass = $pass . $tmp;

        $i++;

    }



    return $pass;



}

if(isset($_POST['order_login'])){

	$confirmation = createRandomPassword();
	$start = $_POST['start'];
	$end = $_POST['end'];
	$result = $_POST['result'];
	$total = $_POST['total'];
	$pre = $_POST['pre'];
	$bal = $_POST['bal'];
	$tax = $_POST['tax'];

	$username = $_POST['username_login'];
	$password = md5($_POST['password_login']);
	
	$totalper = $_POST['totalper'];
  	$balance = $_POST['balance'];
  	$partial = $_POST['partial'];
	$request = $_POST['request'];
	
	//send the email
	
	function cancel($username,$password){

$qry = mysqli_query($connection,"select count('memberID') from tb_miembro where username = '$username' and password = '$password'") or die (mysqli_error());
			
		return (mysqli_result($qry, 0 ) == 1 ) ? true : false;
				
	}
	
	
	if (cancel($username,$password) === false){
		
		echo '	<script type="text/javascript">
              	alert("Por favor verifique su nombre de usuario y contraseña!!!");
				window.history.back();
              	</script>';	
				

	}
		
		else{
			
	$qry = mysqli_query($connection,"select * from tb_miembro where username = '$username' and password = '$password'") or die (mysqli_error());
	while($row_login = mysqli_fetch_array($qry)){
			$m = $row_login['memberID'];
			
			$fname = $row_login['firstname'];
			$lname = $row_login['lastname'];
		
			$email = $row_login['email'];

			$cnumber = $row_login['contact_number'];
		
			$zip = $row_login['zip'];
			$address = $row_login['address'];
			
		
	
	}
		
?>

 <?php

					$id=$_POST['selector'];
					$N = count($id);
					for($i=0; $i < $N; $i++)
					{

					?>

					

					
                    
                    <?php 
	//send the email
		
		
		
		$mail_To = $email;
                $mail_Subject = "Notificacion de la reserva para Kingsfields Express Inn";
                $mail_Body = "Nombres: $fname\n".
		"Apellidos: $lname\n".
		"Email: $email \n".
		"Codigo Postal: $zip \n".
		"Numero de contacto: $cnumber \n".
		"Clave: $password \n".
		"Registro: $start\n ".
		"Salida: $end\n ".
		"Total noches: $result\n ".
		"Monto a Pagar: $total\n ".
		"Numero Habitacion: echo $id[$i];\n".
		"Numero de confirmacion: $confirmation\n ";
                mail($mail_To, $mail_Subject, $mail_Body);?>



					<?php }?>


   
<?php


$id=$_POST['selector'];



if(count($id)>0)
{
	foreach($id as $key=>$id)
	{
		$query="INSERT INTO tb_reserva (roomID,memberID,days_no,total,partial,balance,arrival,departure,status,transaction_code,request) VALUES ('$id','$m','$result','$totalper','$partial','$balance','$start','$end','reserved','$confirmation','$request')";
		mysqli_query($connection,$query) or die ('Error Actualizar la Base de Datos' . mysql_errno());
		mysqli_query($connection,"update tb_habitaciones set status='Reserved' where roomID='$id'") or die(mysqli_error());			
	}
	echo '';
}
else
	echo '';

}

?>
		
        
<?php }?>
        
        
        							

 <style type="text/css">
 
      .form-signin {
        max-width: 600px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
	  
	  
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
  		



<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Kingsfield Express Inn Power System</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>


<body>



<div class="container"><!--Container -->

	

	<div class="form-signin">
    
    <h4>Gracias por sus paciencia</h4>
    <h6>Envíe su información de reserva para confirmar su pago parcial del 10%</h6>    
			<hr>
            
            <a style=" margin-bottom:10px;" class="btn" href="javascript:Clickheretoprint()"><i class="icon-print"></i> Imprimir</a>
            
			
            <div id="print_content">
            
    
    <table>
    			<tr>
					<td><strong>Código_Operación:</strong></td>
                    <td width="300px"><div align="right"><?php echo $confirmation;?></div></td>
 				</tr>
                
            	<tr>
					<td><strong>Llegada:</strong></td>
                    <td width="300px"><div align="right"><?php echo $start;?></div></td>
 				</tr>
                
                
                <tr>
                	<td><strong>Salida:</strong></td>
                	<td><div align="right"><?php echo $end;?></div></td>                
                </tr>
                <tr>
                	<td><strong>Número de días:</strong></td>
                	<td><div align="right"><?php echo $result;?></div></td>
                </tr>
                <tr>
                	<td></td>
                    <td><div align="right">Cargo total de la habitación:</div></td>
                    <td width="170px"><div align="right">S/. <?php echo $total;?></div></td>
                
                </tr>
                <tr>
                	<td></td>
                    <td><div align="right">Balance:</div></td>
                    <td width="100px"><div align="right">S/. <?php echo $bal;?></div></td>
                
                </tr>
                <tr class="alert alert-info">
                	<td><strong>Pago</strong></td>
                    <td><div align="right"><i class="icon-info-sign"></i>AHORA - PREPAGO 10%:</div></td>
                    <td width="100px"><div align="right">S/. <?php echo $pre;?>.00</div></td>
                
                </tr>
                <tr>
                	<td></td>
                    <td><div align="right">Número Habitación:</div></td>
                    <td width="100px"><div align="right">	<?php 
  
  	$id=$_POST['selector'];
	$N = count($id);
	$rname = NULL;
	$pname = NULL;

	for($i=0; $i < $N; $i++)
	{
	
	
	$res = mysqli_query($connection,"SELECT * FROM tb_habitaciones where roomID='$id[$i]'");
	while($row = mysqli_fetch_array($res)){
			$rname = $row['name'];

			
	}
  
  
   ?>
    <?php echo '#'."".$rname;?>
    
    <?php }?> </div></td>
                
                </tr>
              
              
               
                <tr>
                	<td></td>
                    <td><div align="right">Impuestos:</div></td>
                    <td width="100px"><div align="right">S/. <?php echo $tax;?></div></td>
                </tr>
                 
                
                <tr class="alert alert-success">
					<td><strong>Detalles del Huésped</strong></td>
                    <td width="300px"><div align="right"></div></td>
 				</tr>
                
                <tr>
					<td><strong>Nombres:</strong></td>
                    <td width="300px"><div align="right"><?php echo $fname;?></div></td>
 				</tr>
                
                <tr>
					<td><strong>Apellidos:</strong></td>
                    <td width="300px"><div align="right"><?php echo $lname;?></div></td>
 				</tr>
                <tr>
					<td><strong>Correo:</strong></td>
                    <td width="300px"><div align="right"><?php echo $email;?></div></td>
 				</tr>
          
                <tr>
					<td><strong>Número de Contacto:</strong></td>
                    <td width="300px"><div align="right"><?php echo $cnumber;?></div></td>
 				</tr>
                <tr>
					<td><strong>Clave:</strong></td>
                    <td width="300px"><div align="right"><?php echo $password;?></div></td>
 				</tr>
                <tr>
					<td><strong>Código Postal:</strong></td>
                    <td width="300px"><div align="right"><?php echo $zip;?></div></td>
 				</tr>
                <tr>
					<td><strong>Dirección:</strong></td>
                    <td width="300px"><div align="right"><?php echo $address;?></div></td>
 				</tr>
        
 
            </table>
            
   </div>         
       
    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" onSubmit="save();">
       
    	<input type="hidden" name="cmd" value="_xclick" />
     	<input type="hidden" name="amount" value="<?php echo $pre; ?>" />
        <input type="hidden" name="business" value="kringcarl_j@yahoo.com.ph" />
        <input type="hidden" id="item_name" name="item_name" value="	<?php 
  
  	$id=$_POST['selector'];
	$N = count($id);
	$rname = NULL;
	$pname = NULL;

	for($i=0; $i < $N; $i++)
	{
	
	
	$res = mysqli_query($connection,"SELECT * FROM tb_habitaciones where roomID='$id[$i]'");
	while($row = mysqli_fetch_array($res)){
			$rname = $row['name'];

			
	}
  
  
   ?>
    <?php echo '#'."".$rname;?>
    
    <?php }?> " />
    	<input type="hidden" name="item_number" value="<?php echo $confirmation; ?>" />
        <input type="hidden" name="no_shipping" value="1" />
        <input type="hidden" name="no_note" value="1" />
        <input type="hidden" name="currency_code" value="PHP" />
        <input type="hidden" name="lc" value="GB" />
        <input type="hidden" name="bn" value="PP-BuyNowBF" />
        
        
        <input class="thumbnail" type="image" src="paypal.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" style=" margin-top:20px; margin-left: 250px;" />
        <img alt="fdff" border="0" src="https://www.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1" />
        <!-- Payment confirmed -->
        <input type="hidden" name="return" value="https://kingsfields.x10.mx/showconfirm.php" />
        <!-- Payment cancelled -->
        <input type="hidden" name="cancel_return" value="http://kingsfields.x10.mx/cancel.php" />
        <input type="hidden" name="rm" value="2" />
        <input type="hidden" name="notify_url" value="http://kingsfields.x10.mx/ipn.php" />
        <input type="hidden" name="custom" value="any other custom field you want to pass" />
      	<input type="hidden" name="roomid" id="roomid" value="<?php echo $m;?>"/>

    </form>

    	
	</div><!--form end -->
    
   
    	                           
</div><!--container end -->

</body>

 <script type="text/javascript">
		
		function save(){
			
							var roomid=$("#roomid").val();
				
							$.ajax({
                              type:"post",
                              url:"process.php",
                              data:"roomid="+roomid,
                             
                          });	

		}
		
	</script>


</html>