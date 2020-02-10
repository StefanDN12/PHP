<?php
include_once 'Lib/Padre/Padre.php';
class bbdd {
    protected $bbdd="";
     
    public function __construct() {
        $this->bbdd = new PDO('mysql:host=localhost;dbname=escuela','root','');
    }
    
    public function sacarCalle() {
        $calle=[];
        $query = "SELECT cod,descri FROM tipovia";
        
        
        foreach ($this->bbdd->query($query) as $row){
           $calle[] = $row['cod'];
        }
        return $calle;
    }
    public function insertarDT(...$valores) {
        $valorAumento;
        $query2Sl = "SELECT MAX(`cod`) FROM `alumnos1`";
        foreach ($this->bbdd->query($query2Sl) as $value) {
            if($value == NULL){
                $valorAumento = 1;
            }else{
                $valorAumento = $value;
            }
        }
        
        foreach ($valores as $vl){
            var_dump($vl);
            $query = "INSERT INTO `alumnos1`(`cod`, `nombre`, `apellido`, `dni`, `fechaNacimiento`, `tipoVia`, `nombreVia`, `numeroVia`, `telefono`, `localidad`) VALUES ($valorAumento,'$vl[0]','$vl[1]','$vl[2]','$vl[3]',$vl[4],'$vl[5]',$vl[6],$vl[7],'$vl[8]')";
            $this->bbdd->query($query);
        }
    }
}

?>