<?php
require("conexion.php");

session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];

    $login = $con->query("SELECT * FROM usuarios WHERE email = '$email';");
    if ($login != null ) {
        if($autenticacion = $login->fetch_array()){
            $tiket = $autenticacion['email'];
    
            if($password == $autenticacion['password']){
                $_SESSION['ID_User'] = $autenticacion['id'];
                $_SESSION['Nombre_User'] = $autenticacion['nombre'];
                $_SESSION['Email_User'] = $autenticacion['email'];
                $_SESSION['Passsword_User'] = $autenticacion['password'];
                $_SESSION['Status_User'] = $autenticacion['status'];
    
                    if($autenticacion['status'] == "Admin"){
                        echo "<script> location.href='Admin/PaginaAdmin.php'</script>";
                    }else{
                        if ($autenticacion['status'] == 'Docente') {
                            echo "<script> location.href='Docente/PaginaDocente.php' </script>";
                        }else{
                            if ($autenticacion['status'] == 'Usuario') {
                                echo "<script> location.href='Usuario/PaginaUsuario.php' </script>";                    
                            }else{
                                echo '<script>alert("Password Incorrecto")</script>';
                                echo "<script> location.href='index.php'</script>";  
                            }
                        }
                    }
            }else{
                echo '<script>alert("Password Incorrecto")</script>';
                echo "<script> location.href='index.php'</script>";  
            }
    }
    else{
            echo '<script>alert("Email incorrecto")</script>';
            echo "<script> location.href='index.php'</script>";  
        }
    }

?> 