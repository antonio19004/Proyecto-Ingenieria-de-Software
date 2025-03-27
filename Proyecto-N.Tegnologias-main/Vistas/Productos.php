<?php
 include('../Php/conexion.php');

 $con = connection();

 $sql = "SELECT * FROM productos";
 $query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Gadgets Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/Styles_Productos.css">
    <style>
        /* Estilos adicionales para el footer */
        #footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #343a40;
            color: #ffffff;
        }

        body {
            padding-bottom: 70px; /* Altura del footer */
        }
    </style>
</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container">
                <a class="navbar-brand" href="Principal.php">
                    <img src="../Img/logo.png" class="logo" alt="Logo"> Gadgets Shop
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="Productos.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Clientes.php">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="Usuarios.php">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="PaginasAsociadas.php">Páginas Asociadas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-5">
        <div class="col text-right">
            <button class="btn btn-primary" data-toggle="modal" data-target="#crearProductoModal">Crear Producto</button>
        </div>
        <br>
        <h2 class="text-center mb-4">Productos Registrados</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Descrición</th>
                        <th>Enlace</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['Nombre'] ?></td>
                            <td><?= $row['Precio'] ?></td>
                            <td><?= $row['Descripcion'] ?></td>
                            <td><?= $row['Enlace'] ?></td>
                            <td>
                                <a href="../Crud/actualizar_producto.php?id=<?= $row['id'] ?>"class="btn btn-primary btn-sm">Editar</a>
                                <a href="../Crud/eliminar_producto.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-4" id="footer">
        <p>&copy; 2024 Gadgets Shop. Todos los derechos reservados.</p>
    </footer>

    <!-- Ventana modal para crear un producto -->
<div class="modal fade" id="crearProductoModal" tabindex="-1" role="dialog" aria-labelledby="crearProductoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="crearProductoModalLabel">Crear Nuevo Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../Crud/insertar_producto.php" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio del producto">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" id="descripcion" rows="2"  name="descripcion"placeholder="Descripción del producto"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="enlace">Enlace</label>
                        <input type="text" class="form-control" id="enlace" name="enlace" placeholder="Enlace del producto"></input>
                    </div>
                            <br>
                    <button class="btn btn-primary" type="submit" >Crear Producto</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
               
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
