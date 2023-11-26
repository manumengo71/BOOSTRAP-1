<?php
require_once('config.php');
$conexion = obtenerConexion();

// Recoger datos de entrada
$idexam = $_POST['idexam'];

// SQL
$sql = "SELECT exams.*, students.student_name
        FROM exams
        LEFT JOIN students ON exams.student_id = students.student_id
        WHERE exams.exam_id = $idexam;";

$resultado = mysqli_query($conexion, $sql);

// Pedir una fila
$fila = mysqli_fetch_assoc($resultado);

if ($fila) {
    // responder(datos,error,mensaje,conexion)
    responder($fila, false, "Datos recuperados", $conexion);
} else {
    responder(null, true, "No se encuentra el examen con el id proporcionado", $conexion);
}
