<?php

try{
    /*
     * Conexion mediante un cliente al tiempo de estados unidos.
     */
    $clientSOAP = new SoapClient("ndfdXML.wsdl");
     
    /*
     * Descargamos el wsdl y mediante la documentacion tiramos una consulta contra el wsdl
     */
    $result = $clientSOAP->NDFDgenByDay(35.225, -120.111, '2020-01-27',7,'e','24 hourly');
    
    print_r($result);
} catch (Exception $ex) {
    var_dump($ex);
}

?>