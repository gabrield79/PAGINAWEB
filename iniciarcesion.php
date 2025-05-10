<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>BOGSINGS - Iniciar Sesión</title>
</head>
<body>
  <div>
    <div>
      <h1>INICIAR SESIÓN</h1>
      <header>
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
              <i class="bi bi-chat"></i> 
              <img src="imagenes/LOGO.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="iniciarcesion.php">Iniciar Sesión</a></li>
                <li class="nav-item"><a class="nav-link" href="registrarse.php">Registrarse</a></li>
                <li class="nav-item"><a class="nav-link" href="traductor.php">Traductor</a></li>
                <li class="nav-item"><a class="nav-link" href="contactenos.php">Contáctenos</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

      <form action="login.php" method="POST">
        <div class="form box">
          <div class="input-container">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Ingrese su email" name="correo" required>
          </div>
          <div class="input-container">
            <label for="pwd" class="form-label">Contraseña:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Ingrese su contraseña" name="contrasena" required>
          </div>
          <div class="remember">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="Recuerdame"> Recuérdame
            </label>
            <span><a href="olvido.php">¿Olvidó su contraseña?</a></span>
          </div>
        </div>
        <button type="submit" name="iniciar" class="btn btn-primary">Iniciar sesión</button>
        <div class="links">
          ¿No tienes una cuenta? <a href="registrarse.php">Regístrate ahora</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
