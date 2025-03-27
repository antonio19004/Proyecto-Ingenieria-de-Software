<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Páginas Asociadas - Gadgets Shop</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Css/Styles_PaginasAsociadas.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="Principal.php">
                <img src="../Img/logo.png" class="logo" alt="Logo"> Gadgets Shop
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link" href="Usuarios.php">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="PaginasAsociadas.php">Páginas Asociadas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="banner-content">
                    <h1>Páginas Asociadas</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Botón para agregar nueva empresa -->
<div class="container mt-4">
    <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#agregarEmpresaModal">Agregar Nueva Empresa</button>
</div>

<section id="empresas-asociadas">
    <div class="container">
        <div class="row">
            <!-- Las tarjetas se generarán aquí -->
        </div>
    </div>
</section>



<!-- Ventana modal para agregar una nueva empresa -->
<div class="modal fade" id="agregarEmpresaModal" tabindex="-1" role="dialog" aria-labelledby="agregarEmpresaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="agregarEmpresaModalLabel">Agregar Nueva Empresa Asociada</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="nuevaEmpresaForm">
                    <div class="form-group">
                        <label for="nombreEmpresa">Nombre de la Empresa</label>
                        <input type="text" class="form-control" id="nombreEmpresa" placeholder="Nombre de la empresa">
                    </div>
                    <div class="form-group">
                        <label for="imagenEmpresa">Imagen de la Empresa</label>
                        <input type="file" class="form-control-file" id="imagenEmpresa">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="agregarNuevaEmpresa()">Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- Ventana modal para editar una empresa -->
<div class="modal fade" id="editarEmpresaModal" tabindex="-1" role="dialog" aria-labelledby="editarEmpresaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarEmpresaModalLabel">Editar Empresa Asociada</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editarEmpresaForm">
                    <div class="form-group">
                        <label for="nombreEmpresaEdit">Nombre de la Empresa</label>
                        <input type="text" class="form-control" id="nombreEmpresaEdit" placeholder="Nombre de la empresa">
                    </div>
                    <div class="form-group">
                        <label for="imagenEmpresaEdit">Imagen de la Empresa</label>
                        <input type="file" class="form-control-file" id="imagenEmpresaEdit">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="guardarCambiosEmpresa()">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Función para agregar una nueva empresa
    function agregarNuevaEmpresa() {
        var nombreEmpresa = document.getElementById('nombreEmpresa').value;
        var imagenEmpresa = document.getElementById('imagenEmpresa').files[0];
        
        var reader = new FileReader();
        reader.onload = function(e) {
            var nuevaTarjeta = `
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="${e.target.result}" class="card-img-top" alt="${nombreEmpresa}">
                        <div class="card-body">
                            <h5 class="card-title">${nombreEmpresa}</h5>
                            <button class="btn btn-danger btn-sm" onclick="eliminarTarjeta(this)">Eliminar</button>
                        </div>
                    </div>
                </div>
            `;
            var contenedorTarjetas = document.getElementById('empresas-asociadas').querySelector('.row');
            contenedorTarjetas.innerHTML += nuevaTarjeta;
            
            // Guardar la tarjeta en el almacenamiento local
            guardarTarjetaEnLocalStorage(nuevaTarjeta);
        }
        reader.readAsDataURL(imagenEmpresa);
        
        $('#agregarEmpresaModal').modal('hide');
    }

    // Función para guardar una tarjeta en el almacenamiento local
    function guardarTarjetaEnLocalStorage(nuevaTarjeta) {
        var tarjetasGuardadas = JSON.parse(localStorage.getItem('tarjetas')) || [];
        tarjetasGuardadas.push(nuevaTarjeta);
        localStorage.setItem('tarjetas', JSON.stringify(tarjetasGuardadas));
    }

    // Función para eliminar una tarjeta
    function eliminarTarjeta(element) {
        var tarjeta = element.closest('.col-md-4.mb-4');
        tarjeta.remove();
        // Eliminar la tarjeta del almacenamiento local
        actualizarLocalStorage();
    }

    // Función para editar una tarjeta
    function editarTarjeta(element) {
        var tarjeta = element.closest('.col-md-4.mb-4');
        var nombre = tarjeta.querySelector('.card-title').textContent;
        var imagen = tarjeta.querySelector('.card-img-top').getAttribute('src');
        // Mostrar la ventana modal de edición con los datos de la tarjeta
        $('#editarEmpresaModal').modal('show');
        document.getElementById('nombreEmpresaEdit').value = nombre;
        // Aquí podrías prellenar otros campos de edición si es necesario
        // Guardar la referencia de la tarjeta que se está editando
        localStorage.setItem('tarjetaEditando', tarjeta.outerHTML);
    }

    // Función para guardar los cambios de una tarjeta editada
    function guardarCambiosEmpresa() {
        var nombreEmpresa = document.getElementById('nombreEmpresaEdit').value;
        var imagenEmpresa = document.getElementById('imagenEmpresaEdit').files[0];
        
        var reader = new FileReader();
        reader.onload = function(e) {
            var tarjetaEditando = localStorage.getItem('tarjetaEditando');
            // Reemplazar los datos de la tarjeta editada
            tarjetaEditando = tarjetaEditando.replace(/(<h5 class="card-title">)(.*?)(<\/h5>)/g, '$1' + nombreEmpresa + '$3');
            tarjetaEditando = tarjetaEditando.replace(/(<img src=")(.*?)(class="card-img-top")(.*?)(alt=")(.*?)(" \/>)/g, '$1' + e.target.result + '$3$4$5' + nombreEmpresa + '$7');
            // Actualizar la tarjeta en el DOM
            var tarjeta = document.createElement('div');
            tarjeta.innerHTML = tarjetaEditando;
            var contenedorTarjetas = document.getElementById('empresas-asociadas').querySelector('.row');
            contenedorTarjetas.replaceChild(tarjeta.firstChild, tarjeta.closest('.col-md-4.mb-4'));
            // Actualizar el almacenamiento local
            actualizarLocalStorage();
        }
        reader.readAsDataURL(imagenEmpresa);
        
        $('#editarEmpresaModal').modal('hide');
    }

    // Función para actualizar el almacenamiento local después de eliminar o editar una tarjeta
    function actualizarLocalStorage() {
        var tarjetas = document.querySelectorAll('.col-md-4.mb-4');
        var tarjetasGuardadas = [];
        tarjetas.forEach(function(tarjeta) {
            tarjetasGuardadas.push(tarjeta.outerHTML);
        });
        localStorage.setItem('tarjetas', JSON.stringify(tarjetasGuardadas));
    }

    // Función para cargar las tarjetas guardadas del almacenamiento local al cargar la página
    function cargarTarjetasDesdeLocalStorage() {
        var tarjetasGuardadas = JSON.parse(localStorage.getItem('tarjetas')) || [];
        var contenedorTarjetas = document.getElementById('empresas-asociadas').querySelector('.row');
        contenedorTarjetas.innerHTML = tarjetasGuardadas.join('');
    }

    // Cargar las tarjetas guardadas al cargar la página
    cargarTarjetasDesdeLocalStorage();
</script>
<br>
<br>
<footer class="bg-dark text-white text-center py-4" id="footer">
    <p>&copy; 2024 Gadgets Shop. Todos los derechos reservados.</p>
</footer>
</body>
</html>
