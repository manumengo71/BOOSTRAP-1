<?php
require_once("funcionesBD.php");
$conexion = obtenerConexion();

// Recuperar parámetros
$tema = $_POST['txtTema'];
$fecha = $_POST['txtFecha'];
$calificacion = $_POST['txtCalificacion'];
$idStudent = $_POST['lstStudent'];

// No validamos, suponemos que la entrada de datos es correcta

// Definir insert
$sql = "INSERT INTO exams(`exam_id`, `exam_subject`, `exam_date`, `student_id`, `qualification`) 
                VALUES (null,'$tema','$fecha',$idStudent, '$calificacion');";

// Ejecutar consulta
$resultado = mysqli_query($conexion, $sql);

// Verificar si hay error y almacenar mensaje
if (mysqli_errno($conexion) != 0) {
    $numerror = mysqli_errno($conexion);
    $descrerror = mysqli_error($conexion);
    $mensaje =  "<h2 class='text-center mt-5'>Se ha producido un error numero $numerror que corresponde a: $descrerror </h2>";
} else {
    $mensaje =  "<h2 class='text-center mt-5'>Examen insertado</h2>";
}
// Redireccionar tras 5 segundos al index.
// Siempre debe ir antes de DOCTYPE
header("refresh:3;url=../programainterno.php");

include_once("cabecera.php");
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <?php
            if (isset($mensaje)) {
                echo "<div class='alert " . (isset($numerror) ? 'alert-danger' : 'alert-success') . " text-center' role='alert'>";
                echo $mensaje;
                echo "</div>";
            }
            ?>
        </div>
    </div>
</div>