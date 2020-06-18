<?php
require("conexion.php");

$Nombre_User = $_POST['nombre'];
$Email_User = $_POST['email'];
$Password_User = $_POST['password'];
$Status_User = $_POST['status'];


$registro = $con->query("INSERT INTO usuarios VALUES ('','$Nombre_User','$Email_User','$Password_User','$Status_User');");
if ($registro != null) {
    echo '<script>alert("registro exitoso de '.$Nombre_User.' | Nivel '.$Status_User.'")</script>';
    echo "<script> location.href='../PaginaAdmin.php'</script>";  
} else {
    echo '<script>alert("Email incorrecto")</script>';
    echo "<script> location.href='../PaginaAdmin.php'</script>";  
}


?>