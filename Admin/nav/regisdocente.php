

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
            <li><a href="tikets.php"><i class="fas fa-file-alt"></i>Ticks</a></li>
            <li><a href="areas.php"><i class="fas fa-layer-group"></i>Areas</a></li>
            <li><a href="requeri.php"><i class="fas fa-clipboard"></i>Requerimientos</a></li>
            <li><a href="../logout.php"><i class="fas fa-sign-out-alt"></i>Cerrar Sesion</a></li>
        </ul> 

    </div>
    <div class="main_content">
        <div class="header">Registro de Docente</div>  
        <div class="info">
            <form action="regis.php" method="POST">
            <div class="form-group">
                <label for="usr">Nombre:</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div>
                <label for="usr">Correo:</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div>
                <label for="pwd">Contraseña:</label>
                <input type="password" class="form-control" name="password">
            </div>
            <label for="usr">Tipo de Usuario</label>
            <select name="status" id="" class="browser-default custom-select">
                <option value="0"></option>
                <option value="Admin">Admin</option>
                <option value="Docente">Docente</option>
                <option value="Usuario">Usuario</option>
            </select>
            <input type="submit" class="btn btn-outline-dark" value="Registrar"></a>
        </form>
      </div>
    </div>
</div>

</body>
</html>