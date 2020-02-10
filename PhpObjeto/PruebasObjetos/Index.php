<?php
include_once 'Coche.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$arrayEJ["potencia"]=400;
$arrayEJ["motor"]="6 cilindros";
$a = new Coche($arrayEJ);



echo $a->motor." ".$a->potencia;

/*
 $b = new Furgoneta("2 metros");
$b->motor = "8 Cilindros";
$b->potencia = "300 cv";
$b->longitud = "3 metros";
echo $b->motor."<br /> ".$b->potencia."<br/> ".$b->longitud;
*/
?>