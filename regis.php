<?php 
 require('conexion.php');

$message ='';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuarios (id,nombre,email,password)VALUES (:nombre, :email,:password)";
    $stmt = $con->prepare($sql);
    $stmt->bindParam(':nombre',$_POST['nombre']);
    $stmt->bindParam(':email',$_POST['email']);
    $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
        $message = 'Registro exitoso';
    } else {
        $message = 'Ocurrio un error';
    }
}
?>