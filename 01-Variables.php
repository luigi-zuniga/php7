<?php
    $cadena1 = "Variables en" ;
    $cadena2 = "PHP";
    $numero = 12;
    $logicos = false;

    //Enteros
    $a = 123;
    $b = -45;
    $c = 0356;

    //Float
    $d = 1.8e4;
    $e = 10.123;
    
    //Cadena
    $f = "Luigi";

    //Para concatenar se usa el punto
    echo "<h1>".$cadena1 . ' ' .  $cadena2."</h1>";
    echo $numero ."<p>Esto es un numero</p>";
    echo "<p>".$cadena1." ".$f."</p>";

    //Sentencias

    echo "<h2>Sentencias</h2>";
    if($a < 8)
    {
        echo "<p>Si.</p>";
    }
    else
    {
        echo "<p>No.</p>"; 
    }

    $opc1 = 5;
    $opc2 = 10;

    if($opc1 <= $opc2)
    {
        echo "<p>Verdadero</p>";
    }
    else
    {
        echo "<p>False</p>";
    }

    //<=> (Nave espacial)
   // 5 <=> 10 nos retorna -1
   // 15 <=> 10 nos retorna 0
    echo $opc1 <=> $opc2;

    //Operador Ternario ?

    echo "<h3>Tipos de Operadores</h3>";
    echo $opc1 == $opc2 ? "<p>es igual</p>" : "<p>no es igual</p>";

    //Fusion null ??
    //si el valor de $opc1 no existe toma el de $opc2 si no es asi toma ""
    echo $op5 ?? $opc9  ?? "<p>Esto es un valor de fusion null</p>";


    //Tipo de datos compuestos
    // - Array
    // - Object
    // - Callable
    // - Iterable


    

    //Sentencias Condicionales
    echo "sentencias isset & empty";
    //isset = comprueba si existe la variable
    //empty = compruea si la variable esta vacia

    $opc3 = 12;
    $opc4 = "";
    $opc4 = 100;

    if(isset($opc3) && empty($opc3))
    {
        echo "<p>No se Cumple</p>";
    }

    if(isset($opc4) && empty($opc4))
    {
        echo "<p>Se Cumple</p>";
    }

    if($opc3 == 100)
    {
        //la variable es entera?
        if(is_integer($opc5))
        {
            if($opc5 < 500)
            {
                echo "Todo Correcto";
            }    
        }
    }

    echo "<h3>Foreach</h3>";
    //Foreach
    $semana = array("Lunes<br/>","Martes<br/>","Miercoles<br/>","Jueves<br/>","Viernes<br/>");
    
    $contador = 1;
    foreach($semana as $nuevaSemana)
    {

        echo $contador." ".$nuevaSemana;
        $contador ++;
    }

    echo "<h3>Asocianción de Arreglo</h3>";
    //$mes1["uno"] = "Enero";
    //$mes2["dos"] = "Febrero";
    //$mes3["tres"] = "Marzo";

    $meses = array("uno" => "Enero", "dos"=>"Febrero","tres"=>"Marzo");

    echo $meses["dos"];

?>