
<?php
    class Body extends Padre{
       public function __construct(...$param) {
           $this->inicio="<body>\n";
           $this->final="</body>\n";
            for($a = 0;$a<count($param);$a++){
                $this->contenido.=" ".$param[$a];
            }
       }
    public function __toString() {
        $cadena = $this->inicio.$this->contenido.$this->final;
        return $cadena;
    }
    }

?>