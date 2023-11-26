<?php
include_once("config.php");
$conexion = obtenerConexion();

// Recoger datos
$student = json_decode($_POST['student']);

$sql = "UPDATE students
SET student_name = '" . $student->nombre . "', 
student_birthdate = '" . $student->cumpleaños . "', 
student_number = '" . $student->numero . "'
WHERE student_id =  '$student->idStudent' ";

mysqli_query($conexion, $sql);

if (mysqli_errno($conexion) != 0) {
    $numerror = mysqli_errno($conexion);
    $descrerror = mysqli_error($conexion);

    responder(null, true, "Se ha producido un error número $numerror que corresponde a: $descrerror", $conexion);
} else {
    // Prototipo responder($datos,$error,$mensaje,$conexion)
    responder(null, false, "Se ha modificado el estudiante", $conexion);
}
