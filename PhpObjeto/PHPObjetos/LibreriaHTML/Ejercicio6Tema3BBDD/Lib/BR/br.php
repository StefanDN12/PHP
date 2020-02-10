<?php

class br extends Padre{
    public function __construct() {
        $this->inicio="<br>\n";
    }
    public function __toString() {
        $cadena = $this->inicio;
        return $cadena;
    }
}

?>
