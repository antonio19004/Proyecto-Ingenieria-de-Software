<?php
 include('../Php/conexion.php');

 $con = connection();

 $sql = "SELECT * FROM usuarios";
 $query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios - Gadgets Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/Styles_usuarios.css">
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
        <h2 class="text-center mb-4">Usuarios Registrados</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Contraseña</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_array($query)): ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['Nombre'] ?></td>
                            <td><?= $row['Telefono'] ?></td>
                            <td><?= $row['Correo'] ?></td>
                            <td><?= $row['Contrasena'] ?></td>
                            <td>
                                <a href="../Crud/actualizar_usuario.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">Editar</a>
                                <a href="../Crud/eliminar_usuario.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
