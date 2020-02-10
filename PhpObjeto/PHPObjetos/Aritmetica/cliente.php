<?php

try{
    $clientSOAP = new SoapClient("http://localhost/PhpObjeto/PHPObjetos/Aritmetica/nuSever.php?wsdl");
    
    var_dump($clientSOAP->__getFunctions());
    var_dump($clientSOAP->__getTypes());
    
    $resultado_multi = $clientSOAP->multiplicarNumeros(3,3);
   
    
    echo 'la multiplicación de 3 mas 3 es: '.$resultado_multi."<br/>";
    
} catch (Exception $ex) {
    var_dump($ex);
}

?>