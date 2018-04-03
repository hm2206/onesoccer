<?php
  $core = new Core;
  $lib = new Libreria;
?>
<!DOCTYPE html>
<html>
<head>
	<title>OneSoccer</title>
  <meta charset="utf-8">
	<?php
    $lib->CargarCss();
  ?>
</head>
<body>

<div class="contenedor">
  <img src="<?php echo $lib->url_link['config'] . 'img/pagina/bg1.jpg'?>" id="img-fondo">
  <div class="texto-encima">  	<h1 id="titulo-one">OneSoccer</h1>
  	<p>
  	</div>


  				<center>
 

    <div id="registrar">
            
    </div>
    <div id="envoltura">
        <div id="contenedor">
 
            <div id="cabecera">
                <img src="<?php echo $lib->url_link['config'] . 'img/pagina/uefa.jpg'?>" height="70px" >
            </div>
 
            <div id="cuerpo">
 
                <form id="form-login" action="<?php echo $lib->url_link['helpers'] . 'cuenta.php'?>" method="post" >
                    <p><label for="nombre" class="label">Nombre:</label></p>
                        <input name="nombre" type="text" id="nombre" class="nombre input-2" placeholder="Pon tu nombre" autofocus=""/ ></p>
 
                    
                    <p><label for="apellidos" class="label">Apellidos:</label></p>
                        <input name="apellidos" type="text" id="apellidos" class="apellidos input-2" placeholder="Pon tus apellidos" /></p>
                  
 
                    <p><label for="correo" class="label">Usuario:</label></p>
                        <input name="correo" type="text" id="correo" class="correo input-2" placeholder="Pon tu mail" /></p>
 
                    <p><label for="pass" class="label">Password:</label></p>
                        <input name="pass" type="password" id="pass" class="pass input-2" placeholder="Pon tu contraseña"/ ></p>
 
                    <p><label for="repass" class="label">Repetir Password:</label></p>
                        <input name="repass" type="password" id="repass" class="repass input-2" placeholder="Repite contraseña" /></p>
 
                    <p id="bot"><input name="submit" type="submit" id="boton" value="Registrar" class="boton"/></p>
                </form>
            </div>
 
            
        </div>
 
    </div>
  	
  </div>
</center>
<header>
    <div class="wrapper">
      <div class="logo">ONE SOOCER</div>
      
      <nav>
            <div class='define'>
                <p>
                Copyright  &copy; 2018 por NEYSER 
                
                  
        </nav>
    </div></header>

    
</body>
</html>