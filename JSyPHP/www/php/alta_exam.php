<?php
include_once("config.php");
$conexion = obtenerConexion();

// Recoger datos
$tema = $_POST['tema'];
$fecha = $_POST['fecha'];
$califiacion = $_POST['califiacion'];
$idstudent = $_POST['idstudent'];

$sql = "INSERT INTO exams VALUES (null,'$tema','$fecha','$idstudent','$califiacion');";

mysqli_query($conexion, $sql);

if (mysqli_errno($conexion) != 0) {
    $numerror = mysqli_errno($conexion);
    $descrerror = mysqli_error($conexion);

    responder(null, true, "Se ha producido un error número $numerror que corresponde a: $descrerror <br>", $conexion);
} else {
    // Prototipo responder($datos,$error,$mensaje,$conexion)
    responder(null, false, "Se ha insertado el examen", $conexion);
}
