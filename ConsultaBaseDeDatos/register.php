<?
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');

    include("conexion.php");

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    $solicitud = "INSERT INTO datos (Nombre,Apellido,Edad,Telefono,Correo) VALUES ('$nombre','$apellido','$edad','$telefono','$correo')";
    
    $resultado = mysqli_query($conexion,$solicitud);
    header("location:index.php");
?>