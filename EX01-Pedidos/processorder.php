<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EX01-Pedidos PHP 7</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
    <div class="col-lg-offset-2 col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="navbar">
            <a class="navbar-brand" href="#">Luigi Auto Parts</a>
        </div>
        
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Order Result</h3>
            </div>
             <div class="panel-body">
                <?php
                    $tireqty = $_POST['tireqty'];
                    $oilqty = $_POST['oilqty'];
                    $sparkqty = $_POST['sparkqty'];

                    echo "<h4> Order processed at".date('H:i, jS F')."</h4>";

                    echo "<p> Your order is as follows: </p>";
                    echo $tireqty.' Tires <br/>';
                    echo $oilqty.' bottles of oil <br/>';
                    echo $sparkqty.' spark plugs <br/>';
                ?>
             </div>
        </div>
        
        <ul class="pager">
            <li><a href="index.php">Back</a></li>
        </ul>
    </div>
    </div>
</body>
</html>