<?php 
   session_start();
   if(@!$_SESSION['Email_User']){
      header("location:../index.php");
   }    
   $Nombre_Usuario = $_SESSION['Nombre_User'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docente</title>
</head>
<body>
    <h1>Bienvenido Docente: <?php  echo $Nombre_Usuario?></h1>
    <a href="../logout.php"><h2>Cerrar Sesion</h2></a>
</body>
</html>