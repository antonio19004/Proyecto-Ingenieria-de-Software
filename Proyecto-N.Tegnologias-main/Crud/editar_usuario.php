<?php 
include('../Php/conexion.php');
$cone = connection();

$id = $_POST['id'];
$name = $_POST['nombre'];
$tell = $_POST['telefono'];
$email = $_POST['correo'];
$pass = $_POST['contrasena'];

$Sql = "UPDATE usuarios SET nombre='$name', telefono='$tell', correo='$email', contrasena='$pass' WHERE id='$id'";
$query = mysqli_query($cone, $Sql);

if($query){
    Header("Location: ../Vistas/Usuarios.php");
};


?>