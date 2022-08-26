<?php
    $conexion = mysqli_connect("sql311.epizy.com","epiz_32424567", "zChNlbkdFMM", "epiz_32424567_USERS"); //"hostname", "username", "contraseña de acceso a la db", "Nombre de la db"

    if(!$conexion){
        echo 'Error al conectar con la base de datos.';
    }else{
        echo 'Conexión exitosa!';
    }
?>