<?php

Class Conexion{

	private $datos = array(
							"host" => "localhost",//host por defecto de la base de datos es "localhost"
							"usuario" => "root",//usuario por defecto de la base de datos es "root"
							"password" => "",//password por defecto esta vacia
							"DataBase" => "onesoccer"//ingrese la base de datos de su aplicacion
							);
	private $con;

	public function __construct(){
		$this->con = new mysqli(
								$this->datos['host'],
								$this->datos['usuario'],
								$this->datos['password'],
								$this->datos['DataBase']
							   );
		if(!$this->con){
			echo "Error al conectar a la base de datos";
		}
	}

	public function consultaSimple($sql){
			$this->con->query($sql);
		}

	public function consultaRetorno($sql){
			$retornar = $this->con->query($sql);
			return $retornar;
	}
}

?>
