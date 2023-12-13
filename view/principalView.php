<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Sistema de Control</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<body>
    <!--
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    
   
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="navbar-brand" aria-current="page" href="./principalView.php">Home</a>
        </li>
        
        
        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Grupos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Banana200</a></li>
            <li><a class="dropdown-item" href="#">Esfuerzo </a></li>
            <li><a class="dropdown-item" href="#">Aproveco</a></li>
            <li><a class="dropdown-item" href="#">Jaime Viana</a></li>
            <li><a class="dropdown-item" href="#">Sura</a></li>
            <li><a class="dropdown-item" href="#">Agrifruta</a></li>
            <li><a class="dropdown-item" href="#">Cariari Siquirres</a></li>
            <li><a class="dropdown-item" href="#">Bodega Oficina</a></li>
          </ul>

        </li>

        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Registro
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./registroProductoView.php">Registrar Producto</a></li>
            
          </ul>

        </li>
       
      </ul>
    </div>
  </div>
</nav>
-->

<nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h2 class="text-center">Sistema Control de Invetarios</h2>

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

</body>

</html>