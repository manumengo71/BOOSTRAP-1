<?php
include_once("config.php");
$conexion = obtenerConexion();

// Recoger datos
$nombre = $_POST['nombre'];
$cumpleaños = $_POST['cumpleaños'];
$numero = $_POST['numero'];

// $cumpleañosMY = DateTime::createFromFormat('d/m/Y', $cumpleaños)->format('Y-m-d');

$sql = "INSERT INTO students VALUES (null,'$nombre','$cumpleaños','$numero');";

mysqli_query($conexion, $sql);

if (mysqli_errno($conexion) != 0) {
    $numerror = mysqli_errno($conexion);
    $descrerror = mysqli_error($conexion);

    responder(null, true, "Se ha producido un error número $numerror que corresponde a: $descrerror", $conexion);

} else {
    // Prototipo responder($datos,$error,$mensaje,$conexion)
    responder(null, false, "Se ha insertado el tipo de componente", $conexion);
}
?>
