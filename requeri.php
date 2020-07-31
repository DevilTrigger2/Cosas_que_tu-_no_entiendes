<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
     <title>login</title>

     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
     <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'><link rel="stylesheet" href="./style.css">
  </head>
  <body>
      <?php 
          
          date_default_timezone_set('America/Mexico_City');
          $fecha_actual=date("Y-m-d H:i:s");

      ?>
      <form action="ingrereque.php" method="POST" accept-charset="utf-8">
          <div class="row">
          <div class="col">
          <input type="text" name="nombre" placeholder="Ingresar requerimiento" class="form-control">
          </div>
          <br>
          <div class="col">
          <input type="datetime" name="fecha" value="<?= $fecha_actual?>" class="form-control">
          </div>
          <br>
          <div class="col">
          <input type="submit" name="ingresar" value="Registrar" class="btn btn-outline-success">
          </div>
          </div>
      </form>

      <br>

      <?php include 'requetabla.php'?>


<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script><script  src="./script.js"></script>

  </body>
</html>