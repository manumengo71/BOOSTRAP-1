<?php
require_once("funcionesBD.php");
$conexion = obtenerConexion();

$sql = "SELECT e.*, s.*, s.student_name as nombre FROM exams e, students s 
        WHERE e.student_id = s.student_id;";

// Ejecutar consulta
$resultado = mysqli_query($conexion, $sql);

// Montar tabla
$mensaje = "<div class='fluid-container mt-4 ms-5 me-5'>";
$mensaje .= "<h2 class='text-center'>Listado de examenes</h2>";
$mensaje .= "<table class='table table-striped'>";
$mensaje .= "<thead><tr><th>ID EXAMEN</th><th>TEMA</th><th>FECHA</th><th>NOMBRE ESTUDIANTE</th><th>CALIFICACION</th><th>ACCIÓN</th></tr></thead>";
$mensaje .= "<tbody>";

// Recorrer filas
while ($fila = mysqli_fetch_assoc($resultado)) {
    $mensaje .= "<tr><td>" . $fila['exam_id'] . "</td>";
    $mensaje .= "<td>" . $fila['exam_subject'] . "</td>";
    $mensaje .= "<td>" . $fila['exam_date'] . "</td>";
    $mensaje .= "<td>" . $fila['nombre'] . "</td>";
    $mensaje .= "<td>" . $fila['qualification'] . "</td>";

    $mensaje .= "<td><form class='d-inline me-1' action='editar_examen.php' method='post'>";
    $mensaje .= "<input type='hidden' name='examen' value='" . htmlspecialchars(json_encode($fila), ENT_QUOTES) . "' />";
    $mensaje .= "<button name='Editar' class='btn btn-primary'><i class='bi bi-pencil-square'></i></button></form>";

    $mensaje .= "<form class='d-inline' action='borrar_examen.php' method='post'>";
    $mensaje .= "<input type='hidden' name='idexam' value='" . $fila['exam_id']  . "' />";
    $mensaje .= "<button name='Borrar' class='btn btn-danger'><i class='bi bi-trash'></i></button></form>";

    $mensaje .= "</td></tr>";
    $mensaje .= "</div>";
}

// Cerrar tabla
$mensaje .= "</tbody></table>";

// Insertamos cabecera
include_once("cabecera.php");

// Mostrar mensaje calculado antes
echo $mensaje;
?>