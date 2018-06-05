<?php   
    $_asunto = $_POST['asunto'];
    $_mensaje = $_POST['mensaje'];

    if($_asunto == null || $_mensaje == null)
    {
       header('location:error.php');
    }else{
        $_solicitud = fopen("file.txt","a") or die("El fichero no se pudo abrir para escribir.");
        fwrite($_solicitud, "Asunto: ");
        fwrite($_solicitud, "\r\n");
        fwrite($_solicitud, $_asunto);
        fwrite($_solicitud, "\r\n");
        fwrite($_solicitud, "Mensaje: ");
        fwrite($_solicitud, "\r\n");
        fwrite($_solicitud, $_mensaje);
        fwrite($_solicitud, "\r\n"); 
        fwrite($_solicitud, "\r\n");      
        fclose($_solicitud);
        header('location:success.php');
    }
?>