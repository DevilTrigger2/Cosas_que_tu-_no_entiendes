<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'><link rel="stylesheet" href="./style.css">


<div>
<h3>Registro de nuevo usuario</h3>
   <div class="container">
     <div class="row" class>
     <form action="Registro/regis.php" method="POST">
        <input name="nombre" type="text" placeholder="ingresa nombre">
        <input name="email" type="text" placeholder="ingresar correo">
        <input name="password" type="password" placeholder="ingresar contraseña">
        <select name="status" id="" class="browser-default">
          <option value="0" disabled selected>Seleccone una opcion</option>
          <option value="Admin">Admin</option>
          <option value="Docente">Docente</option>
          <option value="Usuario">Usuario</option>
        </select>
        <a class="waves-effect waves-light btn"><input type="submit" value="Rehistrado"></a>
      </from>
    </div>
   </div>   
</div>


<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script><script  src="./script.js"></script>