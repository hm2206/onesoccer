<?php

	class Libreria extends Core{

		//todo esto aplica a todos los documentos

		private $icono = "icon";


		private $css = array(//Hojas de estilos permitidas
								//archivo css por defecto de la AppWeb !Alert: para el buenfunacionamiento main debe estar al inicio
								'bootstrap.min',
								'font_size',
								'main'
							);

		private $js = array(//Javascrip permitidas //librerias js estandar
								'jquery',//jquery siempre debe estar arriba
								'main',
								'font_size',
								'push'//archivo js por defecto de la AppWeb
							);


		public function CargarIcono(){
			echo "<link rel='shortcut icon' href='" . $this->url_link['config'] . "img/iconos/" . $this->icono . ".png' />";
		}

		public function CargarCss(){//cargar css generico
			foreach ($this->css as $estilos) {
				echo "<link rel='stylesheet' href='" . $this->url_link['config'] . "css/" . $estilos . ".css'>";
			}
		}

		public function CargarJs(){//cargar js generico como jquery, push y main
			foreach ($this->js as $javascript) {
				echo "<script src='" . $this->url_link['config'] . "js/" . $javascript . ".js'></script>";
			}
		}


		//css y js individual(personalizado) Aca abajo se crea funciones personalizadas y array personalizadas

		private $welcome = array(//css para la pagina principal
								'welcome'
								);

		private $foto = array(
								'foto'
							 );

		private $login = array(
								'main'
								);


		/////////////////////////////////////////////////////////////////////////////////////////

		private $premium = array(//css para el objeto premium
								'bootstrap'
								);

		private $standard = array(//css para el objeto standard
								'bootstrap'
								);

		private $basico = array(//css para el objeto basico
								'bootstrap'
								);


		// Aqui van los javascript de cada objeto
		private $JsPremium = array(//js para el objeto premium
									'ajax'
								  );

		private $JsStandard = array(//js para el objeto premium
									'ajax'
								  );

		private $JsBasico = array(//js para el objeto premium
									'ajax'
								  );

		//cargar css a las pagina publicas

		public function CssWelcome(){
			foreach ($this->welcome as $css) {
				echo "<link rel='stylesheet' href='" . $this->url_link['config'] . "css/" . $css . ".css'>";
			}
		}


		public function CssFoto(){
			foreach ($this->foto as $css) {
				echo "<link rel='stylesheet' href='" . $this->url_link['config'] . "css/" . $css . ".css'>";
			}
		}


		//Cargar js publicas


		public function JsLogin(){
			foreach ($this->login as $js) {
				echo "<script src='" . $this->url_link['config'] . "js/" . $js . ".js'></script>";
			}
		}


		//Cargar css a las paginas con session


		public function CssPremium(){
			foreach ($this->premium as $css) {
				echo "<link rel='stylesheet' href='" . $this->url_link['config'] . "css/premium/" . $css . ".css'>";
			}
		}

		public function CssStandard(){
			foreach ($this->standard as $css) {
				echo "<link rel='stylesheet' href='" . $this->url_link['config'] . "css/standard/" . $css . ".css'>";
			}
		}

		public function CssBasico(){
			foreach ($this->basico as $css) {
				echo "<link rel='stylesheet' href='" . $this->url_link['config'] . "css/basico/" . $css . ".css'>";
			}
		}

		//Cargar js de las paginas privadas o de session

		public function JsPremium(){
			foreach ($this->Premium as $js) {
				echo "<script src='" . $this->url_link['config'] . "js/premium/" . $js . ".js'></script>";
			}
		}

		public function JsStandard(){
			foreach ($this->Premium as $js) {
				echo "<script src='" . $this->url_link['config'] . "js/standard/" . $js . ".js'></script>";
			}
		}

		public function JsBasico(){
			foreach ($this->Premium as $js) {
				echo "<script src='" . $this->url_link['config'] . "js/basico/" . $js . ".js'></script>";
			}
		}
	}

?>