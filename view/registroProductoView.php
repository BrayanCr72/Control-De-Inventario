<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <title>Registro de Producto</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="../asset/css/all.min.css" rel="stylesheet">

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Agregar evento de input al campo de búsqueda
        document.getElementById("filtroGlobal").addEventListener("input", aplicarFiltro);

        function aplicarFiltro() {
            var filtro = obtenerValorFiltro();
            var table = document.querySelector("table");
            var tr = table.getElementsByTagName("tr");

            for (var i = 1; i < tr.length; i++) {
                var mostrarFila = false;
                for (var j = 0; j < tr[i].getElementsByTagName("th").length; j++) {
                    var th = tr[i].getElementsByTagName("th")[j];
                    if (th) {
                        var txtValue = th.textContent || th.innerText;
                        if (txtValue.toUpperCase().includes(filtro)) {
                            mostrarFila = true;
                            break; // Si se encuentra una coincidencia, no es necesario seguir verificando
                        }
                    }
                }
                tr[i].style.display = mostrarFila ? "" : "none";
            }
        }

        function obtenerValorFiltro() {
            return document.getElementById("filtroGlobal").value.toUpperCase();
        }
    });
    </script>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    // Agregar evento de input al campo de búsqueda
    document.querySelector("input[type='search']").addEventListener("input", aplicarFiltro);

    function aplicarFiltro() {
        var filtro = obtenerValorFiltro();
        var table = document.querySelector("table");
        var tr = table.getElementsByTagName("tr");

        for (var i = 1; i < tr.length; i++) {
            var mostrarFila = false;
            for (var j = 0; j < tr[i].getElementsByTagName("th").length; j++) {
                var th = tr[i].getElementsByTagName("th")[j];
                if (th) {
                    var txtValue = th.textContent || th.innerText;
                    if (txtValue.toUpperCase().includes(filtro)) {
                        mostrarFila = true;
                        break; // Si se encuentra una coincidencia, no es necesario seguir verificando
                    }
                }
            }
            tr[i].style.display = mostrarFila ? "" : "none";
        }
    }

    function obtenerValorFiltro() {
        return document.querySelector("input[type='search']").value.toUpperCase();
    }
});
</script>

    <?php
session_start();

include_once '../business/registroProductoBusiness.php';
$productoBusiness = new registroProductoBusiness();
$allTBProducto = $productoBusiness->getAllTBProducto();
?>
</head>

<body>

    <?php
if (isset($_SESSION['resultadoRegistro'])) {
?>
    <script>
    Swal.fire({
        text: '<?php echo $_SESSION['resultadoRegistro']; ?>',
        showConfirmButton: false,
        timer: 2500,
        customClass: {
            content: 'custom-swal-content'
        },
    })
    </script>
    <?php
    unset($_SESSION['valida']);
}?>

    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h2 class="text-center">Registro de Producto</h2>

            <a class="navbar-brand" href="./principalView.php"><i class="fa-solid fa-right-from-bracket"></i></i> Cerrar
                Sesion</a>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><i class="fa-regular fa-folder-open"></i></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-start flex-grow-1 ps-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./principalView.php">Inico</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Reportes</a>
                        </li>

                        <!-- ------------------------------------------registros------------------------------------------------------>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Registrar
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./registroProductoView.php">Registrar Producto</a>
                                </li>

                            </ul>
                        </li>
                        <!-- ------------------------------------------registros------------------------------------------------------>

                        <!-- ------------------------------------------Grupos------------------------------------------------------>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Banana2000
                            </a>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="#">BANA1</a> </li>
                                <li><a class="dropdown-item" href="#">BANA2</a> </li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Esfuerzo
                            </a>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="#">ESFUERZO</a> </li>
                                <li><a class="dropdown-item" href="#">BRISTOL</a> </li>
                                <li><a class="dropdown-item" href="#">VESTA</a> </li>
                                <li><a class="dropdown-item" href="#">AGROTUBERCULOS</a> </li>
                                <li><a class="dropdown-item" href="#">ESFUERZO #2</a> </li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Aproveco
                            </a>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="#">PROBANA</a></li>
                                <li><a class="dropdown-item" href="#">APROVECO 1</a></li>
                                <li><a class="dropdown-item" href="#">APROVECO 2</a></li>
                                <li><a class="dropdown-item" href="#">ZENT</a></li>
                                <li><a class="dropdown-item" href="#">COMENDADOR</a></li>
                                <li><a class="dropdown-item" href="#">MONTEVERDE</a></li>
                                <li><a class="dropdown-item" href="#">AGROPACUARE</a></li>
                                <li><a class="dropdown-item" href="#">VENECIA</a></li>
                                <li><a class="dropdown-item" href="#">DELEYTE</a></li>
                                <li><a class="dropdown-item" href="#">SAHARA</a></li>
                                <li><a class="dropdown-item" href="#">CALARCA</a></li>
                                <li><a class="dropdown-item" href="#">BALTIMORE</a></li>
                                <li><a class="dropdown-item" href="#">POTOSI</a></li>
                                <li><a class="dropdown-item" href="#">ACT</a></li>
                                x
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Verde Azul
                            </a>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="#">V.Azul 1</a> </li>
                                <li><a class="dropdown-item" href="#">V.Azul 2</a> </li>


                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Jaime Viana
                            </a>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="#">La Esperanza</a> </li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Sura
                            </a>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="#">Balatana</a> </li>
                                <li><a class="dropdown-item" href="#">Fama-TMF</a> </li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Agrifruta
                            </a>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="#">Agrifruta 1</a> </li>
                                <li><a class="dropdown-item" href="#">Agrifruta 2</a> </li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Cariari Siquirres
                            </a>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="#">Ban.Cariari</a> </li>
                                <li><a class="dropdown-item" href="#">Ban.Siquirres</a> </li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Bodega
                            </a>
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="#">Bodega oficina</a> </li>


                            </ul>
                        </li>

                        <!-- ------------------------------------------Grupos------------------------------------------------------>
                    </ul>

                </div>

            </div>
        </div>

    </nav>

    <br><br><br>

    <div class="container py-3">

        <div class="row justify-content-start">
            <div class="col-auto">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">

            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoRegistroProducto"><i
                        class="fa-solid fa-circle-plus"></i> Nuevo Registro</a>
            </div>
        </div>

        <table class="table table-sm table-striped table-hover mt-4">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Codigo</th>
                    <th>Descripción</th>
                    <th>Unidad</th>
                    <th>Precio</th>
                    <th>Cantidad por Contenedor</th>
                    <th>Acciones</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $conuter = 1;
                 foreach ($allTBProducto as $producto) { ?>

                <tr>

                    <th><?php echo   $conuter; ?></th>
                    <th><?php echo $producto->getCodigo(); ?></th>
                    <th><?php echo $producto->getDescripcion(); ?></th>
                    <th><?php echo $producto->getUnidad(); ?></th>
                    <th><?php echo $producto->getPrecio(); ?></th>
                    <th><?php echo $producto->getConsumoPorContenedor(); ?></th>
                    <th>
                        <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                            data-bs-target="#editarRegistroProducto" data-bs-id="<?= $producto->getId();?>"><i
                                class="fa-solid fa-pen-to-square"></i> Editar</a>

                        <button class="btn btn-sm btn-danger"
                            onclick="showDeleteAlert(event,<?=$producto->getId()?>)"><i class="fa-solid fa-trash"></i>
                            Eliminar</button>
                    </th>
                </tr>
                
                <?php $conuter++; } ?>

            </tbody>
        </table>

    </div>
    <?php include 'nuevoProductoModal.php';?>
    <?php include 'editarProductoModal.php';?>

    <script>
    let editarRegistroProducto = document.getElementById('editarRegistroProducto')

    editarRegistroProducto.addEventListener('shown.bs.modal', event => {
        let button = event.relatedTarget
        let id = button.getAttribute('data-bs-id')

        let inputId = editarRegistroProducto.querySelector('.modal-body #id ')
        let inputDescripcion = editarRegistroProducto.querySelector('.modal-body #descripcion ')
        let inputUnidad = editarRegistroProducto.querySelector('.modal-body #unidad ')
        let inputPrecio = editarRegistroProducto.querySelector('.modal-body #precio ')
        let inputCodigo = editarRegistroProducto.querySelector('.modal-body #codigo ')
        let inputConsumoContenedor = editarRegistroProducto.querySelector('.modal-body #consumoPorContenedor ')

        url = "productoController.php"
        let data = new FormData()
        data.append('id', id)

        fetch(url, {
                method: 'POST',
                body: data
            }).then(response => resesponse.json())
            .then(data => {

                inputId.value = data.id
                inputDescripcion.value = data.descripcion
                inputUnidad.value = data.unidad
                inputPrecio.value = data.precio
                inputCodigo.value = data.codigo
                inputConsumoContenedor.value = data.consumoPorContenedor

            }).catch(error => console.log(error))


    })
    </script>

    <script>
    function showDeleteAlert(event, id) {

        event.preventDefault();
        Swal.fire({
            title: 'Eliminar registro',
            text: '¿Deseas eliminar este registro?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Eliminar',
            cancelButtonText: 'Cancelar',
            dangerMode: true
        }).then((result) => {
            if (result.isConfirmed) {

                // Cambia la siguiente línea para redirigir después de enviar el formulario
                window.location.href = "../business/registroProductoAction.php?delete=true&id=" + id;
            }
        });
    }
    </script>

    <script src="../asset/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@100"> </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
</body>

</html>