<?php

class H7 extends Padre{
    function __construct($param) {
        parent::__construct($param);
        $this->inicio = "<h7>\t";
        $this->final = "</h7>\t";
        $this->contenido=$param."\t";
    }
    function __toString() {
        $cadena = $this->inicio.$this->contenido.$this->final;
        return $cadena;
    }
}
?>