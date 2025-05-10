<?php
include "dbcon.php";


if (!$con1) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}


if (isset($_GET['senainput']) && !empty($_GET['senainput'])) {
    $sena = trim($_GET['senainput']); 

    
    $sql = "SELECT imagen FROM palabras WHERE palabra = ?";
    $stmt = $con1->prepare($sql);

    if ($stmt === false) {
        die("Error en la preparación de la consulta: " . $con1->error);
    }

    $stmt->bind_param("s", $sena);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $senaRutaImagenEncontrada = htmlspecialchars($row['imagen']); 

        echo "<div class='message'>";
        echo "<p><img src='" . $senaRutaImagenEncontrada . "' alt='Imagen de la palabra' style='max-width:300px; height:auto;'></p>";
        echo "</div><br>";
    } else {
        echo "<div class='message'><p><strong>Palabra no encontrada.</strong> Intenta con otra.</p></div><br>";
    }

    echo "<a href='traductor.php'><button class='btn'>Ir a buscar otra imagen</button></a>";

    $stmt->close();
} else {
    echo "<p><strong>Por favor, ingresa una palabra válida.</strong></p>";
    echo "<a href='traductor.php'><button class='btn'>Volver</button></a>";
}

$con1->close(); 
?>
