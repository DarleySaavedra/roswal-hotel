
<?php include('header.php');?>
<?php include('admin/connect.php');?>
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
      }

      .form-signin {
        max-width: 1000px;
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
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
  
    </style>
    
    <script type="text/javascript" src="js/jquery-2.0.2.min.js"></script> 
    
    <link rel="stylesheet" type="text/css" href="admin/css/DT_bootstrap.css">   
	<script type="text/javascript" charset="utf-8" language="javascript" src="admin/js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="admin/js/DT_bootstrap.js"></script>


	<script type="text/javascript" src="js/sagallery.js"></script>
	<script src="gallery/jquery-photo-gallery/jquery-photo-gallery/js/jquery.quicksand.js" type="text/javascript"></script>
	<script src="gallery/jquery-photo-gallery/jquery-photo-gallery/js/jquery.easing.js" type="text/javascript"></script>
	<script src="gallery/jquery-photo-gallery/jquery-photo-gallery/js/script.js" type="text/javascript"></script>
	<script src="gallery/jquery-photo-gallery/jquery-photo-gallery/js/jquery.prettyPhoto.js" type="text/javascript"></script> 
	<link href="gallery/jquery-photo-gallery/jquery-photo-gallery/css/prettyPhoto.css" rel="stylesheet" type="text/css" />

    
<script>

function goBack()
  {
  window.history.back()
  }
 
</script>


<script language="javascript">
function validate()
{
var chks = document.getElementsByName('selector[]');
var hasChecked = false;
for (var i = 0; i < chks.length; i++)
{
if (chks[i].checked)
{
hasChecked = true;
break;
}
}
if (hasChecked == false)
{
alert("Porfavor seleccione al menos uno.");
return false;
}
return true;
}
</script>

 

  </head>
  
	<?php
	
	$start=$_POST['start'];
	$end=$_POST['end'];
	$r=$_POST['result'];
	
	if ($r==0){		
		$r=$r+1;
		
		$result = sprintf ("%.1f", $r);
	
		}
		else{
			
			$result = sprintf ("%.1f", $r);
			
			$result;
			
			
			}
		
	
	?>

  <body>
  



    <div class="container">

  
      
      <div class="btn-group">
  <button style="margin-left:0px; margin-bottom:0px;" class="btn" onClick="goBack()"><i class="icon-hand-left"></i> Volver</button>
  <button class="btn dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
  
  <li><a tabindex="-1" href="#"><strong>Fechas de reserva</strong></a></li>
  <li class="divider"></li>
  <li><a tabindex="-1" href="#"><span class="text-info">Llegada:</span> <?php echo $start?></a></li>
  <li><a tabindex="-1" href="#"><span class="text-info">Salida:</span> <?php echo $end?></a></li>
  <li><a tabindex="-1" href="#"><span class="text-info">No.de Días:</span> <?php echo $result?></a></li>
    <!-- dropdown menu links -->
  </ul>
</div>

	

		<hr>
                                            
                            <form name="form1" onSubmit="return validate()" method="post" action="reservation.php">
                          
      
      	<div class="pull-right"><button class="btn btn-large btn-primary" name="submit" type="submit"><i class="icon-check"></i> Reservar</button></div>
      
        <h4>Paso 2: Seleccione habitaciones</h4>
        
        
        
        									
        
        									<input name="start" type="hidden" value="<?php echo $start;?>">
                                            <input name="end" type="hidden" value="<?php echo $end;?>">
                                            <input name="result" type="hidden" value="<?php echo $result;?>">
        																
      	
                                            
        	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">                      
                            <thead class=" hero-unit">
                                <tr>
                                
                                	<th width="60"><div align="center" style="margin-top:10px;">Image</div></th>
                                    <th width="20"><div align="center" style="margin-top:10px;">No.</div></th>
                                    <th width="100"><div align="center" style="font-size:16px">Precio</div></th>
                                    <th width="50"><div align="center" style="font-size:18px;">Adultos</div><div style="font-size:10px;" align="center"> Edad: 8+</div></th>
                                    <th width="50"><div align="center" style="font-size:18px;">Niños</div><div style="font-size:10px;" align="center"> Edad: 0-7</div></th>
                                    <th width="180"><div align="center" style="font-size:16px">Categoría</div></th>
                                    <th width="180"><div align="center" style="font-size:16px">10% Pre-pago</div></th>
                                    <th><div align="center" style="font-size:16px">Estado</div></th>
                               

                         <th width="60"><div align="center" style="font-size:16px">reserva</div></th>
                          
                                </tr>
                            </thead>
                            <tbody>
                              
                                      <?php
									  
                                    $query = mysqli_query($connection,"select * from tb_habitaciones order by category_id ASC ") or die(mysql_error());
                                    while ($row = mysqli_fetch_array($query)) {
                                        $id = $row['roomID'];
										$catid = $row['category_id'];
										$price = $row['price'];
										
										$cat = mysqli_query($connection,"select * from tb_categoria where category_id = '$catid'") or die(mysql_error());
										while ($cat_row = mysqli_fetch_array($cat)){
									
										
                                        ?>
                                 
                                    

                                        <tr>
                                        	<td width="60"><a href="admin/<?php echo $row['location']?>" class="image-zoom" rel="prettyPhoto[gallery]" title="Without window and without garage room"><img style="margin-top:10px;" class="img-rounded thumbnail" src="admin/<?php echo $row['location']?>" height="50" width="50"></a></td>
                                            
                                            <td><div align="center" style="margin-top:20px"><?php if($row['status']=='Available'){ echo $row['name'];}else{echo '-&deg;-';}?></div></td>
                                             
                                    		<td><div align="center" style="margin-top:10px"><?php if($row['status']=='Available'){ switch($price){
												
										case 90:
											
											echo '90.00 incl. Impuestos y Pagos';
											
											break;		
												
												
										case 110;		
										
											echo '110.00 incl. Impuestos y Pagos';	
												
												break;
												
										case 95;		
										
											echo '950.00 incl. Impuestos y Pagos';	
												
												break;
												
												default:
												
												}
											}
												else{ echo '-&deg;-';}
											
											
											?></div></td>
                                            <td><div align="center" style="margin-top:20px"><?php if($row['status']=='Available'){switch ($catid){
										
										case 1:
										
											echo '<i class="icon-user"></i>';
										
										break;
												
										case 2:
											echo '<i class="icon-user"></i><i class="icon-user"></i>';
											
										break;	
										
										case 3:
											echo '<i class="icon-user"></i><i class="icon-user"></i>';
											
										break;
										
										case 4:
											echo '<i class="icon-user"></i><i class="icon-user"></i>';
											
										break;			
												
										default:		
												
												
												}
										
											
											}
											
											else{ echo '-&deg;-';}
											
											?></div></td> 
                                       
                                       <td><div align="center" style="margin-top:20px"><?php if($row['status']=='Available'){switch ($catid){
										
										case 1:
										
											echo '<span style="font-size:10px;">Not allowed</span>';
										
										break;
												
										case 2:
											echo '<i class="icon-user"></i>';
											
										break;	
										
										case 3:
											echo '<i class="icon-user"></i>';
											
										break;
										
										case 4:
											echo '<i class="icon-user"></i><i class="icon-user"></i>';
											
										break;			
												
										default:		
												
												
												}
										
											
											}else{ echo '-&deg;-';}?></div></td>  
                                            
                                               
                                            
                                            <td><div align="center" style="margin-top:20px"><?php if($row['status']=='Available'){echo $cat_row['category_name'];}else{ echo '-&deg;-';}?></div></td> 
 											<td><div align="center" style="margin-top:10px"><?php if($row['status']=='Available'){switch ($catid){
										
										case 1:
										
											echo '<div align="center" style="margin-top:10px; color: rgba(0,0,0,1); font-size:16px;">S/. 90.00</div><div align="center" style="font-size:10px;">Por 1 noche</div><div align="center" style="font-size:12px; color:rgba(255,0,0,1)">Pague sólo el 10% para reservar!</div>';
										
										break;
												
										case 2:
											echo '<div align="center" style="margin-top:10px; color: rgba(0,0,0,1); font-size:16px;">S/. 950.00</div><div align="center" style="font-size:10px;">Por 1 noche</div><div align="center" style="font-size:12px; color:rgba(255,0,0,1)">Pague sólo el 10% para reservar!</div>';
											
										break;	
										
										case 3:
											echo '<div align="center" style="margin-top:10px; color: rgba(0,0,0,1); font-size:16px;">S/. 110.00</div><div align="center" style="font-size:10px;">Por 1 noche</div><div align="center" style="font-size:12px; color:rgba(255,0,0,1)">Pague sólo el 10% para reservar!</div>';
											
										break;
										
										case 4:
											echo '<div align="center" style="margin-top:10px; color: rgba(0,0,0,1); font-size:16px;">S/. 110.00</div><div align="center" style="font-size:10px;">Por 1 noche</div><div align="center" style="font-size:12px; color:rgba(255,0,0,1)">Pague sólo el 10% para reservar!</div>';
											
										break;			
												
										default:		
												
												
												}
										
											
											}
											
											else{ echo '-&deg;-';}
											
											?></div></td> 
                                                
                                            
                                            <td><div align="center" style="margin-top:30px;"><strong>
											<?php if ($row['status']=='Available'){
												
												echo '<div style="color:rgba(0,153,51,1);font-size:18px;">Disponible</div>';
												
												$disabled = "";
												
														}
														
														else{
															
															$disabled = 'disabled="disabled"';
															
															echo '<div style="color:rgba(255,0,0,1);font-size:18px;font-style:italic;">'.$row['status'].'</div>';
															
															
															}
														
												
												?></strong></div></td>						
                                           
                    					     	
													
                                                     
                                             <td><div align="center" style="margin-top:30px"><input style="margin-top:-2px;" name="selector[]" type="checkbox" value="<?php echo $id; ?>"<?php echo $disabled;?>></div></td>
                                             
                                               						   
											
                                  </tr>
                                  
                                  
                                                                     
                        		<?php } ?>
                                <?php } ?>
                            
                            </tbody>
                        </table>
 
           
           
                        <hr>
 

    </div> <!-- /container -->
    
    
   

 </form> 
 


  </body>
  
  
</html>
