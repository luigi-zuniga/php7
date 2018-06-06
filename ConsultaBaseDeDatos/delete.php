<?php
    include("conexion.php");
    $id = $_GET['id'];
    
    $delete = "DELETE FROM datos WHERE ID=$id";
    $resultado = mysqli_query($conexion,$delete);

    header("location:index.php");

?>