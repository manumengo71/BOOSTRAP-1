<?php
include_once("config.php");
$conexion = obtenerConexion();

// Recoger datos
$student = json_decode($_POST['exam']);

$sql = "UPDATE exams 
SET exam_subject = '" . $exam->tema . "',
exam_date = '" . $exam->fecha . "',
qualification = '" . $exam->calificacion . "',
student_id = $exam->idstudent
WHERE exam_id = $exam->idexam ";

mysqli_query($conexion, $sql);

if (mysqli_errno($conexion) != 0) {
    $numerror = mysqli_errno($conexion);
    $descrerror = mysqli_error($conexion);

    responder(null, true, "Se ha producido un error número $numerror que corresponde a: $descrerror", $conexion);
} else {
    // Prototipo responder($datos,$error,$mensaje,$conexion)
    responder(null, false, "Se ha modificado el examen", $conexion);
}
