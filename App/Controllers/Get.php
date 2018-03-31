<?php

class Get extends Route{

    //Variables
    protected $url_enlace;

    //captura la url en el array 2
    public function get2($link){
        $url = explode('/', $_GET['url']);
        $this->url_enlace = $url[2];
    }

    public function setGet(){
      return $this->url_enlace;
    }


    //metodo para validar rutas permitidas de la pagina basica

}

?>
