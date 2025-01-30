<?php
include_once "config.php";
header('Content-Type: application/json');

$sql = "SELECT id, imagen, titulo FROM discos";
$result = $conn->query($sql);

$imagenes = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $imagenes[] = $row;
    }
}

echo json_encode(['success' => true, 'datos' => $imagenes]);

$conn->close();
?>
