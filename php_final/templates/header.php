<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/buttons/2.0.1/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="//cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/2.0.1/js/buttons.bootstrap5.min.js"></script>
    <script src="//kit.fontawesome.com/8552914272.js" crossorigin="anonymous"></script>
    <script src="assets/js/scripts.js"></script>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
                <div class="container-fluid">
                <a class="navbar-brand" href="/">Caja Diaria</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link  <?php  if($_SERVER['SCRIPT_NAME'] == '/index.php') { echo('active'); }?> " aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" role="button"
                             data-bs-toggle="dropdown" aria-expanded="false" >Movimientos</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="nuevomovimiento.php">Nuevo</a></li>
                                <li><a class="dropdown-item" href="movimientos.php">Ver</a></li>
                          
                            </ul>
                    </li>
              <?php     if($_SESSION["perfilid"] == 1){ // si no es admin no puede cambiar administrar  ?>
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                             data-bs-toggle="dropdown" aria-expanded="false">
                             Configuración
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="usuarios.php" >Usuarios</a></li>
                                <li><a class="dropdown-item" href="perfiles.php">Perfiles</a></li>
                                <li><a class="dropdown-item" href="derivadores.php">Derivadores</a></li>
                                <li><a class="dropdown-item" href="medios_pago.php">Medios de pago</a></li>
                            </ul>
                    </li>
                    <?php } ?>
                    </ul>
                    <div class="float-end">
                    <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                             data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo '<span>'.$_SESSION["nombre"].'</span>' ?> 
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Perfil</a></li>
                                <li><a class="dropdown-item" href="logout.php">Salir</a></li>
         
                            </ul>
                            </li>
                    </ul>
                    </div>
                </div>
                </div>
            </nav>
    </header>
</body>
</html>
<!-- 
    Defino la cabesera de todas las paginas.
-->