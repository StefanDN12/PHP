<?php
require_once ('nusoap/nusoap.php');
$server = new soap_server();


$server->configureWSDL("serverSoap", "test");
$server->wsdl->schemaTargetNamespace = "test";

$server->register('Validacion', array('valor1'=>'xsd:string','valor2'=>'xsd:string'),array('return'=>'xsd:string'),"test");
$server->register('sacarEcho', array('valor1'=>'xsd:string','valor2'=>'xsd:string'),array('return'=>'xsd:string'),"test");
$server->register('sacarTempo', array('valor1'=>'xsd:string'),array('return'=>'xsd:date'),"test");




function Validacion($user,$pass) {
    $conexion = new PDO('mysql:host=localhost;dbname=loginsoap', 'root', '');
    $qr = "SELECT `User`, `Password` FROM `login` WHERE `User`= '$user' and `Password`='$pass'";
    $token="";
    $conexionn = $conexion->query($qr); 
    
    $valida = "SELECT `Tokens` FROM `tokens`";
    
    if($conexionn != NULL){
        if($conexion->query($valida) != NULL){
        $token = hash("md5", $user.$pass);
        $conexion2 = new PDO('mysql:host=localhost;dbname=loginsoap', 'root', '');
        $qrIn = "INSERT INTO `tokens`(`Tokens`) VALUES ('$token')";
        $conexion2->query($qrIn);
        }
    }
    
    
    return $token;
   } 

   function sacarEcho ($valor,$token){
       $conexion = new PDO('mysql:host=localhost;dbname=loginsoap', 'root', '');
       $qr = "SELECT `Tokens` FROM tokens WHERE Tokens='$token'";
       $valorDv="";
       $result = $conexion->query($qr); 
       
       if($result == $token){
           $valorDv = $valor;
       }else{
           $valorDv = "error";
       }
       return $valorDv;
   }
   function sacarTempo($token){
       $date = date('d-m-Y');
        $conexion = new PDO('mysql:host=localhost;dbname=loginsoap', 'root', '');
       $qr = "SELECT `Tokens` FROM tokens WHERE Tokens ='$token'";
       $valorDv="";
       $result = $conexion->query($qr);
       
       
       if($result == $token){
           $valorDv = $date;
       }else{
           $valorDv = "error";
       }
       return $valorDv;
   }
@$server->service(file_get_contents("php://input"));
?>