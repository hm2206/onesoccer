<?php
	$helpers = new Core;//Objeto para enviar formularios
?>



<!DOCTYPE html>
<html>
<head>
	<title>BackEasy</title>
	<?php
		$lib = new Libreria;
		$lib->CargarIcono();//renderizacion del icono de la appWeb
		$lib->CargarCss();
		$lib->Csswelcome();
		$lib->CargarJs();
	?>
</head>
<body>
		
	<nav class="menu">
		<div class="items-left">
			<h4 class="tec">BackEasy</h4>
		</div>
		<div class="items-right">
			<a href="" class="link">inicio <i class="fas fa-home"></i></a>
			<a href="#telefono" class="link">contacténos <i class="fas fa-phone"></i></a>
			<a href="<?php echo $helpers->url_link['principal'] . 'login/';?>" class="link">Login Ejemplo <i class="fas fa-users"></i></a>
		</div>
	</nav>

	<div class="container">
		<h1>Bienvenido a BackEasy</h1>
		<div class="descripcion">
			<h2>¿Que es backEasy?</h2>
			<p class="word">Es un FrameWork desarrollado en php, con la finalidad</p>
			<p class="word">De crear aplicaciones Web, faciles y sencillas.</p>
			<p class="word">Ya que no es necesario tener conocimientos amplios en php.<br>
			<p class="word">Solo tienes que seguir las instrucciones.</p>

			   <h4 class="word">El framework cuenta con tres tipos de sesiones:</h4>
			
			<ul class="ul">
				<li>Premium</li>
				<li>Estandar</li>
				<li>Basico</li>
			</ul>
			<p class="word">Las cuales estan ubicado en la siguiente ruta</p>
			<p class="word bold">"App/Models/login.php"</p>

			<p class="word">La configuracion de la ruta se encuentra en:</p>
			<p class="word bold">"App/Controllers/Core.php"//Esta es el controlador principal de la Framework</p>

			<p class="word">La configuracion de la libreria se encuentra en:</p>
			<p class="word bold final">"App/Controllers/libreria.php"//se encarga de incluir los css, js necesarios para la AppWeb</p>

			<p>Version Beta</p><br>
			<p>@BackEasy 2018 todo los derechos reservados</p>
		</div>
	</div>

</body>
</html>
