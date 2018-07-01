<?php
    //Con esto no importa la zona horaria donde este el servidor, 
    //con esto debe respetar la zona horiria que le estoy pidiendo.

    date_default_timezone_set('America/Santiago');

    echo $_fecha = date('d/m/Y');
?>