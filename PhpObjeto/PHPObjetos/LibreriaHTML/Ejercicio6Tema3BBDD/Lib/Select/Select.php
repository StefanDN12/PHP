<?php

    class Select extends Padre {
        protected $arraySelects=[];
        public function __construct(...$param) {
            $this->inicio="$nombre: <select>\n<br>";
            $this->final="</select>\n<br>";
            foreach ($param as $value) {
                if($value instanceof Option){
                $this->contenido.= "$value";
                }
            }
        }
        public function setArt($nombre,...$param) {
            foreach ($param as $value) {
            $this->inicio="$nombre: <select $value>\n<br>";
            }
        }
        
        public function addOption(...$option){
            foreach ($option as $value) {
           if($value instanceof Option){
               $this->arraySelects[]=$value;
       }
       }
            
        }


        public function __toString() {
            foreach ($this->arraySelects as $valor){
                $this->contenido.=$valor;
       }
            
            $cadena = $this->inicio.$this->contenido.$this->final."<br>";
            return $cadena;
        }
    }


?>