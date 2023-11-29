<?php
require_once("funcionesBD.php");
$conexion = obtenerConexion();

// Recuperar parámetro
$tema = $_GET['txtTemaExam'];

// No validamos, suponemos que la entrada de datos es correcta

$sql = "SELECT exams.*, students.student_name as nombre
        FROM exams
        LEFT JOIN students ON exams.student_id = students.student_id
        WHERE exams.exam_subject LIKE '%$tema%'";

$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) > 0) {
    $mensaje = "<div class='fluid-container ms-4 me-4 mt-4'>";
    $mensaje .= "<h2 class='text-center'>Examen localizado</h2>";
    $mensaje .= "<table class='table'>";
    $mensaje .= "<thead><tr><th>ID EXAMEN</th><th>TEMA</th><th>FECHA</th><th>NOMBRE ESTUDIANTE</th><th>CALIFICACIÓN</th></tr></thead>";
    $mensaje .= "<tbody>";
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $mensaje .= "<tr>";
        $mensaje .= "<td>" . $fila['exam_id'] . "</td>";
        $mensaje .= "<td>" . $fila['exam_subject'] . "</td>";
        $mensaje .= "<td>" . $fila['exam_date'] . "</td>";
        $mensaje .= "<td>" . $fila['nombre'] . "</td>";
        $mensaje .= "<td>" . $fila['qualification'] . "</td>";
    }
    $mensaje .= "</tr></tbody></table>";
    $mensaje .= "</div>";
} else { // No hay datos
    $mensaje = "<h2 class='text-center mt-5'>El examen con tema $tema no está registrado</h2>";
}

// Insertamos cabecera
include_once("cabecera.php");

// Mostrar mensaje calculado antes
echo $mensaje;
