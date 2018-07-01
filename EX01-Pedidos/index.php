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
    <div class="row">
    <div class="col-lg-offset-3 col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <form action="processorder.php" method="POST" role="form">
            <legend>Form item</legend>
            <div class="form-group">
                <label for="" class="control-label">Tires</label>
                <input type="number" class="form-control" id="" min="0" max="100" placeholder="insert value" name="tireqty" required>
                <br/>
                <label for="" class="control-label">Oil</label>
                <input type="number" class="form-control" id="" min="0" max="100" placeholder="insert value" name="oilqty" required>
                <br/>
                <label for="" class="control-label">Spark Plugs</label>
                <input type="number" class="form-control" id="" min="0" max="100" placeholder="insert value" name="sparkqty" required>
                <br/>
            </div>
            <button type="submit" class="btn btn-primary">Submit Order</button>
        </form>
        </div>
        </div>      
    </div>
</body>
</html>