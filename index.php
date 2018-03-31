<?php
	include "App/Controllers/Core.php";
	include "App/Models/conexion.php";
	include "App/Controllers/libreria.php";
	include "App/Controllers/Route.php";
	include "App/Controllers/Get.php";

	$ruta = new Core;
	$ruta->Route();//Creacion de las Rutas
?>
