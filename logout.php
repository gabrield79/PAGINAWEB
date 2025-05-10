<?php
session_start();
$_SESSION = []; // Vacía las variables de sesión
session_destroy(); // Destruye la sesión
header("Location: iniciarcesion.php"); // Redirige a la página de inicio de sesión
exit(); // Termina el script para asegurar la redirección
?>
