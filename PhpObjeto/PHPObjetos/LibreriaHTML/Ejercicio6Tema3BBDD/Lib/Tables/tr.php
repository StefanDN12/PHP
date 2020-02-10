<?php
class tr extends Padre{
    public function __construct(...$param) {
        $this->inicio="<tr>";
        $this->final="</tr>";
        foreach ($param as $valor){
            if($valor instanceof td ||$valor instanceof th){  
            $this->contenido.=$valor;
            }
        }
    }
    public function addContenido(...$obj){
        foreach ($obj as $value) {
            if($value instanceof td){
                $this->contenido.=$value;
            }
            
        }
        
    }
    public function __toString() {
        $cadena= $this->inicio.$this->contenido.$this->final;
        return $cadena;
    }
}
?>