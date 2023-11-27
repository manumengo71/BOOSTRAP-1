<?php
require_once('config.php');
$conexion = obtenerConexion();

// Recoger datos de entrada
$nombreStudent = $_POST['nombrestudent'];

// SQL con consulta directa y LIKE para búsqueda flexible
$sql = "SELECT * FROM students WHERE student_name LIKE '%$nombreStudent%'";

$resultado = mysqli_query($conexion, $sql);

// Pedir una fila
$fila = mysqli_fetch_assoc($resultado);

if ($fila) {
    // responder(datos,error,mensaje,conexion)
    responder($fila, false, "Datos recuperados", $conexion);
} else {
    responder(null, true, "No se encuentra el estudiante con el nombre proporcionado", $conexion);
}
