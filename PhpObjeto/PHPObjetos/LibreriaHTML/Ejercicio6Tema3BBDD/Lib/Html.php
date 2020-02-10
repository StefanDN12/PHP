<?php
class PHtml{
        private $head; 
        private $body;
        
        function __construct($head,$body){
            $this->head=$head;
            $this->body=$body;
        }
        function __toString() {
           $texto = "<!DOCTYPE html>\n<html lang='es'>\n".$this->head.$this->body."</html>";
           return $texto;
        }   
    }
?>