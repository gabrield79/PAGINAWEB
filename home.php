<?php
session_start();

include("dbcon.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script
    src="js/bootstrap.bundle.min.js">
    </script>
    
    <title>BOGSINGS</title>
</head>
<body>
    <h1> BOGSINGS</h1>
   		<header class="navbar-section">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.php"><i class="bi bi-chat"></i> <img src="imagenes/LOGO.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                		<span class="bar"></span>
                		<span class="bar"></span>
                		<span class="bar"></span>
            		
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="home.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="traductor.php">Traductor</a>
                        </li>
                       <li class="nav-item">
                            <a class="nav-link" href="juegos.php">Traductor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactenos.php">Contactenos</a>
                        </li>
                      <li class="nav-item">
                            <div class="dropdown">
                                <a class='nav-link dropdown-toggle' id='dropdownMenuLink'
                                    data-bs-toggle='dropdown' aria-expanded='false'>
                                    <i class='bi bi-person'></i>
                                </a>


                                <ul class="dropdown-menu mt-2 mr-0" aria-labelledby="dropdownMenuLink">

                                    <li>
                                        <?php

                                        $id = $_SESSION['idusuario'];
                                        $query = mysqli_query($con1, "SELECT nombre FROM usuario WHERE idusuario = $id");

                                        while ($result = mysqli_fetch_assoc($query)) {
                                            $res_username = $result['nombre'];
                                            $res_id = $result['idusuario'];
                                
                                        }
                                        echo "<a class='dropdown-item' >Bienvenido</a>";
										echo "<class='dropdown-item'> $res_username" ;
                                        echo "<a class='dropdown-item' href='edit.php'>Cambiar datos</a>";

                                        ?>
									
                                    </li>
                                
                                    <li><a class="dropdown-item" href="logout.php">Cerrar Sesion</a></li>
                                </ul>
                            </div>

                        </li>

                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <br>
    <br>
    <section>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="imagenes/datocurioso.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="imagenes/SLADE1.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="imagenes/SLADE2.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
    <section>
        <h3>¿QUIENES SOMOS?</h3>
        <P>BOGSINGS es una herramienta para las entidades públicas con la capacidad de traducir a lengua de señas. En nuestra sociedad actualmente se vive una constante lucha por la 
            igualdad de derechos, oportunidades, y mejoramiento de la calidad de vida de las personas sordas. Nuestra aplicación tiene el fin de que las personas sordas puedan tener mayor 
            inclusión en la sociedad y menor vulneración a sus derechos fundamentales. La metodología que se va a realizar para este proyecto será determinar los requerimientos para 
            el funcionamiento de la aplicación, identificar la comunicación de la lengua de señas, analizar en términos de usabilidad la aplicación en la comunidad sorda e implementar
             la inteligencia artificial dentro de la aplicación.</P>
    </section>
   
    <section>
        <h3>LOGOTIPO</h3>
        <img src="imagenes/LOGO.png" class="img-thumbnail" alt="Logo de BOGSINGS">
    </section> 
    <section>
        <h3>OBJETIVOS</h3>
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                 <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div> 
  
    <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="" alt="Los Angeles" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="" alt="Chicago" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="" alt="New York" class="d-block w-100">
            </div>
        </div>
  
    <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
  </section>
    <section>
    <footer>
        <div class="container">
            <h3>INTEGRANTES</h3>
            <p>Gabriel Lopez</p>
          </div>


    </footer>
    </section>
</body>
<script src="main.js"></script>
</html>