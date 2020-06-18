<?php 
   session_start();
   if(@!$_SESSION['Email_User']){
      header("location:../index.php");
   }    
   $Nombre_Usuario = $_SESSION['Nombre_User'];
   $Status_Usuario = $_SESSION['Status_User'];

if ($Status_Usuario == 'Admin') {
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Index</title>
</head>
<body>
   <h1>Bienvenido admin:<?php echo $Nombre_Usuario ?></h1>
   <div><?php include("Registro/signup.php"); ?></div>
   <a href="../logout.php"><h2>Cerrar Sesion</h2></a>
</body>
</html>
<?php 
}
else{
   header("location:../Docente/PaginaDocente.php");
}
?>
