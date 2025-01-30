<?php
include_once('configuracion.php');

// Verificar si se han enviado datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $imagen = $_POST('imagen');

    // Preparar la consulta SQL
    $sql = "INSERT INTO discos (titulo, descripcion, precio, imagen) 
            VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind parameters to prevent SQL injection
        $stmt->bind_param("ssis", $titulo, $descripcion, $precio, $imagen);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "<h2>Información almacenada con éxito</h2>";
            echo "<p>Producto: " . $titulo . "</p>";
            echo "<p>Cantidad: " . $descripcion . "</p>";
            echo "<p>Precio: " . $precio . "</p>";
            echo "<p>Fecha: " . $imagen . "</p>";
        } else {
            echo "Error al ejecutar  " . $stmt->error;
        }

        // Cerrar la declaración
        $stmt->close();
    } else {
        echo "Error al preparar la consulta: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
