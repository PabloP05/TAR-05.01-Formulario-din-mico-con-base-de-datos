<?php

    require '../consfigDB.php';

    $conexion = new mysqli(SERVIDROR,USUARIO,PASWORD,BBDD);

    //INSERCION MASIVA DE DATOS
    
    $array =['España',
            'Francia',
            'Alemania',
            'Italia',
            'Portugal',
            'Reino Unido',
            'Estados Unidos',
            'Canadá',
            'México',
            'Argentina'];



    for($i=0;$i<sizeof($array);$i++){
         $sql=("INSERT INTO paises(pais) VALUES ('".$array[$i]."')");
         //echo $sql."<br>";

        $conexion->query($sql);
        if($conexion->affected_rows>0)
            echo 'fila insertada <br>'; 

    }
    
    $conexion->close();

?>