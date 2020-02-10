<?php
class a extends Padre{
            function __construct(...$param) {
        $this->inicio="<a>\n";
        $this->final="</a>\n";
        foreach ($param as $valor){
            $this->contenido =$valor;
        }
    }
    function setAtr(...$param) {
        foreach ($param as $value) {
            $this->inicio="<a $value>\n";
        }
    }
    function __toString() {
        $cadena = $this->inicio.$this->contenido.$this->final;
        return $cadena;
    }
}

?>