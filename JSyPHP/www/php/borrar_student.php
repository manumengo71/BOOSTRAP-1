<?php
require_once('config.php');
$conexion = obtenerConexion();

// Recoger datos de entrada
$idstudent = $_POST['idstudent'];

// SQL
$sql = "DELETE FROM students WHERE student_id = $idstudent;";

$resultado = mysqli_query($conexion, $sql);

// responder(datos, error, mensaje, conexion)
responder(null, false, "Datos eliminados", $conexion);

