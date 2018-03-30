<?php
include "../Controllers/Core.php";
include "../Models/login.php";
include "../Models/conexion.php";
//Validamos la session

	$u = $_POST['usuario'];
	$p = $_POST['clave'];

	$config = new Login;
	$config->setUsuario($u, $u, $p);
	$config->general();



?>
