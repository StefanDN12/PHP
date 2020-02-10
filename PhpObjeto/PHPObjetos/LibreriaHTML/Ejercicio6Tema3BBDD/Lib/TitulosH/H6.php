<?php

class H6 extends Padre{
    function __construct($param) {
        parent::__construct($param);
        $this->inicio = "<h6>\t";
        $this->final = "</h6>\t";
        $this->contenido=$param."\t";
    }
    function __toString() {
        $cadena = $this->inicio.$this->contenido.$this->final;
        return $cadena;
    }
}
?>

