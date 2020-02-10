<?php

class Option extends Padre{
    public function __construct(...$param) {
        $this->inicio="<option>\n";
        $this->final="</option>\n";
        foreach ($param as $value) {
            $this->contenido=$value;
        }
    }
    public function setAtr(...$param){
        foreach ($param as $value) {
            $this->inicio="<option value='$value'>\n";
        }
    }
    public function __toString() {
        $cadena = $this->inicio.$this->contenido.$this->final;
        return $cadena;
    }
}

?>