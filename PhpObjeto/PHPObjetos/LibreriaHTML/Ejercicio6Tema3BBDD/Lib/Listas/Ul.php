<?php

class Ul extends Padre{
    protected const VALIDARTIPOS = ["disc","square","circle"];
    public function __construct() {
        $this->inicio="<ul>\n";
        $this->final="</ul>\n";
    }
    public function addAtr(...$param){
        foreach ($param as $valor){
            if(in_array($valor, $this::VALIDARTIPOS)){
                $this->inicio="<ul type='$valor'>\n";
            }else{
                $this->inicio="<ul type='disc' $valor>\n";
            }
        }
        
    }
    public function addLi($obj){
        $this->contenido="<li>$obj</li>\n";
    }
    public function __toString() {
        $cadena = $this->inicio.$this->contenido.$this->final;
        return $cadena;
    }
}

?>