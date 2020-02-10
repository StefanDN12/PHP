<?php

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("aritmetica.wsdl");

function sumar($operador1,$operador2) {
    return $operador1+$operador2;
}

function restar($operador1,$operador2) {
    return $operador1-$operador2;
}

$server->addFunction("sumar");
$server->addFunction("restar");
$server->handle();

?>