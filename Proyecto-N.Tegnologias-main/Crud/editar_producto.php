<?php 
include('../Php/conexion.php');
$cone = connection();

$id = $_POST['id'];
$name = $_POST['nombre'];
$precio = $_POST['precio'];
$descrip = $_POST['descripcion'];
$enlace = $_POST['enlace'];

$Sql = "UPDATE productos SET nombre='$name', precio='$precio', descripcion='$descrip', enlace='$enlace' WHERE id='$id'";
$query = mysqli_query($cone, $Sql);

if($query){
    Header("Location: ../Vistas/Productos.php");
};


?>