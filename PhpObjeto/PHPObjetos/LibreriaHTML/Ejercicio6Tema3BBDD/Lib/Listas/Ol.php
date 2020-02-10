<?php
class Ol extends Padre{
    protected const VALIDARTIPOS = ["1","a","A","i","I"];
    public function __construct() {
        $this->inicio="<ol>\n";
        $this->final="</ol>\n";
    }
    public function addAtr(...$param){
        foreach ($param as $valor){
            if(in_array($valor, $this::VALIDARTIPOS)){
                $this->inicio="<ol type='$valor'>\t";
            }else{
                $this->inicio="<ol type='1' $valor>\t";
            }
        }
    }
    public function addLi($obj){
        $this->contenido.="<li>$obj</li>\t";
    }
    public function __toString() {
        $cadena = $this->inicio.$this->contenido.$this->final;
        return $cadena;
    }
}
?>
