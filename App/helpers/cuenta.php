<?php
include"../Models/conexion.php";
include"../Controllers/Core.php";
include"../Models/crear.php";

$core = new Core;

if(isset($_POST['submit']))
{
	//capturamos los datos por post
	$nom = $_POST['nombre'];
	$ape = $_POST['apellidos'];
	$user = $_POST['correo'];
	$clave = $_POST['pass'];
	$cor = $_POST['correo'];

	//creamos el objeto crear para registrar usuarios
	$crear = new Crear;
	$crear->getCredenciales($user, $clave,	$cor);
	$crear->getDatos($nom, $ape);
	$crear->crearCuenta();
	header("location: " . $core->url_link['principal']);
}

?>