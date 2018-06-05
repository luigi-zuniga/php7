<!DOCTYPE html>
<html lang="cl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP7 - Formulario</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style type="text/css">
      body {
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #eee;
      }

      .form-signin {
      max-width: 330px;
      padding: 15px;
      margin: 0 auto;
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
      margin-bottom: 10px;
      }
      .form-signin .checkbox {
      font-weight: normal;
      }
      .form-signin .form-control {
      position: relative;
      height: auto;
      -webkit-box-sizing: border-box;
          -moz-box-sizing: border-box;
              box-sizing: border-box;
      padding: 10px;
      font-size: 16px;
      }
      .form-signin .form-control:focus {
      z-index: 2;
      }
      .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
      }
      .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
      }

      .btn-group-sm>.btn, .btn-sm
      {
        font-size:16px !important;
      }
    </style>
</head>
<body>

    <div class="container">

      <form class="form-signin" method="POST" action="register.php">
        <h2 class="form-signin-heading text-center">Welcome to Diva.</h2>
        
        <label for="inputEmail" class="sr-only">Correo</label>
        <br/>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Ingrese su correo" required autofocus>

        <label for="inputPassword" class="sr-only">Contraseña</label>
        <br/>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Ingrese su contraseña" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Recordar contraseña
          </label>
        </div>
        <button class="btn btn-sm btn-primary btn-block" type="submit">Ingresar</button>
        <?php
          session_start();
          if($_SESSION['msg'] == 'ErrorSession')
          {
            echo "<div class=''>";
            echo "<br/>";
            echo "<label for='inputMessage' class='text-center'>Email o contraseñas incorrectas.</label>";
            echo "<div>";
          }else{
            echo "";
            $_SESSION['msg'] = null;
          }
        ?>

      </form>

    </div> 
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>