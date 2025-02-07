<?php
include_once "config.php";
header('Content-Type: application/json');

// Verificar si la conexión es válida antes de cualquier consulta
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'error' => 'Error de conexión: ' . $conn->connect_error]);
    exit;
}

// Depuración (en caso de error)
// error_log("MYSQLHOST: " . getenv('MYSQLHOST'));
// error_log("MYSQLUSER: " . getenv('MYSQLUSER'));
// error_log("MYSQLPASSWORD: " . getenv('MYSQLPASSWORD'));
// error_log("MYSQLDATABASE: " . getenv('MYSQLDATABASE'));

$sql = "SELECT * FROM discos";
$result = $conn->query($sql);

// Verificar si la consulta SQL falló
if (!$result) {
    echo json_encode(['success' => false, 'error' => 'Error en la consulta SQL: ' . $conn->error]);
    exit;
}

// Procesar los resultados de la consulta
$productos = [];
while ($row = $result->fetch_assoc()) {
    $productos[] = $row;
}

$conn->close();

// Devolver los productos en formato JSON
if (!empty($productos)) {
    echo json_encode(['success' => true, 'datos' => $productos]);
} else {
    echo json_encode(['success' => false, 'error' => 'No hay productos disponibles']);
}
?>
