<?php
   
    include_once 'Padre/Padre.php';

    
    
    $select = new Select("Hola","");
    $option1 = new Option("1");
    $option2 = new Option("2");
    
    $select->addOption($option1,$option2);
    
    $head = new PHead();
    $body = new Body($select);
    $html = new PHtml($head,$body);



echo $html;



echo "<form method='POST'>"
. "<input type='date' name='fech' />".
       "<button>Enviar<button/>"
        . "</form>";
echo $_REQUEST["fech"];

?>