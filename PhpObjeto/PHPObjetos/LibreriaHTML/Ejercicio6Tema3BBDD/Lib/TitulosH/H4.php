<?php

class H4 extends Padre{
    function __construct($param) {
        parent::__construct($param);
        $this->inicio = "<h4>\t";
        $this->final = "</h4>\t";
        $this->contenido=$param."\t";
    }
    function __toString() {
        $cadena = $this->inicio.$this->contenido.$this->final;
        return $cadena;
    }
}
?>