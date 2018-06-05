<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');

    include("conexion.php");
    //Creacion de tabla desde php
    $solicitud = "CREATE TABLE datos (
        ID  INT NOT NULL AUTO_INCREMENT,
        Nombre VARCHAR (15) NOT NULL,
        Apellido VARCHAR(15) NOT NULL,
        Edad INT NOT NULL,
        Telefono INT,
        Correo VARCHAR(80),
        PRIMARY KEY (ID)
    )";  
    //llamamos a la variable dentro del archivo de conexion y le enviamos la solicitud para crear la bd
    $resultado = mysqli_query($conexion,$solicitud);
?>
