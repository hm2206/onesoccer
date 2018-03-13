<?php

	
	class Admin{

		private $con;

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


		public function list(){//funcion obligatoria

		}

		public function view($id){//funcion obligatoria

		}

		public function insert($id){//funcion obligatoria

		}

		public function edit($id){//funcion obligatoria

		}

		public function update($id){//funcion obligatoria

		}

		public function delete($id){//funcion obligatoria

		}

	}

?>