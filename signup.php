<?php 
  require('regis.php'); 
?>

<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
  </head>

  <body>

     <?php if(!empty($message)): ?>
       <p> <?= $message ?></p>
     <?php endif; ?>

     <h1>Registro de nuevo usuario</h1>
     <a href="login.php">Login</a>
    <a href="signup.php">Signup</a>
     <form action="signup.php" method="POST">
        <input name="nombre" type="text" placeholder="ingresa nombre">
        <input name="email" type="text" placeholder="ingresar correo">
        <input name="password" type="password" placeholder="ingresar contraseña">
        <input type="submit" value="Submit">
     </form>
  </body>
</html>