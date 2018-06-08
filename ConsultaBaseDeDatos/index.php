<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP7 - Consulta a Base de datos</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
    <?php
      include("nav.php");
      echo " <div class='container'>";
      echo "<div class='row'>";
      echo "<div class='col-lg-5 col-md-5 col-sm-12 col-xs-12'>";
      include("form.php");
      echo "</div>";
      echo "<div class='col-lg-7 col-md-7 col-sm-12 col-xs-12'>";
      include("consulta.php");
      echo "</div>";
      echo "</div>";  
      include("footer.php");
    ?>
    </div>
    
<div class="modal fade" id="myEditModal" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">     
    
      <?php
        include("edit.php");
      ?>
    
    </div>
  </div>
</div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/table-search.js"></script>
</body>
</html>