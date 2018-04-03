<?php

	$lib = new Libreria;
	$helpers = new Core;

?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<?php
		$lib->CargarCss();
		$lib->CargarJs();
	?>
</head>
<body>

	<div class="contenido">
		<div class="cont-img">
			<img src="<?php echo $helpers->url_link['config'];?>img/pagina/bg1.jpg" alt="" class="img">
			<img src="<?php echo $helpers->url_link['config'];?>img/pagina/bg2.jpg" alt="" class="img">
			<img src="<?php echo $helpers->url_link['config'];?>img/pagina/bg0.jpg" alt="" class="img">
		</div>
		
	</div>

</body>
</html>


<div class="contenido-2">
	<br>
	<h1 class="titulo">Bienvenidos a onesoccer</h1>
	<br>

	<form method="post" action="<?php echo $helpers->url_link['helpers'] . 'config.php';?>" id="login" class="form-login">
		<h3>iniciar sesion</h3>
		<label>Usuario</label>
		<input type="text" name="usuario" id="usuario" class="form-control input">
		<label>Contraseña</label>
		<input type="password" name="clave" id="clave" class="form-control input">
		<br>
		<input type="submit" name="submit" id="btn-login" class="btn btn-success">
		<br>
		<a href="<?php echo $helpers->url_link['principal'];?>crear/">Crear Cuenta</a>
	</form>
</div>

