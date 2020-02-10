<?php

class H5 extends Padre{
    function __construct($param) {
        parent::__construct($param);
        $this->inicio = "<h5>\t";
        $this->final = "</h5>\t";
        $this->contenido=$param."\t";
    }
    function __toString() {
        $cadena = $this->inicio.$this->contenido.$this->final;
        return $cadena;
    }
}
?>
