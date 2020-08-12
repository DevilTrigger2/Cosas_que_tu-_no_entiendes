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
            <li><a href="tickets.php"><i class="fas fa-file-alt"></i>Ticks</a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Cerrar Sesion</a></li>
        </ul> 

    </div>
    <div class="main_content">
        <div class="header">Bienvenido</div>  
        <div class="info">
        <button type="button" class="btn btn-outline-dark"> 
                <a href="registickets.php"><i class="fas fa-plus"></i>Nuevo Ticket</a>
        </button>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Area</th>
                    <th>Requerimiento</th>
                    <th>Status</th>
                </tr>
            </thead>
            <?php
            $sql="SELECT * FROM tickets";
            $result=mysqli_query($conexion,$sql);

            while($mostrar=mysqli_fetch_array($result)){
            ?>

            <tbody>
                <tr>
                    <td><?php echo $mostrar['id_tickets'] ?></td>
                    <td><?php echo $mostrar['nombre'] ?></td>
                    <td><?php echo $mostrar['correo'] ?></td>
                    <td><?php echo $mostrar['telefono'] ?></td>
                    <td><?php echo $mostrar['area'] ?></td>
                    <td><?php echo $mostrar['requerimiento'] ?></td>
                    <td><?php echo $mostrar['status'] ?></td>
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