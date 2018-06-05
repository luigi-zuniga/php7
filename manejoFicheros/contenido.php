<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manejo de Ficheros - PHP 7</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
            $_solicitud = fopen("file.txt","r") or die("No se puede acceder al fichero.");

            while(!feof($_solicitud))
            {
                $_leer = fgets($_solicitud);
                $_ver = nl2br($_leer);
                echo $_ver;
            }
        ?>
        <br/>
        <a href="index.php" class="btn btn-primary">ir a inicio</a>
    </div>
</body>
</html>
