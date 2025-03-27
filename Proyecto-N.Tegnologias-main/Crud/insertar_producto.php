<?php 
include('../Php/conexion.php');
$cone = connection();

$id = null;
$name = $_POST['nombre'];
$precio = $_POST['precio'];
$descrip = $_POST['descripcion'];
$enlace = $_POST['enlace'];

$Sql = "INSERT INTO productos VALUES('$id','$name','$precio','$descrip','$enlace')";
$query = mysqli_query($cone, $Sql);

if($query){
    Header("Location: ../Vistas/Productos.php");
};

?>