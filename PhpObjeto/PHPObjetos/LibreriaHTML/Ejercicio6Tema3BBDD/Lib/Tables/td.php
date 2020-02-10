<?php

class td extends Padre{
    public function __construct(...$param) {
        parent::__construct($param);
        $this->inicio="<td>";
        $this->final="</td>";
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