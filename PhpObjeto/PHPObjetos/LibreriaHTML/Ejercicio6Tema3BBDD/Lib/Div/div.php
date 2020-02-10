<?php

class Div extends Padre{
    public function __construct(...$param) {
        
        $this->inicio="<div>\n";
        $this->final="</div>\n";
        foreach ($param as $valor){
            $this->contenido.=$valor;
        }
    }
    public function addId($id){
        $this->inicio="<div id='$id'>\n";
    }
    public function __toString() {
        $cadena= $this->inicio.$this->contenido.$this->final;
        return $cadena;
    }
}

?>