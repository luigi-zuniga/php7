<?php
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "Clientes";

    $conexion = mysqli_connect($host,$user,$pass,$db);
    mysqli_set_charset($conexion, "utf-8");
?>