<?php
session_start();
include("dbcon.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>BOGSINGS</title>
</head>
<body>
    <h1> TRADUCTOR</h1>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <i class="bi bi-chat"></i>
                    <img src="imagenes/LOGO.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="iniciarcesion.php">Iniciar Sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registrarse.php">Registrarse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="traductor.php">Traductor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactenos.php">Contáctenos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <br>

    <div class="container">
        <div class="row mt-3 justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">Buscar seña</h1>
                <form action="consultasena.php" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Ingrese la palabra a traducir" id="search-input" name="senainput" required>
                        <button class="btn btn-dark" name="sena" type="submit" id="search-button">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>

    