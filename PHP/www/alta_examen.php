<?php
require_once("funcionesBD.php");

$conexion = obtenerConexion();

$sql = "SELECT student_id, student_name FROM students;";

$resultado = mysqli_query($conexion, $sql);

$options = "";
while ($fila = mysqli_fetch_assoc($resultado)) {
    // $tipos[] = $fila; // Insertar una fila al final
    $options .= " <option value='" . $fila["student_id"] . "'>" . $fila["student_name"] . "</option>";
}

?>


<?php
// Cabecera HTML que incluye navbar
include_once("cabecera.php");
?>

<html>

<body>
    <div class="container" id="formularios">
        <div class="row">
            <form class="form-horizontal mt-4" action="proceso_alta_examen.php" name="frmAltaExamen" id="frmAltaExamen" method="post">
                <fieldset>
                    <!-- Form Name -->
                    <legend>Alta de examenes</legend>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="txtTema">Tema del examen</label>
                        <div class="col-xs-4">
                            <input id="txtTema" name="txtTema" placeholder="Nombre del tema del examen" class="form-control input-md" type="text">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="txtFecha">Fecha del examen</label>
                        <div class="col-xs-4">
                            <input id="txtFecha" name="txtFecha" placeholder="Fecha del examen" class="form-control input-md" type="date">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="txtCalificacion">Calificación</label>
                        <div class="col-xs-4">
                            <input id="txtCalificacion" name="txtCalificacion" placeholder="Calificación del examen" class="form-control input-md" type="number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="lstStudent">Estudiante</label>
                        <div class="col-xs-4">
                            <select name="lstStudent" id="lstStudent">
                                <?php echo $options; ?>
                            </select>
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="btnAceptarAltaExam"></label>
                        <div class="col-xs-4 d-inline">
                            <input type="submit" id="btnAceptarAltaExam" name="btnAceptarAltaExam" class="btn btn-primary mt-2" value="Aceptar" />
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</body>

</html>