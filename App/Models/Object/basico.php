<?php


	class basico extends Core{

		private $con;
		private $liga;
		private $club;
		private $id;
		private $defaultliga = 'UEFA';

		public function __construct(){
			$this->con = new Conexion;
		}


		public function get($id){//funcion obligatoria
			$this->id = $id;
		}


		public function set(){//funcion obligatoria
			$id = $this->id;
			return $id;
		}

		//metodo para la liga
		public function liga($link){
				$this->liga = $link;
				$sql = "SELECT * FROM liga WHERE nombre = '{$this->liga}'";
				$datos = $this->con->consultaRetorno($sql);
				$count = mysqli_num_rows($datos);
				if($count > 0){
					$fila = mysqli_fetch_array($datos);
					return $fila;
				}
		}

		public function setLiga(){
				$sql = "SELECT l.cod_liga, l.nombre, c.localidad, c.nombre, c.foto, c.puntos  FROM liga AS l
								INNER JOIN club	AS c ON c.cod_liga = l.cod_liga WHERE l.nombre = '{$this->liga}'";
				$datos = $this->con->consultaRetorno($sql);
				$validar = mysqli_num_rows($datos);
				$i = 0;
				if($validar > 0){
					while($fila = mysqli_fetch_array($datos)){
						echo "<a class='equipos-box' href='" . $this->url_link['principal'] . "basico/club/".$fila[3]."/'>" .
            				"<div class='box-img'><img src='".$this->url_link['config']."img/perfil/".$fila[4]."'>" .
              					"<p>Pais: " . utf8_decode($fila[2]) . " |  puntaje: ".$fila[5]."</p>" .
            				"</div>" .
            				"<div class='box-text'>" .
              					"<h3>" . $fila[3] . "</h3>" .
            				"</div></a>";
										$this->club = $fila[0];
						$i++;
					}
				}if($this->liga == false){
						header("location: " . $this->url_link['principal'] . "basico/");
				}
		}

		//metodo para el club
		public function getClub($id){
			$this->club = $id;
		}

		public function club(){
			$sql = "SELECT  cod_club ,nombre, propietario, creacion, puntos, foto, localidad FROM club WHERE nombre = '{$this->club}'";
			$datos = $this->con->consultaRetorno($sql);
			$fila = mysqli_fetch_array($datos);
			$this->id = $fila[0];
			//datos de los jugadores
			$sql_j = "SELECT cod_jugador, nombre, ape, camiseta, posicion, goles, foto FROM jugador WHERE cod_club = '{$this->id}'";
			$datos_j = $this->con->consultaRetorno($sql_j);
			include "App/helpers/basico/templates/club.php";
		}

	}


?>
