<?php
include "dbcon.php";
session_start();

if (isset($_POST['iniciar'])) {
    $correo = $_POST['correo'] ?? '';
    $contrasena = $_POST['contrasena'] ?? '';

    // Verifica que los campos no estén vacíos
    if (empty($correo) || empty($contrasena)) {
        echo "<div class='message'>
                <p>Correo y contraseña son obligatorios.</p>
              </div><br>";
        echo "<a href='iniciarcesion.php'><button class='btn'>Volver</button></a>";
        exit;
    }

    // Consulta a la base de datos
    $sql = "SELECT * FROM usuario WHERE correo='$correo'";
    $res = mysqli_query($con1, $sql);

    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        $password_hash = $row['contrasena'];

        // Verificación de la contraseña
        if (password_verify($contrasena, $password_hash)) {
            $_SESSION['idusuario'] = $row['idusuario'];
            $_SESSION['nombre'] = $row['nombre'];
            header("location: home.php");
        } else {
            echo "<div class='message'>
                    <p>Contraseña incorrecta</p>
                  </div><br>";
            echo "<a href='iniciarcesion.php'><button class='btn'>Volver</button></a>";
        }
    } else {
        echo "<div class='message'>
                <p>Correo no registrado</p>
              </div><br>";
        echo "<a href='iniciarcesion.php'><button class='btn'>Volver</button></a>";
    }
}
?>
