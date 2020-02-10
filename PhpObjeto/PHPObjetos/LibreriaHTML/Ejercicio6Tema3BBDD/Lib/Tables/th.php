<?php

class th extends Padre{
    public function __construct(...$param) {
        $this->inicio="<th>";
        $this->final="</th>";
        foreach ($param as $valor){
            $this->contenido.=$valor;
        }
    }
    public function addContenido($obj){
        $this->contenido=$obj;
    }
    public function __toString() {
        $cadena= $this->inicio.$this->contenido.$this->final;
        return $cadena;
    }
}

?>