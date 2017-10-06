<?php include('header.php')?>
<?php include('admin/connect.php');?>

  <body>


     <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#"><img style="margin-top:-5px;" src="media/roswal.jpg" width="30" height="30">  Roswal Business Hotel </a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#"><i class="icon-home"></i> Inicio</a></li>
              <li><a href="room.php"><i class="icon-list"></i> Habitaciones</a></li>
              <li><a href="#contact" data-toggle="modal"><i class="icon-envelope"></i> Contacto</a></li>
            </ul>
            <form method="post" class="navbar-form pull-right">
 
              <input class="search-query" type="text" name="username" placeholder="Usuario" required>
              <input class="search-query" type="password" name="password" placeholder="Clave " required>
              
              
              
            <div class="btn-group">
  					<button type="submit" class="btn" name="login"><i class="icon-check"></i> Ingresar</button>
  					<button class="btn dropdown-toggle" data-toggle="dropdown">
    				<span class="caret"></span>
  					</button>
  				<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
    				<li><a href="#cancel" data-toggle="modal"><i class="icon-remove"></i> Cancelar Reservación</a></li>
                    <li class="divider"></li>
                    <li><a href="booking.php"><i class="icon-calendar"></i> Consultar Disponibilidad</a></li>
  				</ul>
			</div>
              
            </form>
            
            
         <?php
                                if (isset($_POST['login'])) {
								
								      function clean($str) {
                                        $str = @trim($str);
                                        if (get_magic_quotes_gpc()) {
                                            $str = stripslashes($str);
                                        }
                                        return mysqli_real_escape_string($str);
                                    }
                                    $username = $_POST['username'];
                                    $password = md5($_POST['password']);
									
                                    $query = mysqli_query($connection,"select * from tb_miembro where username='$username' and password='$password'") or die(mysqli_error());									
									
                                    $count = mysqli_num_rows($query);
                                    $row = mysqli_fetch_array($query);


                                    if ($count > 0) {
                                        if(!$_SESSION) session_start();
                                        session_regenerate_id();
                                        $_SESSION['id'] = $row['memberID'];
                                        header('location:member.php');
										session_write_close();
                                    } else {
									   session_write_close();
                                        ?>
                                      <br>
                                      <p>&nbsp;</p>
                                      
                                        	<script type="text/javascript">
                                                alert("Por favor, compruebe su contraseña y dirección de correo electrónico");
                                            </script>
                                            
                                        <?php
                                    }
                                }
                                ?>
            
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

	<!-- Modal -->
<div id="about" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Roswal Business Hotel</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
    
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Cerrar</button>
  </div>
</div><!--Modal end -->


<!-- Modal -->
<div id="contact" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><img style="margin-top:-5px;" src="media/kingsfields.png" width="30" height="30"> Roswal Business Hotel</h3>
  </div>
  <div class="modal-body">
  
      <div align="center">
                	
                <form action="" method="post">
                        
                <div style="margin-left:-110px;">Nombre: <input name="name" type="text" required placeholder="Nombre Completo"></div>
        		<div style="margin-left:-105px;">Correo: <input name="email" type="email" required placeholder="Correo"></div>	
                   
                <div style="margin-right:-75px;">Mensaje: <textarea required placeholder="message" class="span4" name="Mensaje" rows="6"></textarea></div>
            		
               	
                
                
                </div>
   
                <?php 
				
					if(isset($_POST['send']))
					{
					
						$name = $_POST['name'];
						$email = $_POST['email'];
						$messege = $_POST['message'];

						mysql_query("insert into tb_mensaje (name,email,message) values ('$name','$email','$messege')") or die(mysql_error());
						
					?> 	
						
											<script type="text/javascript">
                                                alert("Mensaje enviado");
                                                window.location= "contact.php";
                                            </script>
				
				
					<?php }?>
						
  
  </div>
  <div class="modal-footer">
  <button class="btn btn-primary" name="send" type="submit"><i class="icon-envelope"></i> Enviar</button>             
  <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Cerrar</button>
  </div>
  </form>
  
</div><!--Modal end -->

<!-- Modal -->
<div id="cancel" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <form action="cancel.php" method="post">
  <div class="modal-header">  	
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Ingrese su código de cancelación</h3>
  </div>
  <div class="modal-body">
    <div align="center"><input name="confirmation" type="text" placeholder="Código confirmación" required></div>
    <div align="center"><input name="roomid" type="text" placeholder="No Habitación" required></div>                
  </div>
  <div class="modal-footer">
  	<button type="submit" class="btn btn-info"><i class=" icon-arrow-right"></i> Proceder</button>
    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Cerrar</button>
  </div>
  </form>
</div><!--Modal end -->




<div style="margin-bottom:10px;" class="container thumbnail">
	


    <!-- Carousel
    ================================================== -->
  	<h1>BIENVENIDO</h1>
    <div style="margin-bottom:0px;" id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="admin/slider/IMG_5561.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
			<h1 style="color:#60C">Has tu reserva hoy !</h1>
            <p class="lead" align-justify></p>
              <a class="btn btn-primary btn-large" href="booking.php"><i class="icon-calendar"></i> Reserva Online Aquí</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="admin/slider/IMG_5563.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              <p class="lead" align-justify></p>
              <a class="btn btn-primary btn-large" href="booking.php"><i class="icon-calendar"></i> Reserva Online Aquí</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="admin/slider/IMG_5565.jpg" alt="">
          <div class="container">
             <div class="carousel-caption">
              <h1></h1>
              <p class="lead" align-justify></p>
              <a class="btn btn-primary btn-large" href="booking.php"><i class="icon-calendar"></i> Reserva Online Aquí</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="admin/slider/IMG_5566.jpg" alt="">
          <div class="container">
             <div class="carousel-caption">
              <h1></h1>
              <p class="lead" align-justify></p>
              <a class="btn btn-primary btn-large" href="booking.php"><i class="icon-calendar"></i> Reserva Online Aquí</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="admin/slider/IMG_5560.jpg" alt="">
          <div class="container">
             <div class="carousel-caption">
             <h 1></h1>
             <p class="lead" align-justify></p>
              <a class="btn btn-primary btn-large" href="booking.php"><i class="icon-calendar"></i> Reserva Online Aquí</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="admin/slider/IMG_5564.jpg" alt="">
          <div class="container">
             <div class="carousel-caption">
              <h1></h1>
              <p class="lead" align-justify></p>
              <a class="btn btn-primary btn-large" href="booking.php"><i class="icon-calendar"></i> Reserva Online Aquí</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->
    
    
</div>



	
        
      <hr>

      <footer>
        <center>Derechos Reservados 2017
        </center>
      </footer>

    <!-- Le javascript
    ================================================== -->
   
  </body>
</html>