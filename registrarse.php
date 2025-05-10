<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script
    src="js/bootstrap.bundle.min.js">
    </script>
    <title>BOGSINGS</title>
</head>
<body>
    <h1> REGISTRARSE</h1>
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

<form action="insertar.php" method="POST">
  
    <div class="mb-3 mt-3">
      <label for="nombre" class="form-label">Nombre:</label>
      <input type="text" class="form-control" id="nombre" placeholder="Ingrese su Nombre" name="nombre" required>
    </div>
    <div class="mb-3 mt-3">
        <label for="apellido" class="form-label">Apellido:</label>
        <input type="text" class="form-control" id="apellido" placeholder="Ingrese su Apellido" name="apellido" required>
      </div>
      <div class="mb-3 mt-3">
        <label for="celular" class="form-label">Celular:</label>
        <input type="text" class="form-control" id="celular" placeholder="Ingrese su numero de celular" name="celular" required>
      </div>
      <div class="mb-3 mt-3">
        <label for="correo" class="form-label">Email:</label>
        <input type="email" class="form-control" id="correo" placeholder="Ingrese su email" name="correo" required>
      </div>
    <div class="mb-3">
      <label for="contrasena" class="form-label">Contraseña:</label>
      <input type="password" class="form-control" id="contrasena" placeholder="Ingrese su contraseña" name="contrasena" required>
       <i class="fa fa-eye icon toggle"></i>
    </div>
    <div class="mb-3">
         <label for="cpass" class="form-label">Confirma tu contraseña:</label>
         <input type="password" class="form-control" id="cpass" placeholder="Confirma tu contraseña" name="cpass" required>
      </div>
    <td>
    <center><input type="submit" name="registrarse" id="submit" value="Registrarse" class="btn btn-primary"></center>
  	</td>
     <div class="links">
            ¿Tienes una cuenta? <a href="iniciarcesion.php">Inicia Sesion</a>
          </div>
  
  </form>
  <script>
    document.querySelectorAll('.toggle').forEach(item => {
        item.addEventListener('click', () => {
            const input = item.previousElementSibling;
            if (input.type === 'password') {
                input.type = 'text';
                item.classList.remove('fa-eye');
                item.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                item.classList.remove('fa-eye-slash');
                item.classList.add('fa-eye');
            }
        });
    });
</script>


</body>
 </html>