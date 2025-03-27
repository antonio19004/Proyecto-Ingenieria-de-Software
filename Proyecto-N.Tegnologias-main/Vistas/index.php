<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../Css/Styles_Index.css"> 
    <title>Login</title>
    <style>
        /* Estilo de botón para las etiquetas <a> */
        .container a.button-like-link {
            display: inline-block;
            background-color: #007bff; /* Color de fondo del botón */
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
</head>
<body>

    <div class="container" id="container">
        <div class="form-container sign-in">
            <form>
                <h1>Login</h1>
                <span>Ingresa tu usuario y contraseña</span>
                <input type="text" name="username" placeholder="Usuario" > 
                <input type="password" name="password" placeholder="Contraseña">
                <a href="Principal.php" class="button-like-link">Sign In</a>
                <a href="Registro.php" class="button-like">Crear tu cuenta</a>
            </form>
           
        </div>
    </div>

</body>

</html>


