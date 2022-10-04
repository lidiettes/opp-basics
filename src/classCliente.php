<?php

// subclase

require_once ("classUsuario.php");

class Cliente extends Usuario {

    protected $fltCredito;

    function __construct(int $dpi, string $nombre, string $email){
        parent::__construct($dpi, $nombre, $email);
    }

    //metodos

    public function setCredito(string $credito){
        $this ->fltCredito = $credito;
    }

    public function getCredito():float{
        return $this->fltCredito;
    }

}//end


?>