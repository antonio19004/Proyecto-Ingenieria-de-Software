<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../Css/Styles_Registro.css">
    <title>Registro de Nueva Cuenta</title>
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

    <div class="container" id="container">
        <div class="form-container">
            <form action="../Crud/insertar_usuario.php" method="POST">
                <h1>Crear Cuenta</h1>
                <span>Completa el siguiente formulario para registrarte</span>
                <div class="input-container">
                    <input type="text" class="form-control rounded" name="nombre" placeholder="Nombre completo">
                </div>
                <div class="input-container">
                    <input type="text" class="form-control rounded" name="telefono" placeholder="Número telefónico">
                </div>
                <div class="input-container">
                    <input type="text" class="form-control rounded" name="correo" placeholder="Correo electrónico">
                </div>
                <div class="input-container">
                    <input type="password" class="form-control rounded" name="contrasena" placeholder="Contraseña">
                </div>
                <button type="submit" class="btn btn-primary ">Crear cuenta</button>
                <a href="index.php" class="button-like">Regresar al inicio</a>
            </form>
        </div>
    </div>

</body>

</html>
