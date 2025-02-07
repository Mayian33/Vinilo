<?php 

include_once "config.php";
header('Content-Type: application/json');

$sql="SELECT * FROM discos";
$result= $conn->query($sql);

$productos=[];


if (!$conn) {
    die(json_encode(['success' => false, 'error' => 'No se pudo conectar a la base de datos.']));
}


var_dump(getenv('MYSQLHOST'));
var_dump(getenv('MYSQLUSER'));
var_dump(getenv('MYSQLPASSWORD'));
var_dump(getenv('MYSQLDATABASE'));



if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $productos[]=$row;
    }

    echo json_encode(['success' => true, 'datos' => $productos]);
    $conn->close();
}else{
    echo json_encode(['success' => false, 'error' => 'No hay datos disponibles']);
}

?>
