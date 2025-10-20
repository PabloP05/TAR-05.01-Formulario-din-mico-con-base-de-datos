<?php
    require '../consfigDB.php';


    /* print_r($_POST); */


    $conexion = new mysqli(SERVIDROR,USUARIO,PASWORD,BBDD);



            $sql = "INSERT INTO usuarios(nombre,clave,pais) VALUES ('".$_POST['usuario']."','".$_POST['password']."','".$_POST['paises']."')";


    if(!empty($_POST['usuario']) && !empty($_POST['password'])){
        if(isset($_POST['paises'])){
            $conexion->query($sql);
        }else{
            echo '<a href="formulario.php"><h1>Selecciona un pais</h1>';
        }
    }else{
        echo '<a href="formulario.php"><h1>Introduce bien la usuario y clave</h1>';
    }

  

            if($conexion->affected_rows>0){
                echo 'filas añadidas con exito';
            }

?>