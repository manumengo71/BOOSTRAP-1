<?php
include_once("cabecera.php");
?>

<div class="container" id="formularios">
    <div class="row">
        <form class="form-horizontal mt-4" action="proceso_buscar_examen.php" name="frmBuscarExamen" id="frmBuscarExamen" method="get">
            <fieldset>
                <!-- Form Name -->
                <legend>Buscar un examen por TEMA</legend>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-xs-4 control-label" for="txtTemaExam">Tema del examen</label>
                    <div class="col-xs-4">
                        <input id="txtTemaExam" name="txtTemaExam" placeholder="Tema del examen" class="form-control input-md" type="text">
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-xs-4 control-label" for="btnBuscarExam"></label>
                    <div class="col-xs-4">
                        <input type="submit" id="btnBuscarExam" name="btnBuscarExam" class="btn btn-primary" value="Aceptar" />
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
</body>

</html>