<?php

// subclase

require_once ("classUsuario.php");

class Empleado extends Usuario {

    protected $strPuesto;

    function __construct(int $dpi, string $nombre, string $email){
        parent::__construct($dpi, $nombre, $email);
    }

    //metodos

    public function setPuesto(string $puesto){
        $this->strPuesto = $puesto;
    }

    public function getPuesto():string{
        return $this -> strPuesto;
    }

}//end


?>