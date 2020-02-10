<?php
    class Titulo {
        private $texto;
        private $posicion;
        private $colortexto;
        private $colorfondo;

        function __constructor(){
            $this->texto = "";
            $this->posicion = "centro";
            $this->colortexto = "negro";
            $this->colorfondo = "blanco";
        }
        function __get($texto){
            return $this->$texto;
        }
        function __set($atributo, $valor){
            if(isset($this->$atributo)){
                if(isset($valor)){
                    $this->$atributo=$valor;
                }else{
                    switch ($atributo) {
                        case 'Texto':
                            $this->texto=$valor;
                            break;
                        case 'Posicion':
                            $this->posicion=$valor;
                        break;
                        case 'ColorTexto':
                            $this->colortexto=$valor;
                        break;
                        case "ColorFondo":
                            $this->colorfondo = $valor;
                        break;
                    }
                }
            }
        }
        function mostrar(){
            $titulo;

            $titulo = "Titulo: ".$this->texto."posicion: ".$this->posicion."color texto: ".$this->colortexto."color fondo: ".$this->colorfondo;
            return $titulo;
        }
    }
$a = new Titulo();
echo $a;
?>