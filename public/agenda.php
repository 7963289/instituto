<?php
$db = new mysqli("localhost", "root", "", "id11104528_contactos", 3306);
if ($db->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    exit();
}

$db->set_charset("utf8");

// Ejecutar la consulta
$resultado = $db->query("SELECT * FROM censo");
if($resultado){
     
    while ($fila = $resultado->fetch_object()){
            $personas[] = $fila;
    }
    // Free result set
    $resultado->close();
}
echo json_encode($personas);
$db->close();
?>