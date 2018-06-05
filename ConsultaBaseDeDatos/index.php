<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP7 - Consulta Base de datos</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
    <div class="container">
      <form class="form-signin" method="POST" action="register.php">
        <h2 class="form-signin-heading text-center">Welcome to Login</h2>
        <br/>
        <input type="text"  name="nombre" class="form-control" placeholder="Ingrese su nombre" required autofocus>
        <br/>
        <input type="text" name="apellido" class="form-control" placeholder="Ingrese su apellido" required>
        <br/>
        <input type="text" name="edad" class="form-control" placeholder="Ingrese su edad" required>
        <br/>
        <input type="text" name="telefono" class="form-control" placeholder="Ingrese su número" >
        <br/>
        <input type="email" name="correo" class="form-control" placeholder="Ingrese su correo" >
        <br/>
        <button class="btn btn-sm btn-primary btn-block" type="submit">Ingresar</button>
      </form>
    </div> 
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>