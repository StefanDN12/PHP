<?php


    $clientSOAP = new SoapClient("http://localhost/PhpObjeto/Soap/Ejercicio/serverSoap.php?wsdl");
    
    
    
    $usuario = $clientSOAP->Validacion("a","a");
    
    $echo = $clientSOAP->sacarEcho("hola",$usuario);
    $tempo = $clientSOAP->sacarTempo($usuario);
    
    echo $usuario;
    echo $echo;
    echo $tempo;
    


?>