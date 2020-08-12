<?php $conexion=mysqli_connect('localhost','root','','estadias'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
     <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'><link rel="stylesheet" href="./style.css">
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Help Ticks</h2>
        <ul>
            <li><a href="index.php"><i class="fas fa-home"></i>Inicio</a></li>
            <li><a href="perfil.php"><i class="fas fa-user"></i>Perfil</a></li>
            <li><a href="docentes.php"><i class="fas fa-address-card"></i>Docentes</a></li>
            <li><a href="usuarios.php"><i class="fas fa-user-friends"></i>Usuarios</a></li>
            <li><a href="tickets.php"><i class="fas fa-file-alt"></i>Ticks</a></li>
            <li><a href="areas.php"><i class="fas fa-layer-group"></i>Areas</a></li>
            <li><a href="requeri.php"><i class="fas fa-clipboard"></i>Requerimientos</a></li>
            <li><a href="../logout.php"><i class="fas fa-sign-out-alt"></i>Cerrar Sesion</a></li>
        </ul> 

    </div>
    <div class="main_content">
        <div class="header">Areas</div>  
        <div class="info">
            <?php 
          date_default_timezone_set('America/Mexico_City');
          $fecha_actual=date("Y-m-d H:i:s");
            ?>
            <form action="ingrearea.php" method="POST" accept-charset="utf-8">
                <div class="row">
                    <div class="col">
                        <input type="text" name="nombre" class="form-control" placeholder="Ingresar Area">
                    </div>
                    <div class="col">
                        <input type="date" name="fecha" value="<?php $fecha_actual ?>" class="form-control">
                    </div>
                    <div>
                        <input type="submit" name="ingresar" value="Registrar" class="btn btn-outline-secondary"> 
                    </div>
                </div>
            </form>
            <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Fecha</th>
                    
                </tr>
            </thead>
            <?php
            $sql="SELECT * FROM areas";
            $result=mysqli_query($conexion,$sql);

            while($mostrar=mysqli_fetch_array($result)){
            ?>

            <tbody>
                <tr>
                    <td><?php echo $mostrar['id_area'] ?></td>
                    <td><?php echo $mostrar['nombre'] ?></td>
                    <td><?php echo $mostrar['fecha'] ?></td>
                </tr>
            </tbody>
            <?php
            } 
            ?>
            </table>
      </div>
    </div>
</div>

</body>
</html>