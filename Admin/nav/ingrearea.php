<?php

include 'areas.php';

$conexion=mysqli_connect('localhost','root','','estadias');

if (isset($_REQUEST['ingresar'])) {
    $nombre=$_POST['nombre'];
    $fecha=$_POST['fecha'];

    $consulta="INSERT INTO areas (nombre,fecha) VALUES('$nombre','$fecha')";
    $ejecutar=mysqli_query($conexion,$consulta);

    if ($ejecutar) {
        header("refresh:2;url=areas.php");
    }else{
        echo '<script> alert("Error al registrar") </script>';
    }
}

?>