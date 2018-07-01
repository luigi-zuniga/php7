<?php
    $_var = "Luis Alberto Zuñiga";
    $_fecha = "04-07-1988";
    $_mes = "junio julio agosto";
    $_cabecera ="Datos Personales-Telefono-Direccion";

    $_datos = explode(" ",$_var);
    $_nac = explode("-",$_fecha);
    $_mes_nac = explode(" ",$_mes);
    $_cabecera = explode("-",$_cabecera);
    
    echo "<pre>";
        var_dump($_cabecera);
    echo "</pre>";

    echo "<pre>";
        print_r($_datos);
    echo "</pre>";

    echo "<pre>";
        print_r($_nac);
    echo "</pre>";

    echo "<pre>";
        print_r($_mes_nac);
    echo "</pre>";


    echo "<h1>".$_cabecera[0]."</h1>";
    echo "Segundo nombre: ".$_datos[1]."<br/>";
    echo "Mes de nacimiento: ".$_nac[1]." ";
    echo "de ".$_mes_nac[1];

    //explode es una funcion que convierte un string a un arreglo
    //dependiendo de la contruccion pedida
    //es bastante util para trabajar con ajax, ya que se trabaja como un arreglo
    //si recibimos una cadena muy larga , la podemos recibir con "explode"
    //convertirla en un arrglo pasarlo an un for y recoger dato por dato.


?>