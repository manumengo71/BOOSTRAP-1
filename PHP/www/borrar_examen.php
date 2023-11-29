<?php
require_once("funcionesBD.php");
$conexion = obtenerConexion();

// Recuperar parámetros
$idexam = $_POST['idexam'];

// No validamos, suponemos que la entrada de datos es correcta

// Definir delete
$sql = "DELETE FROM exams WHERE exam_id = $idexam;";

// Ejecutar consulta
$resultado = mysqli_query($conexion, $sql);

// Verificar si hay error y almacenar mensaje
if (mysqli_errno($conexion) != 0) {
    $numerror = mysqli_errno($conexion);
    $descrerror = mysqli_error($conexion);
    $mensaje =  "<h2 class='text-center mt-5'>Se ha producido un error numero $numerror que corresponde a: $descrerror </h2>";
} else {
    $mensaje =  "<div class='container'>
    <div class='row justify-content-center mt-5'>
        <div class='col-md-6'><div class='alert alert-success text-center' role='alert'>
    <h2 class='text-center mt-5'>Examen con id $idexam borrado</h2>
</div></div></div></div>";
}

header("refresh:3;url=listado_examenes.php");

include_once("cabecera.php");

// Mostrar mensaje calculado antes
echo $mensaje;
