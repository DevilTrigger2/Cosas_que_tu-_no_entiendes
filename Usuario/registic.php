<?php
require("conexion.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$area = $_POST['area'];
$requerimiento = $_POST['requerimiento'];

$sqli = "INSERT INTO tickets VALUES ('','$nombre','$correo','$telefono','$area','$requerimiento')";

echo '<script>alert(Ticket Registrado)</script>';
echo "<script> location.href='tickets.php' </script>";
?>