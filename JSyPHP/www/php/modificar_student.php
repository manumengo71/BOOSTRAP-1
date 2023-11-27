<?php
include_once("config.php");
$conexion = obtenerConexion();

// Recoger datos
$student = json_decode($_POST['student']);

$sql = "UPDATE students
SET student_name = '$student->name', 
student_birthdate = '$student->birthdate', 
student_number = '$student->number'
WHERE student_id = $student->id;";

mysqli_query($conexion, $sql);

if (mysqli_errno($conexion) != 0) {
    $numerror = mysqli_errno($conexion);
    $descrerror = mysqli_error($conexion);

    responder(null, true, "Se ha producido un error número $numerror que corresponde a: $descrerror", $conexion);
} else {
    // Prototipo responder($datos,$error,$mensaje,$conexion)
    responder(null, false, "Se ha modificado el estudiante", $conexion);
}
