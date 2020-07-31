<?php

$conexion=mysqli_connect('localhost','root','','estadias');


?>
<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">

     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
     <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'><link rel="stylesheet" href="./style.css">

  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col">
              <table class="table table-striped table-bordered">

              <thead>
          <tr class="bg-success">
              <td><h4>ID</h4></td>
              <td><h4>Nombre</h4></td>
              <td><h4>Fecha</h4></td>
              <td><h4></h4></td>
          </tr>
              </thead>
          <?php
          $sql="SELECT * FROM requerimientos
          ";
          $result=mysqli_query($conexion,$sql);
          
          while($mostrar=mysqli_fetch_array($result)){

          
          ?>
          <tbody>
          <tr class="bg-success">
              <td><h5><?php echo $mostrar['id_requeri'] ?></h5></td>
              <td><h5><?php echo $mostrar['nombre'] ?></h5></td>
              <td><h5><?php echo $mostrar['fecha'] ?></h5></td>
              <td><input type="submit" value="Borrar" class="btn btn-outline-dark"></td>
          </tr>
          </tbody>
          <?php
          }
          ?>
      </table>
              </div>
          </div>
      </div>


      <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script><script  src="./script.js"></script>
  
  </body>
</html>
