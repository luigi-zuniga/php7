<!DOCTYPE html>
<html lang="cl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP7 - Menu</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style type="text/css">
                /*
        * Globals
        */

        /* Links */
        a,
        a:focus,
        a:hover {
        color: #fff;
        }

        /* Custom default button */
        .btn-default,
        .btn-default:hover,
        .btn-default:focus {
        color: #333;
        text-shadow: none; /* Prevent inheritance from `body` */
        background-color: #fff;
        border: 1px solid #fff;
        }


        /*
        * Base structure
        */

        html,
        body {
        height: 100%;
        background-color: #333;
        }
        body {
        color: #fff;
        text-align: center;
        text-shadow: 0 1px 3px rgba(0,0,0,.5);
        }

        /* Extra markup and styles for table-esque vertical and horizontal centering */
        .site-wrapper {
        display: table;
        width: 100%;
        height: 100%; /* For at least Firefox */
        min-height: 100%;
        -webkit-box-shadow: inset 0 0 100px rgba(0,0,0,.5);
                box-shadow: inset 0 0 100px rgba(0,0,0,.5);
        }
        .site-wrapper-inner {
        display: table-cell;
        vertical-align: top;
        }
        .cover-container {
        margin-right: auto;
        margin-left: auto;
        }

        /* Padding for spacing */
        .inner {
        padding: 30px;
        }


        /*
        * Header
        */
        .masthead-brand {
        margin-top: 10px;
        margin-bottom: 10px;
        }

        .masthead-nav > li {
        display: inline-block;
        }
        .masthead-nav > li + li {
        margin-left: 20px;
        }
        .masthead-nav > li > a {
        padding-right: 0;
        padding-left: 0;
        font-size: 16px;
        font-weight: bold;
        color: #fff; /* IE8 proofing */
        color: rgba(255,255,255,.75);
        border-bottom: 2px solid transparent;
        }
        .masthead-nav > li > a:hover,
        .masthead-nav > li > a:focus {
        background-color: transparent;
        border-bottom-color: #a9a9a9;
        border-bottom-color: rgba(255,255,255,.25);
        }
        .masthead-nav > .active > a,
        .masthead-nav > .active > a:hover,
        .masthead-nav > .active > a:focus {
        color: #fff;
        border-bottom-color: #fff;
        }

        @media (min-width: 768px) {
        .masthead-brand {
            float: left;
        }
        .masthead-nav {
            float: right;
        }
        }


        /*
        * Cover
        */

        .cover {
        padding: 0 20px;
        }
        .cover .btn-lg {
        padding: 10px 20px;
        font-weight: bold;
        }


        /*
        * Footer
        */

        .mastfoot {
        color: #999; /* IE8 proofing */
        color: rgba(255,255,255,.5);
        }


        /*
        * Affix and center
        */

        @media (min-width: 768px) {
        /* Pull out the header and footer */
        .masthead {
            position: fixed;
            top: 0;
        }
        .mastfoot {
            position: fixed;
            bottom: 0;
        }
        /* Start the vertical centering */
        .site-wrapper-inner {
            vertical-align: middle;
        }
        /* Handle the widths */
        .masthead,
        .mastfoot,
        .cover-container {
            width: 100%; /* Must be percentage or pixels for horizontal alignment */
        }
        }

        @media (min-width: 992px) {
        .masthead,
        .mastfoot,
        .cover-container {
            width: 700px;
        }
        }
    </style>
    </head>
    <body>
    <div class="site-wrapper">

<div class="site-wrapper-inner">

  <div class="cover-container">

    <div class="masthead clearfix">
      <div class="inner">
        <h3 class="masthead-brand">DIVA</h3>
        <nav>
          <ul class="nav masthead-nav">
            <!--<li class="active"><a href="#">Inicio</a></li>-->
            <li><a href="loginout.php">Salir</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <div class="inner cover">
        <?php
            session_start();
            echo "<h1 class='cover-heading'>Bienvenido ".$_SESSION['email']."</h1>";     
            echo "<p class='lead'>Presione sobre el boton que genera enlaces aleatorios.</p>";
            echo "<p class='lead'>";
            echo "<a href='' id='enlace_aleatorio' class='btn btn-lg btn-default'>Vamos</a>";
            echo "</p>"; 
        ?>

    </div>

    <div class="mastfoot">
      <div class="inner">
        <p>Todos los derechos <a href="http://getbootstrap.com">Bootstrap</a>, por <a href="@">Luigi</a>.</p>
      </div>
    </div>

  </div>

</div>

</div>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript"> 
        var urls = ['https://youtube.com','https://outlook.com','https://google.cl','http://getbootstrap.com/docs/3.3/getting-started/#template'];
        var url = urls[Math.floor(Math.random()*urls.length)];
        document.getElementById('enlace_aleatorio').href = url;
    </script>
</body>
</html>