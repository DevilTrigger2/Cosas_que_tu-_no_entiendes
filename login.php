<?php
  require("LogicaLogin.php");
?>

<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
     <title>login</title>
  </head>
  <body>
  <?php if(!empty($message)): ?>
    <p> <?= $message ?>
  <?php endif; ?>

  <h1>login<h1>}
  <a href="login.php">Login</a>
         <a href="signup.php">Signup</a>

<form action="login.php" method="POST">
    <input name="email" type="text" placeholder="ingresar correo">
    <input name="password" type="password" placeholder="ingresar contraseña">
    <input type="submit" value="Submit">
</form>  
  </body>
</html>