<?php

// Recupero datos de parametro en forma de array asociativo
$examen = json_decode($_POST['examen'], true);

require_once("funcionesBD.php");
$conexion = obtenerConexion();

$sql = "SELECT student_id, student_name FROM students;";

$resultado = mysqli_query($conexion, $sql);

$options = "";
while ($fila = mysqli_fetch_assoc($resultado)) {
    $selected = ($fila["student_id"] == $examen['student_id']) ? "selected" : "";
    $options .= "<option value='" . $fila["student_id"] . "' $selected>" . $fila["student_name"] . "</option>";
}

// Cabecera HTML que incluye navbar
include_once("cabecera.php");
?>

<div class="container" id="formularios">
    <div class="row">
        <form class="form-horizontal mt-4" action="procesar_editar_examen.php" name="frmEditarExamen" id="frmEditarExamen" method="post">
            <fieldset>
                <!-- Form Name -->
                <legend>Editar examen</legend>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-xs-4 control-label" for="txtTemaMod">Tema del examen</label>
                    <div class="col-xs-4">
                        <input class="d-none" id="txtIdMod" value="<?php echo $examen['exam_id'] ?>" name="txtIdMod" type="hidden">
                        <input id="txtTemaMod" value="<?php echo $examen['exam_subject'] ?>" name="txtTemaMod" placeholder="Nombre del tema del examen" class="form-control input-md" type="text">
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-xs-4 control-label" for="txtFechaMod">Fecha del examen</label>
                    <div class="col-xs-4">
                        <input id="txtFechaMod" value="<?php echo $examen['exam_date'] ?>" name="txtFechaMod" placeholder="Fecha del examen" class="form-control input-md" type="date">
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-xs-4 control-label" for="txtCalificacionMod">Calificación</label>
                    <div class="col-xs-4">
                        <input id="txtCalificacionMod" value="<?php echo $examen['qualification'] ?>" name="txtCalificacionMod" placeholder="Calificación del examen" class="form-control input-md" type="number">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-4 control-label" for="lstStudentMod">Estudiante</label>
                    <div class="col-xs-4">
                        <select name="lstStudentMod" id="lstStudentMod">
                            <?php echo $options; ?>
                        </select>
                    </div>
                </div>
                <!-- Button -->
                <div class="form-group">
                    <label class="col-xs-4 control-label" for="btnAceptarAltaExam"></label>
                    <div class="col-xs-4 d-inline">
                        <input type="submit" id="" name="" class="btn btn-primary mt-2" value="Aceptar" />
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
</body>

</html>