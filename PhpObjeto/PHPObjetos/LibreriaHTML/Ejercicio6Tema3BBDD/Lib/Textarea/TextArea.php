<?php

class Textarea extends Padre{
    public function __construct() {
        $this->inicio="<textarea>\n";
        $this->final="</textarea>\n";
    }
    public function addAtr(...$param){
        foreach ($parama as $valor){
            $this->inicio="<textarea $valor>\n";
        }
        
    }
    public function __toString() {
        $cadena = $this->inicio.$this->contenido.$this->final;
        return $cadena;
    }
}

?>