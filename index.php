<?php 
session_start();

require 'conexion.php';

if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id,correo, password FROM usuarios WHERE id = :id');
    $records->binParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);


    $user = null;

    if (count($results) > 0) {
        $user = $results;
    }
}
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Bienvenido</title>     
   </head>
   <body>
      <?php if(!empty($user)): ?>
         <br> <?$user['nombre']?>

         <a href="logout.php">
           logout
         </a>
      <?php else: ?>
         <h1>login or sigbup</h1>

         <a href="login.php">Login</a>
         <a href="signup.php">Signup</a>
      <?php endif: ?>

   </body>
</html>