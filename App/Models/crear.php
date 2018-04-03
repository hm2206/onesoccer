<?php


	class Crear extends Core
	{

		private $con;//variable para realizar la conexion	
		private $nom;
		private $ape;
		private $usuario;
		private $password;
		private $correo;
		
		function __construct()
		{
			$this->con = new Conexion;
		}

		public function getCredenciales($user, $pass, $correo)
		{
			$this->usuario = $user;
			$this->password = $pass;
			$this->correo = $correo;
		}

		public function getDatos($nom, $ape)
		{
			$this->nom = $nom;
			$this->ape = $ape;
		}

		public function crearCuenta(){
			$sql = "INSERT INTO usuario(nombre, ape, usuario, password) 
					VALUES('{$this->nom}', '{$this->ape}', '{$this->usuario}', '{$this->password}')";
			$datos = $this->con->consultaSimple($sql);
		}
	}

?>