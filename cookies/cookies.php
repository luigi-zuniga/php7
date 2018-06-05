<?php
    //Ejemplo de cookies
    //setcookie('pais','chile',time()+3600,'/','localhost:8080/php7/cookies',$_SERVER('HTTPS'))
    /*
        Varibles de una cookies
        - nombre
        - valor
        - expire
        - path
        - dominio
        - secure
    */ 

    $miPais = $_POST['pais'];
    setcookie("estado","$miPais",time()+3600);

    echo "<p>El actual valor de la Cookie es :</p>";
    echo "<h2>".$_COOKIE['estado']."</h2>";
?>