<?php
    class Coche{
        private $motor;
        private $potencia;
        
        private $arrayE=[];
                
        
        function __construct($valor) {
            foreach ($valor as $key=>$valor){
                switch ($key){
                    case "potencia":
                        $this->arrayE[$key]=$valor;
                    break;
                case "motor":
                    $this->arrayE[$key] = $valor;
                    break;
                }
            }
        }
       public function __get($nombre) {
            return $this->$nombre;
        }
       public function mostrar(){
            echo "Tu motor es:".$this->motor;
            echo "Tu potencia es:".$this->potencia;
        }
       public function __set($nombre,$valor){
            $this->$nombre=$valor;
            $this->$nombre=$valor;
        }
    }
    class Furgoneta extends Coche{
        public $longitud;
        function __construct($param) {
            $this->longitud = $param;
        }
        function __get($name) {
            return $this->$nombre;
        }
        function __set($nombre, $valor) {
            parent::__set($nombre, $valor);
            $this->$nombre = $valor;
        }
        function mostrar() {
            parent::mostrar();
        }
    }
?>