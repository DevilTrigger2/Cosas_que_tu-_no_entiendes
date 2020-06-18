<div>
<h1>Registro de nuevo usuario</h1>
     <form action="Registro/regis.php" method="POST">
        <input name="nombre" type="text" placeholder="ingresa nombre">
        <input name="email" type="text" placeholder="ingresar correo">
        <input name="password" type="password" placeholder="ingresar contraseña">
        <select name="status" id="">
          <option value="0" disabled>Seleccone una opcion</option>
          <option value="Admin">Admin</option>
          <option value="Docente">Docente</option>
          <option value="Usuario">Usuario</option>
        </select>
        <input type="submit" value="Submit">
      </from>
</div>