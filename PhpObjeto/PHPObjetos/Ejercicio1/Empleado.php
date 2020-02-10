<?php
class Empleado {
    public $nombre = "";
    public $sueldo = 0;
    public static $NEMPL;
    function __construct(...$param){
        $this->nombre = "Empleado"; 
        $this->sueldo = 0;         
            $NEMPL++;
        if(count($param) == 1){
            if(is_string($param)){
                $this->nombre = $param;
                $this->sueldo = 0;
            }else{
                $this->sueldo = $param;
                $this->nombre = "Empleado";
            }
        }
        if(count($param) == 2){
            if(is_string($param[1])){
                $this->nombre = $param[0];
                $this->sueldo = $param[1];
            }else{
                $this->sueldo = $param[1];
                $this->nombre = $param[0];
            }
        }
        if(count($param) >2){
            $this->nombre = "Empleado";
            $this->sueldo = 0;
            
            
            $NEMPL++;
        }
    }
    function __clone(){
        $this->sueldo = ++$self::$sueldo;
    }
    function __set($nombre,$sueldo){
        $boll = false;
        if(isset($nombre) && isset($sueldo)){
        if(is_string($nombre)){
            if(is_numeric($sueldo)){
                $this->nombre = $nombre;
                $this->sueldo = $sueldo;  
                $boll = true;         
            }
        }
    }
    return $boll;
    }
    function __get($nombre){
        $resultado ="";
        if(isset($this->nombre)){
            $resultado = $this->nombre;
        }
        return $resultado;
    }
    
}
class Myclonado {
    public $objeto1;

    function __clone(){
        $this->objeto1 = clone $this->objeto1;
    }
}

$a = new Empleado();
$b = new Empleado("Juan");
$c = new Empleado("Manolo",300);
$d = new Empleado("Fran",300,"Julio");
$f->$objeto1 = new Myclonado("Pepe");
$nombre = "";
$sueldo = 0;
echo $a->$nombre."</br>";
echo $b->$nombre."</br>";
echo $c->$nombre."</br>";
echo $d->$nombre."</br>";
print_r($f);
?>