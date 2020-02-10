<?php

class img extends Padre{
    public function __construct() {
        $this->inicio="<img />\n";
    }
    public function setAtr(...$param) {
    foreach ($param as $valor){
            $this->inicio="<img $valor/>\n";
        }
        
    }
    public function __toString() {
        $cadena = $this->inicio;
        return $cadena;
    }
}

?>