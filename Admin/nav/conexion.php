<?php 
$con=mysqli_connect("localhost","root", "","estadias");

if(mysqli_connect_errno())
{
    echo "Error al conectarse con MYSQL:" . mysqli_connect_errno();
}

?>