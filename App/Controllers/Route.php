<?php
	class Route extends Core{//ruta secundaria de la aplicacion

		private $premium = array(//rutas permitidas para los usuarios premium
								'horario',
								'perfil',
								'nota',
								'inicio'
								);

		private $standard = array(//rutas permitidas para los usuarios standard
								'horario',
								'perfil',
								'nota',
								'inicio'
								);

		private $basico = array(//rutas permitidas para los usuarios basico
								'jugador',
								'club',
								'liga',
								'inicio'
								);


		//rutas alternas de los usuarios premium

		private  function Premium($ruta){
			foreach ($this->links as $url) {
				if ($ruta == $url) {
					$enlace  = $url;
					break;
				}else{
					$enlace  = 'inicio';
				}
			}

			return $url;
		}

		public function enlacesPremium(){
			if(isset($_GET['url'])){
				$url = explode('/', $_GET['url']);
				if(isset($url[1])){
				$link = $url[1];
				require "Public/View/" . $_SESSION['tipo'] . "/templates/" . self::Premium($link) . ".php";
				}
			}else{
				require "Public/View/" . $_SESSION['tipo'] . "/templates/inicio.php";
			}
		}



		//rutas alternas de los usuarios standard

		private  function Standard($ruta){
			foreach ($this->links as $url) {
				if ($ruta == $url) {
					$enlace  = $url;
					break;
				}else{
					$enlace  = 'inicio';
				}
			}

			return $url;
		}

		public function enlacesStandard(){
			if(isset($_GET['url'])){
				$url = explode('/', $_GET['url']);
				if(isset($url[1])){
				$link = $url[1];
				require "Public/View/" . $_SESSION['tipo'] . "/templates/" . self::Standard($link) . ".php";
				}
			}else{
				require "Public/View/" . $_SESSION['tipo'] . "/templates/inicio.php";
			}
		}


		//rutas alternas de los usuarios basico

		private  function Basico($ruta){
			foreach ($this->basico as $url) {
				if ($ruta == $url) {
					$enlace  = $url;
					break;
				}else{
					$enlace  = 'inicio';
				}
			}

			return $url;
		}

		public function enlacesBasico(){
			if(isset($_GET['url'])){
				$url = explode('/', $_GET['url']);
				if(isset($url[1])){
				$link = $url[1];
				include "Public/View/" . $_SESSION['tipo'] . "/templates/" . self::Basico($link) . ".php";
				}
			}else{
			 	include "Public/View/" . $_SESSION['tipo'] . "/templates/inicio.php";
			}
		}

	}

?>
