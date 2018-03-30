<?php

	class Login extends Core{

		private $tipos = array(// Este arregla almacena los tipos de usuario que existen en la App  Web
								'premium' => 'premium',//modificar el contenido del array(solo contenido)
								'standard' => 'standard',
								'basico' => 'basico'
								);

		private $usuario;//almacena el usuario de session
	  private $correo;//almacena el correo de session
		private $password;//almacena la clave de session
		private $tipo;//almacena el tipo de cuenta de session


		private $con;//variable => almacena la conexion a la base de datos


		public function __construct(){//constructor de la clase login
			$this->con = new Conexion();//creando conexion
		}


		public function setUsuario($u, $c, $p/*, $t*/){//capturar datos para el login
			$this->usuario = $u;
			$this->correo = $c;
			$this->password = $p;
			//$this->tipo = $t;
		}


		public function general(){//login amateur ("sin validar tipo de usuario")
			self::premium();
			self::standard();
			if(!self::basico()){
				header("location: " . $this->url_link['principal']);
			}
		}

		public function session(){//session con checkbox en el login
			if($this->tipo == $this->tipos['premium']){
				self::premium();
			}else if($this->tipo == $this->tipos['standard']){
				self::standard();
			}else if($this->tipo == $this->tipos['basico']){
				self::basico();
			}else{
				echo "No se pudo iniciar sesion";
			}
		}

		public function premium(){//validar session de usuario premium
			$sql = "SELECT * FROM usuario WHERE usuario = '{$this->usuario}' AND clave = '{$this->password}' AND tipo = 'premium'";

			$datos = $this->con->consultaRetorno($sql);
			$num = mysqli_num_rows($datos);
                  if($num > 0){
                  	$_SESSION['login'] = true;
                  	$_SESSION['id'];
                  	$_SESSION['usuario'];
                  	$_SESSION['correo'];
                  	$_SESSION['foto'];
                  	$_SESSION['tipo'] = 'premium';
                        header("location: " . $this->url_link['principal'] . $_SESSION['tipo'] . "/");
                  }
		}

		public function standard(){//validar session de usuario standard
			$sql = "SELECT * FROM usuario WHERE usuario = '{$this->usuario}' AND clave = '{$this->password}' AND tipo = 'standard'";

			$datos = $this->con->consultaRetorno($sql);
			$num = mysqli_num_rows($datos);
                  if($num > 0){
                  	$_SESSION['login'] = true;
                  	$_SESSION['id'];
                  	$_SESSION['usuario'];
                  	$_SESSION['correo'];
                  	$_SESSION['foto'];
                  	$_SESSION['tipo'] = 'standard';
                  	$this->sesion = 'standard';
                        header("location: " . $this->url_link['principal'] . $_SESSION['tipo'] . "/");
                  }
	     }

		public function basico(){//validar session de usuario basico
			$sql = "SELECT * FROM usuario WHERE usuario = '{$this->usuario}' AND password = '{$this->password}'";

			$datos = $this->con->consultaRetorno($sql);
			$validar = mysqli_num_rows($datos);
                  if($validar > 0){
                  	$fila = mysqli_fetch_array($datos);
                  	$_SESSION['login'] = true;
                  	$_SESSION['id'] = $fila['cod_usuario'];
                  	$_SESSION['usuario'] = $fila['usuario'];
                  	//$_SESSION['correo'];
                  	//$_SESSION['foto'] = $fila[];
                  	$_SESSION['tipo'] = 'basico';
                        header("location: " . $this->url_link['principal'] . $_SESSION['tipo'] . "/");
                  }else{
                       return false;
                  }
		}

	}

?>
