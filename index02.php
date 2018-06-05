<?php
    echo "<h1>Sessiones</h1>";

   //variables de session
   session_start();

   //echo "Nuestro identificador de sesion es: ". session_id();
   //echo "<br/>Su nombre de session es:".session_name();

   $_SESSION['usuario'] = "Yoshi";
   $_SESSION['edad'] = 8;

   echo "Nuestro identificador de sesion es: ". session_id();
   echo "<br/>Su nombre de session es:".session_name()."<br/>";
   echo "<strong>".$_SESSION['usuario']." ".$_SESSION['edad']."</strong>";



?>