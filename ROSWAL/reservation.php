<?php include('header.php');?>
<?php include('admin/connect.php');?>

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

<script>

function goBack()
  {
  window.history.back()
  }
  
</script>
 
  </head>
 
  


  
  	<?php 			
  
  $start = $_POST['start'];
  $end = $_POST['end'];
  $result = $_POST['result'];

	?>

  <body>
  
  
  
  

    <div class="container">
    
    
    	<div class="row-fluid">
        
        	<div class="span6">
    
    			<div class="form-signin">
                

                
                <div class="btn-group">
  <button style="margin-left:0px; margin-bottom:0px;" class="btn" onClick="goBack()"><i class="icon-hand-left"></i> Volver</button>
  <button class="btn dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
  
  <li><a tabindex="-1" href="#"><strong>Fechas de Reserva</strong></a></li>
  <li class="divider"></li>
  <li><a tabindex="-1" href="#"><span class="text-info">Llegada:</span> <?php echo $start?></a></li>
  <li><a tabindex="-1" href="#"><span class="text-info">Salida:</span> <?php echo $end?></a></li>
  <li><a tabindex="-1" href="#"><span class="text-info">No. de Días:</span> <?php echo $result?></a></li>
  <li class="divider"></li>
  <li><a tabindex="-1" href="#"><strong>Habitación</strong></a></li>
  <li class="divider"></li>
  <li><a tabindex="-1" href="#"><span class="text-info">No. Habitación.</span>  <?php

					$id=$_POST['selector'];
					$N = count($id);
					for($i=0; $i < $N; $i++)
					{

					?>

					<?php echo '#'."". $id[$i];?>

					<?php }?></a></li>
    <!-- dropdown menu links -->
  </ul>
				</div>
                


        <h4>Paso 3: Confirmar reserva</h4>
        
			<hr>
            <table>
            	<tr>
					<td><strong>no. Habitación</strong></td>
                    <td width="300px"><div align="right"> 
  	<?php 
  
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
    
    <?php }?>  </div></td>
 				</tr>
                <tr>
                	<td><strong>Precio</strong></td>
                	<td><div align="right"><?php 
  
  	$id=$_POST['selector'];
	$N = count($id);
	$rname = NULL;

	for($i=0; $i < $N; $i++)
	{
	
	
	$res = mysqli_query($connection,"SELECT * FROM tb_habitaciones where roomID='$id[$i]'");
	while($row = mysqli_fetch_array($res)){
			$pname += $row['price'];


			
	}
  
  
   ?>
    <?php }?>
	
	<?php 
	
	
	
	$f = sprintf ("%.2f", $pname);
	
	 echo 'S/.'." ". $f;?>  </div></td>                
                </tr>
      
                <tr>
                	<td><strong>Tipo  Habitación:</strong></td>
                	<td><div align="right"><?php 
  
  	$id=$_POST['selector'];
	$N = count($id);
	$rname = NULL;

	for($i=0; $i < $N; $i++)
	{
	
	
	$res = mysqli_query($connection,"SELECT * FROM tb_habitaciones where roomID='$id[$i]'");
	while($row = mysqli_fetch_array($res)){
			$catid = $row['category_id'];
			$pname += $row['price'];
			
			$cat = mysqli_query($connection,"SELECT * FROM tb_categoria where category_id = '$catid'") or die(mysqli_error());
				while($rowcat = mysqli_fetch_array($cat)){
						$category = $rowcat['category_name'];
					
						
							
					
				}

			
	}
  
  
   ?>
    <?php }?>
    
    <?php echo $category; ?>
    
    
	  </div></td>
                </tr>
                <tr>
                	<td></td>
                    <td><div align="right">Precio total de la habitación con cargos:</div></td>
                    <td width="100px"><div align="right"><?php 
					
					$rtotal = $f;
					
					
					$g = sprintf ("%.2f", $rtotal);
					
					
					echo 'S/.'." ".$g;
					
					?> </div></td>
                
                </tr>
                <tr>
                	<td></td>
                    <td><div align="right"></div></td>
                    <td width="100px"><div align="right"><?php 
  
  	$id=$_POST['selector'];
	$N = count($id);
	$rname = NULL;
	$pname = NULL;

	for($i=0; $i < $N; $i++)
	{
	
	
	$res = mysqli_query($connection,"SELECT * FROM tb_habitaciones where roomID='$id[$i]'");
	while($row = mysqli_fetch_array($res)){
			$prce = $row['price'];

			
	}
  
  
   ?>
   <?php }?>
    <?php  
	
	
	
	$pr = $prce - ($prce * .18);
	
	
		
	$l = sprintf ("%.2f", $pr);


	
	$tax = $g * 11.8/100;
	
	$t = sprintf ("%.2f", $tax);
	
	$total = $f * $result;
	
	$tt = sprintf ("%.2f", $total);
	
	$p = $tt * .10;
	
	$pre = sprintf ("%.2f", $p);
	
	$b = $tt - $pre;
	
	$bal = sprintf ("%.2f", $b);
	
	
	
	$totalper = sprintf("%.2f",$result * $prce);	
	$prep = sprintf("%.2f",$totalper * .10);
	$balance = sprintf("%.2f",$totalper - $prep);
	$part = sprintf("%.2f",$totalper - $balance);
	
	?>
  
    
    
      </div></td>
                
                </tr>
                <tr>
                	<td></td>
                    <td><div align="right"><i class="icon-info-sign"></i> Impuestos:</div></td>
                    <td width="100px"><div align="right"><?php echo 'S/.'." ".$t;?> </div></td>
                
                </tr>
                <tr>
                	<td></td>
                    <td><div align="right">Costo total de la reserva:</div></td>
                    <td width="100px"><div align="right"><?php echo 'S/.'." ".$tt;?> </div></td>
                
                </tr>
               
                <tr class="alert alert-info">
                	<td></td>
                    <td><div align="right">AHORA - PREPAGO 10%:</div></td>
                    <td width="100px"><div align="right"><?php echo 'S/.'." ".$pre;?> </div></td>
                </tr>
                <tr class="alert alert-success">    
                    <td></td>
                    <td><div align="right">PENDIENTE:</div></td>
                    <td width="100px"><div align="right"><?php echo 'S/.'." ".$bal;?> </div></td>
                </tr>
                
                
            </table>
            
            	<form action="details.php" method="post">
                
                <div style="margin-right:16px; margin-top:20px;" class="pull-right">
                <button name="order" class="btn btn-large btn-primary" type="submit"><i class="icon-user"></i> Detalles del Cliente<i class="icon-arrow-right"></i></button>
            		</div>
               	<p>&nbsp;</p> 
                <p>&nbsp;</p>
                                
                <input name="start" type="hidden" value="<?php echo $start;?>">
                <input name="end" type="hidden" value="<?php echo $end;?>">
                <input name="result" type="hidden" value="<?php echo $result;?>">
                <input name="bal" type="hidden" value="<?php echo $bal;?>">
                <input name="pre" type="hidden" value="<?php echo $pre;?>">
                <input name="total" type="hidden" value="<?php echo $tt;?>">
                <input name="tax" type="hidden" value="<?php echo $t;?>">
                  
    			<input name="totalper" type="hidden" value="<?php echo $totalper;?>">
    			<input name="balance" type="hidden" value="<?php echo $balance;?>">
   				<input name="partial" type="hidden" value="<?php echo $part;?>">
                
                
                <?php

				$id=$_POST['selector'];
				$N = count($id);
				for($i=0; $i < $N; $i++)
				{

				?>

				<input name="selector[]" type="hidden" value="<?php echo $id[$i];?>"/>

				<?php }?>
                
                 	<?php 
  
  	$id=$_POST['selector'];
	$N = count($id);
	$rname = NULL;
	$pname = NULL;

	for($i=0; $i < $N; $i++)
	{
	
	
	$res = mysqli_query($connection,"SELECT * FROM tb_habitaciones where roomID='$id[$i]'");
	while($row = mysqli_fetch_array($res)){
			$rname = $row['name'];
			$roomID = $row['roomID'];
			

			
	}
  
  
   ?>
   
                
                
               
                	 <?php }?>
                </form>   
      			</div>
                
           	</div>
            
            <div class="span6">
    
    			<div class="form-signin">
					
                    <h4><i class="icon-time"></i> Detalles de Llegada y Salida</h4>
                    <hr>
					<table>
                    	<tr>
                    		<td><strong>Llegada:</strong></td>
                            <td width="100px"><div align="right"><?php echo $start;?></div></td>  
                    	</tr>
                        <tr>
                    		<td><strong>Salida:</strong></td>
                            <td width="100px"><div align="right"><?php echo $end;?></div></td>  
                    	</tr>
                        <tr>
                    		<td><strong>Número de noches:</strong></td>
                            <td width="100px"><div align="right"><?php if ($result==1){echo $result; echo ' noche'; }else{echo $result; echo ' noches';}?></div></td>  
                    	</tr>
                    </table>
                    <hr>
                    <p>Prepago se requiere para confirmar su reserva y no es reembolsable.</p>
                    <p>No hay cargo adicional si cancela 24 horas o más, antes de la fecha de llegada. Para cancelar hacerlo 24 horas antes de la fecha de llegada, se aplicará el costo de la primera noche</p>
 
      			</div>
                
           	</div>        
        
        </div>

    </div> <!-- /container -->

  

  </body>
</html>
