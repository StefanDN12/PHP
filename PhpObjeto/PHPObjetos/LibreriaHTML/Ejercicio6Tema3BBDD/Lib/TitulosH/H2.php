<?php

class H2 extends Padre{
    function __construct($param) {
        parent::__construct($param);
        $this->inicio = "<h2>\t";
        $this->final = "</h2>\t";
        $this->contenido=$param."\t";
    }
    function __toString() {
        $cadena = $this->inicio.$this->contenido.$this->final;
        return $cadena;
    }
}

?>

