<?php
include 'dbcon.php';
session_start();

if (isset($_POST['registrarse'])) {
    $nombre = $_POST['nombre'] ?? '';
    $apellido = $_POST['apellido'] ?? '';
    $telefono = $_POST['celular'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $contrasena = $_POST['contrasena'] ?? '';
    $cpass = $_POST['cpass'] ?? '';

    $check = "SELECT * FROM usuario WHERE correo='$correo'";
    $res = mysqli_query($con1, $check);
    $passwd = password_hash($contrasena, PASSWORD_DEFAULT);

    if (mysqli_num_rows($res) > 0) {
        echo "Este correo ya ha sido registrado. Inténtalo nuevamente.";
    } else {
        if ($contrasena === $cpass) {
           
            $sql = "INSERT INTO usuario(nombre, apellido, telefono, correo, contrasena) VALUES ('$nombre', '$apellido', '$telefono', 
            '$correo' , '$passwd')";
            $result = mysqli_query($con1, $sql);
            if ($result) {
                echo "Ha sido registrado exitosamente.";
            } else {
                echo "Error en la inserción de datos. ";
            }
        } else {
            echo "Las contraseñas no coinciden.";
        }
    }
}
?>
