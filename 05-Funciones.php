<?php
    
    //Funcion Normal de PHP
    function myFunction()
    {   
        $_text = array('Esto es un nombre');
        return $_text;
    }

    //Funciones escalares
    function myFunctionTwo($_valorA,$_valorB,$_opcion)
    {
        switch($_opcion)
        {
            case 'suma':
                return $_valorA + $_valorB;
            break;
            case 'resta':
                return $_valorA - $_valorB;
            break;
            case 'multiplicacion':
                return $_valorA * $_valorB;
            break;
            case 'division':
                return $_valorA / $_valorB;
            break;
            default:
                echo "Error";
            break;

        } 
    }

      print_r (myFunction());
      echo myFunction(0);
      
      echo "<br/>";

      echo "EL valor es: ";
      echo myFunctionTwo(4,8,'multiplicacion');
?>