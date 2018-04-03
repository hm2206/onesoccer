<?php
session_start();//aqui continuamos la sesion
Class Core{//rutas principal o publica

	protected $inicio = "login";//ruta principal de la app web
	protected $sesion;//ruta principal al inicior la session

	function urlSession(){//ruta default de la pagina principal de la session
		if($_SESSION){
			$url = $this->sesion = $_SESSION['tipo'];
			return $url;
		}
	}

	private $lista = array(//aqui se agregan las urls permitidas// solo las publicas ($url[0])

								/*agregar de arriba hacia abajo*/
									'login',
									'crear'
								);


	private $listaPremium = array(//rutas principales permitidas de los usuarios premium("solo los que se logearon")
									'premium'
									);

	private $listaStandard = array(//rutas principales permitidas de los usuarios standard("solo los que se logearon")
									'standard'
									);

	private $listaBasico = array(//rutas principales permitidas de los usuarios basico("solo los que se logearon")
									'basico'
									);


	public $url_link = array(//estas rutas sirven solo en las vistas, en el documento html. Ejejmplo: mostrar imagenes, css, enviar formularios, etc.
									'principal' => 'http://localhost/onesoccer/',//las cuales son llamadas asi: <?php echo Core\Core::$url_link['especificar la ruta']
									'models' => 'http://localhost/onesoccer/App/Models/',
									'helpers' => 'http://localhost/onesoccer/App/helpers/',
									'public' => 'http://localhost/onesoccer/Public/',
									'config' => 'http://localhost/onesoccer/Public/Config/'
 									);


	protected $ruta = array(
	 	/*
			============================================
			||		 Configuracion de Rutas
			============================================
		*/
		'BASE' => '/index.php',// Ruta base de la APP WEB
		'MODELS' => 'App/Models/',//Ruta de los Models de la APP WEB
		'CONFIG' => 'App/Config/', //Ruta de las Configuraciones, como css, js, imagen, lib
		'HELPERS' => 'App/helpers/', //Ruta de los ayudantes de los models
		'VIEW' => 'Public/View/'); // Ruta de las vistas



	private  function rutas($ruta){
			foreach ($this->lista as $url) {
				if ($ruta == $url) {
					$enlace  = $url;
					break;
				}else{
					$enlace  = $this->inicio;
				}
			}

			return $enlace;
		}


	protected function rutaSession($ruta){
			if($_SESSION['tipo'] == "premium"){
				foreach ($this->listaPremium as $url) {
					if ($ruta == $url) {
						$enlace  = $url;
						break;
					}else{
						$enlace  = self::urlSession();
					}
				}
				return $enlace;
			}else if($_SESSION['tipo'] == "standard"){
				foreach ($this->listaStandard as $url) {
					if ($ruta == $url) {
						$enlace  = $url;
						break;
					}else{
						$enlace  = self::urlSession();
					}
				}
				return $enlace;
			}else if($_SESSION['tipo'] == "basico"){
				foreach ($this->listaBasico as $url) {
					if ($ruta == $url) {
						$enlace  = $url;
						break;
					}else{
						$enlace  = self::urlSession();
					}
				}
				return $enlace;
			}else{
				return false;
			}
	}



	/*
		========================================
		||   Configuracion de ruta principal
		========================================
	*/
	public function Route(){//metodo principal. se encarga de verificar las url existentes o las url permitidas
		if (isset($_GET['url']) && $_SESSION) {//Verificando si la url tiene una variable $_GET['url'] y que la sesion este iniciada
			$url = explode("/", $_GET['url']);//Partiendo la url, que viene en array la cual $url[0] es igual a www.ejemplo/inicio/. inicio equivale a url[0]
			$link = $this->ruta['VIEW'] . $_SESSION['tipo'] . "/" . self::rutaSession($url[0]) . ".php";
			include $link;
		}else if(!$_SESSION){//ruta cuando no hay session
			if(isset($_GET['url'])){
				$url = explode("/", $_GET['url']);
				$link = $this->ruta['VIEW'] . self::rutas($url[0]) . ".php";
				include $link;
			}else{
				$link = $this->ruta['VIEW'] . $this->inicio . ".php";
				include $link;
			}
		}else{
			$link = $this->ruta['VIEW'] . $_SESSION['tipo'] . "/" . self::urlSession() . ".php";
			include $link;
		}
	}
}


?>
