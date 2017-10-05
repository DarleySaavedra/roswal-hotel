
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
 

  </head>
  

  <body>
  
 
 	
	


    <div class="container">
    
    
    

     <div class="form-signin">
      
      <div class="btn-group">
  <button style="margin-left:0px; margin-bottom:0px;" class="btn" onClick="goBack()"><i class="icon-hand-left"></i> Volver</button>
  <button class="btn dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
  
  
  </ul>
</div>

      
      
        <h4>Paso 2: Seleccione habitaciones</h4>
           
            
        	 <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            
                            <div class="progress progress-info progress-striped active">
                            	<div class="bar" style="width: 100%;">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-list"></i>&nbsp;Tabla de datos</strong>
                                </div>
                            </div>
                            <thead class=" hero-unit">
                                <tr>
                                    <th><div align="center" style="margin-top:10px;">Imagen</div></th>
                                    <th><div align="center">Descripciones</div></th>
                                    <th width="60"><div align="center" style="font-size:18px;">Adultos</div><div style="font-size:10px;" align="center"> Edad: 8+</div></th>
                                    <th width="60"><div align="center" style="font-size:18px;">Niños</div><div style="font-size:10px;" align="center"> Edad: 0-7</div></th>
                                    <th><div align="center">Precio por Noche</div></th>
                                    <th><div align="center">Cantidad</div></th>
                                    <th><div align="center">Acción</div></th>
                                </tr>
                            </thead>
                            <tbody>
                              
                                    <tr>
                                        <td width="130"><a href="admin/upload/Sin ventana y sin garaje.jpg" class="image-zoom" rel="prettyPhoto[gallery]" title="Sin ventana y sin garaje"><img class="img-polaroid" src="admin/upload/Sin ventana y sin garaje.jpg" height="120" width="120"></a></td> 
                                        <td width="200"><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:14px;">Sin ventana y sin garaje</div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:16px;"><i class="icon-user"></i><i class="icon-user"></i></div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:12px;">No permitido</div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:16px;">S/. 79.67</div><div align="center">90.00 incl. impuestos y pagos</div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:16px;">S/. 90.00</div><div align="center" style="font-size:10px;">por 1 noche</div><div align="center" style="font-size:12px; color:rgba(0,204,0,1)">Pague sólo el 10% para reservar!</div></td>
                                        <td><div align="center" style="margin-top:20px;"><a href="#cat1" class="btn btn-info" data-toggle="modal" role="button"><i class="icon-th-large"></i> Disponible</a></div></td> 
                           	  		</tr>
                                    
                                    <tr>
                                        <td width="130"><a href="admin/upload/window side room without garage.jpg" class="image-zoom" rel="prettyPhoto[gallery]" title="Ventana y sin garaje"><img class="img-polaroid" src="admin/upload/window side room without garage.jpg" height="120" width="120"></a></td> 
                                        <td width="200"><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:14px;">Ventana y sin garaje</div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:16px;"><i class="icon-user"></i><i class="icon-user"></i></div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:12px;">No permitido</div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:16px;">S/. 79.67</div><div align="center">90.00 incl. impuestos y pagos</div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:16px;">S/. 90.00</div><div align="center" style="font-size:10px;">por 1 noche</div><div align="center" style="font-size:12px; color:rgba(0,204,0,1)">Pague sólo el 10% para reservar!</div></td>
                                        <td><div align="center" style="margin-top:20px;"><a href="#cat2" class="btn btn-info" data-toggle="modal" role="button"><i class="icon-th-large"></i> Disponible</a></div></td> 
                           	  		</tr>
                                    
                                   
                                    
                                     <tr>
                                        <td width="130"><a href="admin/upload/Habitación Vip sin Garaje.jpg" class="image-zoom" rel="prettyPhoto[gallery]" title="Habitación Vip sin Garaje"><img class="img-polaroid" src="admin/upload/Habitación Vip sin Garaje.jpg" height="120" width="120"></a></td> 
                                        <td width="200"><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:14px;">Habitación Vip sin Garaje</div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:16px;"><i class="icon-user"></i><i class="icon-user"></i></div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:12px;"><i class="icon-user"></i></div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:16px;">S/. 97.35</div><div align="center">110.00 incl. impuestos y pagos</div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:16px;">S/. 110.00</div><div align="center" style="font-size:10px;">por 1 noche</div><div align="center" style="font-size:12px; color:rgba(0,204,0,1)">Pague sólo el 10% para reservar!</div></td>
                                        <td><div align="center" style="margin-top:20px;"><a href="#cat3" class="btn btn-info" data-toggle="modal" role="button"><i class="icon-th-large"></i> Disponible</a></div></td> 
                           	  		</tr>
                                    
                                     <tr>
                                        <td width="130"><a href="admin/upload/Vip room with garage.jpg" class="image-zoom" rel="prettyPhoto[gallery]" title="Vip room Garage"><img class="img-polaroid" src="admin/upload/Vip room with garage.jpg" height="120" width="120"></td> 
                                        <td width="200"><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:14px;">Habitación Vip con garaje</div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:16px;"><i class="icon-user"></i><i class="icon-user"></i></div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:12px;"><i class="icon-user"></i><i class="icon-user"></i></div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:16px;">S/. 97.35</div><div align="center">110.00 incl. impuestos y pagos</div></td> 
                                        <td><div align="center" style="margin-top:20px; color: rgba(0,0,0,1); font-size:16px;">S/. 110.00</div><div align="center" style="font-size:10px;">por 1 noche</div><div align="center" style="font-size:12px; color:rgba(0,204,0,1)">Pague sólo el 10% para reservar!</div></td>
                                        <td><div align="center" style="margin-top:20px;"><a href="#cat4" class="btn btn-info" data-toggle="modal" role="button"><i class="icon-th-large"></i> Disponible</a></div></td> 
                           	  		</tr>
                       
								     
                            </tbody>
                        </table>
        
     
      </div>

    </div> <!-- /container -->
    
    
    <!-- Modal cat1 -->
<div id="cat1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 id="myModalLabel">Sin ventana y sin garajes</h4>
  </div>
  <div class="modal-body">
  
 
 	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example"                      
                            <thead>
                                <tr>
                                
                                    <th><div align="center" style="font-size:16px">Precio</div></th>
                                    <th><div align="center" style="font-size:16px">Total</div></th>
                                    <th><div align="center" style="font-size:16px">Pendiente</div></th>
                                    <th><div align="center" style="font-size:16px">10%</div></th>
                                    <th><div align="center" style="font-size:16px">Estado</div></th>
                                    <th><div align="center" style="font-size:16px">Reserva</div></th>
                          
                                </tr>
                            </thead>
                            <tbody>
                              
                                      <?php
									  
                                    $query = mysqli_query($connection,"select * from tb_habitaciones where category_id='1' order by roomID ") or die(mysql_error());
                                    while ($row = mysqli_fetch_array($query)) {
                                        $roomID = $row['roomID'];
										 
										
                                        ?>
                                 
                                    

                                        <tr>
                                        	 
                                    		<td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo'.00';}?></div></td>
                                            <td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo'.00';}?></div></td> 
                                            <td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo'.00';}?></div></td> 
 											<td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo'.00';}?></div></td>
                                            <td><div align="center" style="margin-top:20px"><strong>
											<?php if ($row['status']=='Available'){
												
												$disabled = "";
												
												echo 'Available';}
																								
													elseif($row['status']=='Reserved'){
														
															echo 'Reserved';
													
													
															$disabled = 'disabled="disabled"';
														
														}
														
													else{
													
													echo 'Occupied';
													
													
													$disabled = 'disabled="disabled"';
													
													}
													
												
												?></strong></div></td>						
                                           
                                       
                                            
                                            <form action="" method="post">
                                             
                                             <input name="start" type="hidden" value="">
                                             <input name="roomID" type="hidden" value="<?php echo $row['roomID'];?>">
                                             <input name="end" type="hidden" value="">
                                             <input name="result" type="hidden" value="">                                             <input name="total" type="hidden" value="">
                                             <input name="pre" type="hidden" value="">
                                             <input name="bal" type="hidden" value=""> 
                                                     
                                             <td><div align="center" style="margin-top:20px"><button class="btn btn-info" name="submit" type="submit" <?php echo $disabled?>><i class="icon-hand-right"></i> Habitación <?php echo $row['name'];?></button></div></td>
                                             
                                             </form>   						   
											
                                  </tr>
                                  
                                  
                                                                     
                        
                                <?php } ?>
                            </tbody>
                        </table>
 
    
    
  </div>
  <div class="modal-footer">

  	<div class="pull-left"><label class="text-info"><strong>No. de Noches:</strong></label></div>   
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Cerrar</button>
  </div>
</div><!--Modal cat1 end -->

  

<!-- Modal cat2 -->
<div id="cat2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 id="myModalLabel">Ventana y sin garajes</h4>
  </div>
  <div class="modal-body">
  
 
 	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example"                      
                            <thead>
                                <tr>
                                
                                    <th><div align="center" style="font-size:16px">Precio</div></th>
                                    <th><div align="center" style="font-size:16px">Total</div></th>
                                    <th><div align="center" style="font-size:16px">Pendiente</div></th>
                                    <th><div align="center" style="font-size:16px">10%</div></th>
                                    <th><div align="center" style="font-size:16px">Estado</div></th>
                                    <th><div align="center" style="font-size:16px">Reserva</div></th>
                          
                                </tr>
                            </thead>
                            <tbody>
                              
                                      <?php
									  
                                    $query = mysqli_query($connection,"select * from tb_habitaciones where category_id='2' order by roomID ") or die(mysql_error());
                                    while ($row = mysqli_fetch_array($query)) {
                                        $roomID = $row['roomID'];
										$price = $row['price'];
										$total = $price * $result;
										$pre = $total*.10;
										$bal = $total - $pre 
										
                                        ?>
                                 
                                    

                                        <tr>
                                        	 
                                    		<td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo $price; echo'.00';}?></div></td>
                                            <td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo $total; echo'.00';}?></div></td> 
                                            <td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo $bal; echo'.00';}?></div></td> 
 											<td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo $pre; echo'.00';}?></div></td>
                                            <td><div align="center" style="margin-top:20px"><strong>
											<?php if ($row['status']=='Available'){
												
												$disabled = "";
												
												echo 'Available';}
																								
													elseif($row['status']=='Reserved'){
														
															echo 'Reserved';
													
													
															$disabled = 'disabled="disabled"';
														
														}
														
													else{
													
													echo 'Occupied';
													
													
													$disabled = 'disabled="disabled"';
													
													}
													
												
												?></strong></div></td>						
                                           
                                       
                                            
                                            <form action="" method="post">
                                             
                                             <input name="start" type="hidden" value="<?php echo $start;?>">
                                             <input name="roomID" type="hidden" value="<?php echo $row['roomID'];?>">
                                             <input name="end" type="hidden" value="<?php echo $end;?>">
                                             <input name="result" type="hidden" value="<?php echo $result;?>">                                             <input name="total" type="hidden" value="<?php echo $total;?>">
                                             <input name="pre" type="hidden" value="<?php echo $pre;?>">
                                             <input name="bal" type="hidden" value="<?php echo $bal;?>"> 
                                                     
                                             <td><div align="center" style="margin-top:20px"><button class="btn btn-info" name="submit" type="submit" <?php echo $disabled?>><i class="icon-hand-right"></i> Habitación <?php echo $row['name'];?></button></div></td>
                                             
                                             </form>   						   
											
                                  </tr>
                                  
                                  
                                                                     
                        
                                <?php } ?>
                            </tbody>
                        </table>
 
    
    
  </div>
  <div class="modal-footer">

  	<div class="pull-left"><label class="text-info"><strong>No de Noches:</strong> <?php echo $result;?></label></div>   
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Cerrar</button>
  </div>
</div><!--Modal cat2 end -->



<!-- Modal cat3 -->
<div id="cat3" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 id="myModalLabel">Habitación Vip sin Garaje</h4>
  </div>
  <div class="modal-body">
  
 
 	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example"                      
                            <thead>
                                <tr>
                                
                                    <th><div align="center" style="font-size:16px">Precio</div></th>
                                    <th><div align="center" style="font-size:16px">Total</div></th>
                                    <th><div align="center" style="font-size:16px">Pendiente</div></th>
                                    <th><div align="center" style="font-size:16px">10%</div></th>
                                    <th><div align="center" style="font-size:16px">Estado</div></th>
                                    <th><div align="center" style="font-size:16px">Reserva</div></th>
                          
                                </tr>
                            </thead>
                            <tbody>
                              
                                      <?php
									  
                                    $query = mysqli_query($connection,"select * from tb_habitaciones where category_id='3' order by roomID ") or die(mysql_error());
                                    while ($row = mysqli_fetch_array($query)) {
                                        $roomID = $row['roomID'];
										$price = $row['price'];
										$total = $price * $result;
										$pre = $total*.10;
										$bal = $total - $pre 
										
                                        ?>
                                 
                                    

                                        <tr>
                                        	 
                                    		<td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo $price; echo'.00';}?></div></td>
                                            <td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo $total; echo'.00';}?></div></td> 
                                            <td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo $bal; echo'.00';}?></div></td> 
 											<td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo $pre; echo'.00';}?></div></td>
                                            <td><div align="center" style="margin-top:20px"><strong>
											<?php if ($row['status']=='Available'){
												
												$disabled = "";
												
												echo 'Available';}
																								
													elseif($row['status']=='Reserved'){
														
															echo 'Reserved';
													
													
															$disabled = 'disabled="disabled"';
														
														}
														
													else{
													
													echo 'Occupied';
													
													
													$disabled = 'disabled="disabled"';
													
													}
													
												
												?></strong></div></td>						
                                           
                                       
                                            
                                            <form action="reservation.php" method="post">
                                             
                                             <input name="start" type="hidden" value="<?php echo $start;?>">
                                             <input name="roomID" type="hidden" value="<?php echo $row['roomID'];?>">
                                             <input name="end" type="hidden" value="<?php echo $end;?>">
                                             <input name="result" type="hidden" value="<?php echo $result;?>">                                             <input name="total" type="hidden" value="<?php echo $total;?>">
                                             <input name="pre" type="hidden" value="<?php echo $pre;?>">
                                             <input name="bal" type="hidden" value="<?php echo $bal;?>"> 
                                                     
                                             <td><div align="center" style="margin-top:20px"><button class="btn btn-info" name="submit" type="submit" <?php echo $disabled?>><i class="icon-hand-right"></i> Habitación <?php echo $row['name'];?></button></div></td>
                                             
                                             </form>   						   
											
                                  </tr>
                                  
                                  
                                                                     
                        
                                <?php } ?>
                            </tbody>
                        </table>
 
    
    
  </div>
  <div class="modal-footer">

  	<div class="pull-left"><label class="text-info"><strong>No de Noches</strong> <?php echo $result;?></label></div>   
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Cerrar</button>
  </div>
</div><!--Modal cat3 end -->



<!-- Modal cat4 -->
<div id="cat4" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 id="myModalLabel">Habitación Vip con garaje</h4>
  </div>
  <div class="modal-body">
  
 
 	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example"                      
                            <thead>
                                <tr>
                                
                                    <th><div align="center" style="font-size:16px">Precio</div></th>
                                    <th><div align="center" style="font-size:16px">Total</div></th>
                                    <th><div align="center" style="font-size:16px">Pendiente</div></th>
                                    <th><div align="center" style="font-size:16px">10%</div></th>
                                    <th><div align="center" style="font-size:16px">Estado</div></th>
                                    <th><div align="center" style="font-size:16px">Reserva</div></th>
                          
                                </tr>
                            </thead>
                            <tbody>
                              
                                      <?php
									  
                                    $query = mysqli_query($connection,"select * from tb_habitaciones where category_id='4' order by roomID ") or die(mysql_error());
                                    while ($row = mysqli_fetch_array($query)) {
                                        $roomID = $row['roomID'];
										$price = $row['price'];
										$total = $price * $result;
										$pre = $total*.10;
										$bal = $total - $pre 
										
                                        ?>
                                 
                                    

                                        <tr>
                                        	 
                                    		<td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo $price; echo'.00';}?></div></td>
                                            <td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo $total; echo'.00';}?></div></td> 
                                            <td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo $bal; echo'.00';}?></div></td> 
 											<td><div align="center" style="margin-top:20px"><?php if($row['status']=='Reserved'){ echo '-&deg;-';}else{echo $pre; echo'.00';}?></div></td>
                                            <td><div align="center" style="margin-top:20px"><strong>
											<?php if ($row['status']=='Available'){
												
												$disabled = "";
												
												echo 'Available';}
																								
													elseif($row['status']=='Reserved'){
														
															echo 'Reserved';
													
													
															$disabled = 'disabled="disabled"';
														
														}
														
													else{
													
													echo 'Occupied';
													
													
													$disabled = 'disabled="disabled"';
													
													}
													
												
												?></strong></div></td>						
                                           
                                       
                                            
                                            <form action="reservation.php" method="post">
                                             
                                             <input name="start" type="hidden" value="<?php echo $start;?>">
                                             <input name="roomID" type="hidden" value="<?php echo $row['roomID'];?>">
                                             <input name="end" type="hidden" value="<?php echo $end;?>">
                                             <input name="result" type="hidden" value="<?php echo $result;?>">                                             <input name="total" type="hidden" value="<?php echo $total;?>">
                                             <input name="pre" type="hidden" value="<?php echo $pre;?>">
                                             <input name="bal" type="hidden" value="<?php echo $bal;?>"> 
                                                     
                                             <td><div align="center" style="margin-top:20px"><button class="btn btn-info" name="submit" type="submit" <?php echo $disabled?>><i class="icon-hand-right"></i> Habitación <?php echo $row['name'];?></button></div></td>
                                             
                                             </form>   						   
											
                                  </tr>
                                  
                                  
                                                                     
                        
                                <?php } ?>
                            </tbody>
                        </table>
 
    
    
  </div>
  <div class="modal-footer">

  	<div class="pull-left"><label class="text-info"><strong>No de Noches</strong> <?php echo $result;?></label></div>   
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Cerrar</button>
  </div>
</div><!--Modal cat4 end -->
  
  
  

  </body>
  
  
</html>
