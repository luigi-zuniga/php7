<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manejo de Ficheros PHP 7</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-lg-offset-3 col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <form action="ficheros.php" method="POST" role="form">
            <legend>Manejo de Ficheros - PHP7</legend>
            <div class="form-group">
                <label for="" class="control-label">Asunto</label>
                <input type="text" class="form-control" id="" placeholder="Asunto" name="asunto">
                <br/>
                <label for="" class="control-label">Mensaje</label>
                <textarea type="text" class="form-control" id="" placeholder="Ingrese el mensaje..." name="mensaje"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        </div>
        </div>      
    </div>
</body>
</html>