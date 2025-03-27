<?php 
include('../Php/conexion.php');
$cone = connection();

$id =$_GET['id'];

$sql = "DELETE FROM usuarios WHERE id='$id'";
$query = mysqli_query($cone, $sql);
if($query){
    Header("Location: ../Vistas/Usuarios.php");
}
?>

