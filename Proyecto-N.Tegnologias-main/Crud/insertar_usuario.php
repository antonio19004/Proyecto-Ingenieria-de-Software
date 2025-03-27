<?php 
include('../Php/conexion.php');
$cone = connection();

$id = null;
$name = $_POST['nombre'];
$tell = $_POST['telefono'];
$email = $_POST['correo'];
$pass = $_POST['contrasena'];

$Sql = "INSERT INTO usuarios VALUES('$id','$name','$tell','$email','$pass')";
$query = mysqli_query($cone, $Sql);

if($query){
    Header("Location: ../Vistas/index.php");
};

?>