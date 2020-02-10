<?php

class Table extends Padre{
    public function __construct(...$param) {
        $this->inicio="<table border='1'>\n";
        $this->final="</table>\n";
        foreach ($param as $valor){
            if($valor instanceof tr){
            $this->contenido.="$valor";
            }
        }
    }
    public function addId($id) {
        $this->inicio="<table border='1' id='$id'>\n";
    }
    public function __toString() {
        $cadena = $this->inicio.$this->contenido.$this->final;
        return $cadena;
    }
}


?>