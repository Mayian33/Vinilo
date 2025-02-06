<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vinilos";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


include_once('conexion.php');

$sql = "SELECT * FROM discos";
$result = $conn->query($sql);
$SelectTitulo = "";

if ($result->num_rows > 0) {

  $SelectTitulo = "<select  class='form-select w-25' aria-label='Default select example' name='temporada'>";
  while ($row = $result->fetch_assoc()) {

    $SelectTitulo .= "<option  value='" . $row['id'] . "'>" . $row['titulo'] . "</option>";
  }
  $SelectTitulo .= "</select><br>";
}
?>