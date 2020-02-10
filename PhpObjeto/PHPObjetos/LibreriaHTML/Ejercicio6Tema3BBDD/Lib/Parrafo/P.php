<?php

class P extends Padre{
    public function __construct(...$param) {
        $this->inicio="<p>\n";
        $this->final="</p>\n";
        for($a = 0;$a<count($param);$a++){
                $this->contenido.=" ".$param[$a]."\n";
            }
    }
    public function setId($id) {
        $this->inicio="<p id='$id'>\t";
    }
    public function __toString() {
        $cadena = $this->inicio.$this->contenido.$this->final;
        return $cadena;
    }
}

?>