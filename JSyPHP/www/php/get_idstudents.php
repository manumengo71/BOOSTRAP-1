<?php
require_once('config.php');
$conexion = obtenerConexion();

// No hay datos de entrada

// SQL
$sql = "SELECT * FROM students;";

$resultado = mysqli_query($conexion, $sql);

while ($fila = mysqli_fetch_assoc($resultado)) {
    $datos[] = $fila; // Insertar la fila en el array
}

responder($datos, false, "Datos recuperados", $conexion);