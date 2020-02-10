<?php

class H1 extends Padre{
    function __construct($param) {
        parent::__construct($param);
        $this->inicio = "<h1>\t";
        $this->final = "</h1>\t";
        $this->contenido=$param."\t";
    }
    function __toString() {
        $cadena = $this->inicio.$this->contenido.$this->final;
        return $cadena;
    }
}

?>