<?php
require_once('config.php');
$conexion = obtenerConexion();

// Recoger datos de entrada
$idstudent = $_POST['idstudent'];

// SQL
$sql = "SELECT * FROM students WHERE student_id = $idstudent;";

$resultado = mysqli_query($conexion, $sql);

// Pedir una fila
$fila = mysqli_fetch_assoc($resultado);

if ($fila) {
    // responder(datos,error,mensaje,conexion)
    responder($fila, false, "Datos recuperados", $conexion);
} else {
    responder(null, true, "No se encuentra el estudiante con el id proporcionado", $conexion);
}
