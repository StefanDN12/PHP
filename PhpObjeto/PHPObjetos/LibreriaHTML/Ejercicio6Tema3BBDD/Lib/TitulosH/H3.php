<?php

class H3 extends Padre{
    function __construct($param) {
        parent::__construct($param);
        $this->inicio = "<h3>\t";
        $this->final = "</h3>\t";
        $this->contenido=$param."\t";
    }
    function __toString() {
        $cadena = $this->inicio.$this->contenido.$this->final;
        return $cadena;
    }
}

?>

