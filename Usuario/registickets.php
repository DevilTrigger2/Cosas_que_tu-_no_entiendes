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
        <div class="header">Nuevo Ticket</div>  
        <div class="info">
            <form action="registic.php" method="POST">
                <div class="form-group">
                    <label for="urs">Usuario:</label>
                    <input type="text" class="form-control" nombre="nombre">
                </div>
                <div class="form-group">
                    <label for="urs">Correo:</label>
                    <input type="email" class="form-control" name="correo">
                </div>
                <div class="form-group">
                    <label>Telefono:</label>
                    <input type="int" class="form-control" name="telefono">
                </div>
                <div id="nombre">
                    <label for="urs">Area:</label>
                    <select class="browser-default custom-select">
                        <?php  ?>

                        <?php
                        
                        $consulta="SELECT * FROM areas";
                        $ejecutar=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
                        
                        ?>

                        <?php foreach ($ejecutar as $opciones): ?>

                        <option value="<?php echo $opciones['nombre'] ?>"><?php echo $opciones['nombre'] ?></option>

                        <?php endforeach ?> 
                    </select>
                </div>
                <div id="nombre">
                    <label for="urs">Requerimiento:</label>
                    <select class="browser-default custom-select">
                        <?php ?>

                        <?php
                        
                        $consulta="SELECT * FROM requerimientos";
                        $ejecutar=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

                        ?>

                        <?php foreach ($ejecutar as $opciones): ?>
                            <option value="<?php echo $opciones['nombre'] ?>"><?php echo $opciones['nombre'] ?></option>
                        <?php endforeach ?>
                    </select>
                    <div>
                    <input type="submit" class="btn btn-outline-dark" value="Registrar"></a>
                    </div>
                </div>
            </form>
      </div>
    </div>
</div>

</body>
</html>