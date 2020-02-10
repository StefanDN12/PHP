<?php
     include_once '/Lib/Padre/Padre.php';
     include_once 'BBDD.php';
     
    include_once 'Lib/Html.php';
    include_once 'Lib/Head.php';
    include_once 'Lib/Body.php';

    include_once 'Lib/Formularios/Form.php';
    include_once 'Lib/Formularios/Input.php';
    include_once 'Lib/Select/Select.php';
    include_once 'Lib/Select/Option.php';
    include_once 'Lib/Tables/Table.php';
    include_once 'Lib/Tables/td.php';
    include_once 'Lib/Tables/tr.php';
    
   
    
    
    $formulario = new Forms();
    $dni = new Input("dni");
    $nombre = new Input("nombre");
    $apellido = new Input("apellido");
    $fechaNac = new Input("fecha de nacimiento");
    $direccion = new Select(); 
    $nombrVia = new Input("Nombre de Via");
    $numeroVia = new Input("Numero de via");
    $localidad = new Input("localidad");
    $telefono = new Input("telefono");
    $boton= new Input();
    $bbdd = new bbdd();
    $direccion->setArt("Elige el tipo de calle","id='slc'");
    
        
        
        $formulario->addatribs("id='frm1'");
        $dni->addAtr("dni","dni","text");
        $nombre->addAtr("nm","nombre","text");
        $apellido->addAtr("ap","apellido","text");
        $fechaNac->addAtr("fc","fecha de nacimiento","date");
        $nombrVia->addAtr("nombVia","Nombre de via","text");
        $numeroVia->addAtr("numVia","Numero de vias","number");
        $localidad->addAtr("loca","localidad","text");
        $telefono->addAtr("tf","telefono","number");
        $boton->addAtr("btn","","button");
        
        
        
        foreach ($bbdd->sacarCalle() as $valor){
            if($valor[0] == 1){
                $opcion1 = new Option("calle");
                $opcion1->setAtr($valor[0]);
                $opcion2 = new Option("avenida");
                $opcion2->setAtr($valor[1]);
            }elseif($valor[1] == 2){
                $option1 = new Option("avenida");
                $opcion1->setAtr($valor);
                $opcion2 = new Option("calle");
                $opcion2->setAtr($valor);
            }
            
            var_dump($option1);
            
        }
        
        $direccion->addOption($opcion1,$opcion2);
        
         
        
        $formulario->addInput($dni,$nombre,$apellido,$fechaNac,$localidad,$direccion,$nombrVia,$numeroVia,$telefono,$boton);
        
        $bbdd->insertarDT($_REQUEST["nm"],$_REQUEST["ap"],$_REQUEST["dni"],$_REQUEST["fc"],$_REQUEST["slc"],$_REQUEST["nombVia"],$_REQUEST["numVia"],$_REQUEST["tf"],$_REQUEST["loca"]);
        
        
        $head = new PHead();        
        $body = new Body($formulario);
        $Html = new PHtml($head,$body);

?>