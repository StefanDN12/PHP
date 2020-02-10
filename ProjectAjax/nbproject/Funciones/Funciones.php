<?php

   function Login() {
       echo header("Content-Type:text/xml");
       
       ?>
    <xml>
        <dato>
            <funccion>1</funccion>
            <estado>OK</estado>
        </dato>
    </xml>
       <?php
       
   }
   function Logout() {
       echo header("Content-Type:text/json");
       
       ?>
    {
  "json": {
    "datos": {
      "funccion": "2",
      "estado": "ok"
    }
  }
}
       <?php
    }

    function Select() {
            echo header("Content-Type:text/json");

               ?>
        {
  "json": {
    "datos": {
      "funccion": "3",
      "estado": "ok"
    }
  }
}
       <?php
    }
    function Insert(){
        echo header("Content-Type:text/json");

           ?>
    {
  "json": {
    "datos": {
      "funccion": "4",
      "estado": "ok"
    }
  }
}
       <?php
    }
    function Delete() {
        echo header("Content-Type:text/json");

           ?>
    {
  "json": {
    "datos": {
      "funccion": "5",
      "estado": "ok"
    }
  }
}
       <?php
    }

?>