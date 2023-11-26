<?php
require_once('config.php');
$conexion = obtenerConexion();

// Recoger datos de entrada
$idexam = $_POST['idexam'];

// SQL
$sql = "DELETE FROM exams WHERE exam_id = $idexam;";

$resultado = mysqli_query($conexion, $sql);

// responder(datos, error, mensaje, conexion)
responder(null, false, "Datos eliminados", $conexion);

