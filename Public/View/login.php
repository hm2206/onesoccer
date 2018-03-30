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

<div class="container contenido">
	<br>
	<h1 class="titulo">Bienvenidos a onesoccer</h1>
	<br>

	<a href="<?php echo $helpers->url_link['principal'] . 'welcome/';?>">volver</a>

	<br><br>

	<form method="post" action="<?php echo $helpers->url_link['helpers'] . 'config.php';?>" id="login" class="container">
		<h3>iniciar session</h3>
		<label>Usuario</label>
		<input type="text" name="usuario" id="usuario" class="form-control">
		<label>Contraseña</label>
		<input type="password" name="clave" id="clave" class="form-control">
		<br>
		<input type="submit" name="submit" id="btn-login" class="btn btn-success">
	</form>
</div>

</body>
</html>
