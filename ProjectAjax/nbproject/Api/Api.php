<?php
include_once '../Funciones/Funciones.php';
$opciones = $_GET["opciones"];


switch ($opciones) {
    case 1:
        Login();
    break;
    case 2:
        Logout();
    break;
    case 3:
        Select();
    break;
    case 4:
        Insert();
    break;  
    case 5:
        Delete();
    break;
}

?>