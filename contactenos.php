<?php
session_start();

include("dbcon.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script
    src="js/bootstrap.bundle.min.js">
    </script>
    <title>BOGSINGS</title>
</head>
<body>
    <h1> CONTACTENOS</h1>
    <header>
       <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><i class="bi bi-chat"></i> <img src="imagenes/LOGO.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                		<span class="bar"></span>
                		<span class="bar"></span>
                		<span class="bar"></span>
            		
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="iniciarcesion.php">Iniciar Sesion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registrarse.php">Registrarse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="traductor.php">Traductor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactenos.php">Contactenos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
  
  
  <form action="insertarpqr.php" method="POST">
  
    <div class="mb-3 mt-3">
      <label for="asunto" class="form-label">Asunto:</label>
      <input type="text" class="form-control" id="asunto" placeholder="Ingrese el asunto de su comentario" name="asunto" required>
    </div>
    <div class="mb-3 mt-3">
        <label for="comentario" class="form-label">Comentario:</label>
     	<textarea class="form-control" rows="5" id="comentario" name="comentario" required></textarea>
      </div>
      
    <td>
    <center><input type="submit" name="comentar" id="submit" value="Comentar" class="btn btn-primary"></center>
  	</td>
 
  
  </form>
  </body>
</html>
  
  
  
  
  
  
  
  
  
  
  