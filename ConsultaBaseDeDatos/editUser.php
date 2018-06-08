<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $id = $_POST['id'];

    include("conexion.php");

    $editUser = "UPDATE datos SET 
                        Nombre = '$nombre',
                        Apellido = '$apellido',
                        Edad = '$edad',
                        Telefono = '$telefono',
                        Correo = '$correo'
                 WHERE  ID=$id";
     
    $resultado = mysqli_query($conexion,$editUser); 
    header("location:index.php");
?>