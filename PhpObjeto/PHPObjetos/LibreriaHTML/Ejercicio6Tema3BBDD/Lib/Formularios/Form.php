<?php

class Forms extends Padre{
    protected const VALIDADOFORM = ["POST","GET"];
    protected  $arrayInput=[];
    public function __construct() {
        $this->inicio="<form>\n";
        $this->final="</form>\n";
    }
    public function addatribs(...$param){
    foreach ($param as $valor){
        if(in_array($valor, $this::VALIDADOFORM)){
            $this->inicio="<form method='$valor'>\n";
    }else{
            $this->inicio="<form method='POST' $valor>\n";
    }
    }
    }   
   public function addInput(...$Obj){
       foreach ($Obj as $value) {
           
               $this->arrayInput[]=$value;
       }
       
       

   }
   public function __toString() {
              foreach ($this->arrayInput as $valor){
            $this->contenido.=$valor;
       }
       
       $cadena= $this->inicio.$this->contenido.$this->final;
       return $cadena;
   }
}

?>