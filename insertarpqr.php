<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include("dbcon.php");

if (isset($_POST['comentar'])) {
    $asunto = $_POST['asunto'] ?? '';
    $comentario = $_POST['comentario'] ?? '';

    if (empty($asunto) || empty($comentario)) {
        echo "Por favor complete todos los campos.";
        exit;
    }

    $stmt = mysqli_prepare($con1, "INSERT INTO comentarios (asunto, comentario) VALUES (?, ?)");

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $asunto, $comentario);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo "Su comentario ha sido registrado exitosamente.";
        } else {
            echo "Error en la inserción de datos.";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error al preparar la consulta.";
    }
}
?>

