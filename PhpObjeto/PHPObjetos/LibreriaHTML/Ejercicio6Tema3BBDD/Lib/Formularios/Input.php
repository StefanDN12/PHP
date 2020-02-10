<?php
class Input extends Padre{
    protected const VALIDADORTIPOS = ["checkbox","email","password","file","hidden","radios","submit","text","date","number"];
    public function __construct() {
        $this->inicio="$<input/>\n<br />";
    }
    public function addAtr($id,$nombre,...$param) {
        foreach ($param as $valor){
            if(in_array($valor, $this::VALIDADORTIPOS)){
                $this->inicio="$nombre: <input type='$valor' name='$id'>\n<br />";
            }else{
                $this->inicio="$nombre <input type='submit' value='Enviar' id='$id'>\n<br />";
            }
        }
    }
    public function devolverInputs() {
        $inputs.= $this->inicio."\n<br />";
        return $inputs;
    }
    public function __toString() {
        $cadena= $this->inicio."\n<br />";
        return $cadena;
    }
}

?>