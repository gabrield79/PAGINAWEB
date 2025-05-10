<?php
session_start();

include("dbcon.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de Informacion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="form-box box">

            <?php

            if (isset($_POST['update'])) {
                $email = $_POST['correo'];
                $password = $_POST['contrasena'];
              	$telefono = $_POST['telefono'];

                $id = $_SESSION['idusuario'];
                $edit_query = mysqli_query($conn, "UPDATE usuario SET correo='$email', contrasena='$password', 
                telefono='$telefono WHERE idusuario = $id");

                if ($edit_query) {
                    echo "<div class='message'>
                <p>Informacion Actualizada!</p>
                </div><br>";
                    echo "<a href='home.php'><button class='btn'>Volveras al Inicio</button></a>";
                }
            } else {

                $id = $_SESSION['idusuario'];
                $query = mysqli_query($conn, "SELECT * FROM usuario WHERE idusuario = $id") or die("error occurs");

                while ($result = mysqli_fetch_assoc($query)) {
                    $res_email = $result['correo'];
                    $res_password = $result['contrasena'];
                    $res_telefono = $result['telefono'];
                    $res_id = $result['idusuario'];
                }

                ?>

                <header>Cambio de Informacion</header>
                <form action="#" method="POST" enctype="multipart/form-data">

                    <div class="form-box">

						   <div class="input-container">
                            <i class="fa fa-envelope icon"></i>
                            <input class="input-field" type="text" placeholder="Telefono" name="telefono"
                                value="<?php echo $res_telefono; ?>" required>
                        </div>
                        <div class="input-container">
                            <i class="fa fa-envelope icon"></i>
                            <input class="input-field" type="email" placeholder="Correo Electronico" name="correo"
                                value="<?php echo $res_email; ?>" required>
                        </div>

                        <div class="input-container">
                            <i class="fa fa-lock icon"></i>
                            <input class="input-field password" type="password" placeholder="Contraseña" name="contrasena"
                                value="<?php echo $res_password; ?>" required>
                            <i class="fa fa-eye toggle icon"></i>
                        </div>

                    </div>


                    <div class="field">
                        <input type="submit" name="update" id="submit" value="Update" class="btn">
                    </div>


                </form>
            </div>
        <?php } ?>
    </div>

 

</body>

</html>
