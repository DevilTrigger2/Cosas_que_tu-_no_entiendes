<?php 
   session_start();
   if (@!$_SESSION['Email_User']) {
       header("location:../index.php");
   }
   $Nombre_Usuario = $_SESSION['Nombre_User'];
   $Status_Usuario = $_SESSION['Status_user'];

if($Status_Usuario == 'Usuario'){
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset='UTF-8'>
   <meta name='viewport' contetnt="width=device-width, initial-scale=1.0">
   <title>Index</title>
</head>  
<body>

<div class="cobtainer">
  <h1>Bienvenido usuario<?php echo $Nombre_Usuario ?></h1>
  <a href="../logout.php"><h2>Cerrar Sesion</h2></a>
</div>
</body>
</html>
<?php
}
else{
    header("location:../Docente/PaginaDocente.php");
}
?>