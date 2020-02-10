<?php
    
    class PHead{
        private $title;
        private $meta=[];
        
        function __construct($title = "Pagina Defecto") {
            $this->title="<title>".$title."</title>\n";
        }
        function addMeta($name,$content){
            $cadena="<meta name='$name' content='$content'/>"."\n";
                $this->meta[] = $cadena;
        }
        function __toString() {
            $cadena="<head>\n";
            $cadena.="<meta charset='UTF-8'>\n";
            $cadena.="<meta http-equiv='X-UA-Compatible' content='ie=edge'>\n";
            $cadena.= $this->title;
            foreach ($this->meta as $valor){
                $cadena.=$valor."\n";
            }
            $cadena.="</head>\n";
            return $cadena;
        }
    }  
?>