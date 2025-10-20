<?php

    require '../consfigDB.php';

    $conexion = new mysqli(SERVIDROR,USUARIO,PASWORD,BBDD);

    $sql = "SELECT * FROM paises";

    $resultado = $conexion->query($sql);

    foreach ($resultado->fetch_array() as $key => $value) { // se debe usar el fetch_assoc() porque saca el arry asociativo
        echo $value.'<br>';
        echo $key.'<br>';
    }

?>