<?php 
include('../Php/conexion.php');
$cone = connection();

$id =$_GET['id'];

$sql = "SELECT * FROM productos WHERE id='$id'";
$query = mysqli_query($cone, $sql);
$row =mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto - Gadgets Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<style>

        .container a.button-like {
            display: inline-block;
            background-color: #25b36a; /* Color de fondo del botón */
            color: #000000; /* Color del texto */
            text-decoration: none; /* Elimina el subrayado predeterminado del enlace */
            padding: 10px 20px; /* Espacio interno del botón */
            border-radius: 5px; /* Bordes redondeados */
            transition: background-color 0.3s ease; /* Efecto de transición al pasar el cursor */
            border: none; /* Sin borde */
            cursor: pointer; /* Cambia el cursor al pasar sobre el botón */
            margin: 20px 0; /* Margen superior e inferior */
            display: block; /* Convertir en bloque para ocupar toda la anchura */
            text-align: center; /* Alinear el texto al centro */
            font-family:Arial, Helvetica, sans-serif;
        }
    </style>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Editar Producto</h2>
        <form action="../Crud/editar_producto.php" method="post">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre"  value="<?= $row['Nombre'] ?>">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="text" class="form-control" id="precio" name="precio" value="<?= $row['Precio'] ?>">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" rows="2"  name="descripcion" value="<?= $row['Descripcion'] ?>"></textarea>
            </div>
            <div class="mb-3">
                <label for="enlace" class="form-label">Enlace</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="enlace" name="enlace" value="<?= $row['Enlace'] ?>">
                    
                </div>
            </div>
          
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="../Vistas/Productos.php" class="button-like">Regresar a productos</a>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
