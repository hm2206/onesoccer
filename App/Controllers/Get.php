<?php

class Get extends Route{

    //Variables
    protected $url_enlace;

    protected $doneBasico = array('');

    //captura la url
    public function setGet($link){
        $url = explode('/', $_GET['url']);
        $this->url_enlace = $url[2];
    }


    //metodo para validar rutas permitidas de la pagina basica
    public function enlaceBasico(){
        foreach ($this->$doneBasico as $basico) {
            if($this->$url_enlace == $basico){
                $url = $basico;
                break;
            }else{
              $url = "inicio";
            }
        }
        return $url;
    }

    public function UrlBasico(){
        if(isset($_GET['url']) == $this->url_enlace){

        }
    }


}

?>
