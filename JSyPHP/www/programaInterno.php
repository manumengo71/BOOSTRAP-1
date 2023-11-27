<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa Interno</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        @import url('css/estilosAdicionales.css');

        form,
        #resultadoBusqueda {
            display: none;
        }

        #formularios {
            margin-top: 60px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- HEADER NAVBAR -->
    <?php
    include 'php/cabecera.php';
    ?>

    <div class="container" id="formularios">
        <div class="row">
            <form class="form-horizontal" name="frmAltaStudent" id="frmAltaStudent">
                <fieldset>
                    <!-- Form Name -->
                    <legend>Alta de estudiante</legend>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="txtNombre">Nombre</label>
                        <div class="col-xs-4">
                            <input id="txtNombre" name="txtNombre" placeholder="Nombre del estudiante" class="form-control input-md" type="text">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="txtCumpleaños">Fecha de cumpleaños</label>
                        <div class="col-xs-4">
                            <input id="txtCumpleaños" name="txtCumpleaños" placeholder="Cumpleaños del estudiante" class="form-control input-md" type="date">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="txtNumero">Numero de teléfono</label>
                        <div class="col-xs-4">
                            <input id="txtNumero" name="txtNumero" placeholder="Numero de teléfono del estudiante" class="form-control input-md" type="text" maxlength="9" pattern="\d{1,9}">
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="btnAceptarAltaStudent"></label>
                        <div class="col-xs-4 d-inline">
                            <input type="button" id="btnAceptarAltaStudent" name="btnAceptarAltaStudent" class="btn btn-primary mt-2" value="Aceptar" />
                        </div>
                        <div class="col-xs-4 d-inline">
                            <input type="button" class="btn btn-secondary mt-2" value="Cancelar" onclick="ocultarFormularios()" />
                        </div>
                    </div>
                </fieldset>
            </form>
            <form class="form-horizontal" name="frmAltaExamenes" id="frmAltaExam">
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

                            </select>
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="btnAceptarAltaExam"></label>
                        <div class="col-xs-4 d-inline">
                            <input type="button" id="btnAceptarAltaExam" name="btnAceptarAltaExam" class="btn btn-primary mt-2" value="Aceptar" />
                        </div>
                        <div class="col-xs-4 d-inline">
                            <input type="button" class="btn btn-secondary mt-2" value="Cancelar" onclick="ocultarFormularios()" />
                        </div>
                    </div>
                </fieldset>
            </form>
            <form class="form-horizontal" name="frmBuscarStudent" id="frmBuscarStudent">
                <fieldset>
                    <!-- Form Name -->
                    <legend>Buscar un estudiante por ID</legend>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="txtIdStudent">Id Estudiante</label>
                        <div class="col-xs-4">
                            <input id="txtIdStudent" name="txtIdStudent" placeholder="Id del estudiante" class="form-control input-md" type="text">
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="btnBuscarStudent"></label>
                        <div class="col-xs-4">
                            <input type="button" id="btnBuscarStudent" name="btnBuscarStudent" class="btn btn-primary" value="Aceptar" />
                        </div>
                    </div>
                </fieldset>
            </form>
            <form class="form-horizontal" name="frmBuscarStudent2" id="frmBuscarStudent2">
                <fieldset>
                    <!-- Form Name -->
                    <legend>Buscar un estudiante por NOMBRE</legend>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="txtIdStudent">Nombre del Estudiante</label>
                        <div class="col-xs-4">
                            <input id="txtNombreStudent" name="txtNombreStudent" placeholder="Nombre del estudiante" class="form-control input-md" type="text">
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="btnBuscarStudent2"></label>
                        <div class="col-xs-4">
                            <input type="button" id="btnBuscarStudent2" name="btnBuscarStudent2" class="btn btn-primary" value="Aceptar" />
                        </div>
                    </div>
                </fieldset>
            </form>
            <form class="form-horizontal" name="frmModificarStudent" id="frmModificarStudent">
                <fieldset>
                    <!-- Form Name -->
                    <legend>Modificar estudiante</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="txtModIdStudent">Id estudiante</label>
                        <div class="col-xs-4">
                            <input disabled id="txtModIdStudent" name="txtModIdStudent" class="form-control input-md" type="text">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="txtModNombreStudent">Nombre del estudiante</label>
                        <div class="col-xs-4">
                            <input id="txtModNombreStudent" name="txtModNombreStudent" class="form-control input-md" type="text">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="txtModCumpleañosStudent">Fecha de cumpleaños</label>
                        <div class="col-xs-4">
                            <input id="txtModCumpleañosStudent" name="txtModCumpleañosStudent" placeholder="Cumpleaños del estudiante" class="form-control input-md" type="date">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="txtModNumeroStudent">Numero de teléfono</label>
                        <div class="col-xs-4">
                            <input id="txtModNumeroStudent" name="txtModNumeroStudent" placeholder="Numero de teléfono del estudiante" class="form-control input-md" type="text" maxlength="9" pattern="\d{1,9}">
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="btnAceptarModStudent"></label>
                        <div class="col-xs-4">
                            <input type="button" id="btnAceptarModStudent" name="btnAceptarModStudent" class="btn btn-primary" value="Aceptar" />
                        </div>
                    </div>
                </fieldset>
            </form>
            <form class="form-horizontal" name="frmModificarExam" id="frmModificarExam">
                <fieldset>
                    <!-- Form Name -->
                    <legend>Modificar examen</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="txtModIdExam">Id examen</label>
                        <div class="col-xs-4">
                            <input disabled id="txtModIdExam" name="txtModIdExam" class="form-control input-md" type="text">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="txtModTemaExam">Tema del examen</label>
                        <div class="col-xs-4">
                            <input id="txtModTemaExam" name="txtModTemaExam" placeholder="Nombre del tema del examen" class="form-control input-md" type="text">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="txtModFechaExam">Fecha del examen</label>
                        <div class="col-xs-4">
                            <input id="txtModFechaExam" name="txtModFechaExam" placeholder="Fecha del examen" class="form-control input-md" type="date">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="txtModCalificacionExam">Calificación</label>
                        <div class="col-xs-4">
                            <input id="txtModCalificacionExam" name="txtModCalificacionExam" placeholder="Calificación del examen" class="form-control input-md" type="number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="lstStudent">Estudiante</label>
                        <div class="col-xs-4">
                            <select name="lstStudent" id="lstStudent">

                            </select>
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="btnAceptarModExam"></label>
                        <div class="col-xs-4">
                            <input type="button" id="btnAceptarModExam" name="btnAceptarModExam" class="btn btn-primary" value="Aceptar" />
                        </div>
                    </div>
                </fieldset>
            </form>
            <form class="form-horizontal" name="frmBuscarExam" id="frmBuscarExam">
                <fieldset>
                    <!-- Form Name -->
                    <legend>Buscar un examen por ID</legend>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="txtIdExam">Id del examen</label>
                        <div class="col-xs-4">
                            <input id="txtIdExam" name="txtIdExam" placeholder="Id del examen" class="form-control input-md" type="text">
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-xs-4 control-label" for="btnBuscarExam"></label>
                        <div class="col-xs-4">
                            <input type="button" id="btnBuscarExam" name="btnBuscarExam" class="btn btn-primary" value="Aceptar" />
                        </div>
                    </div>
                </fieldset>
            </form>
            <form class="form-horizontal" name="frmBuscarExam2" id="frmBuscarExam2">
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
                        <label class="col-xs-4 control-label" for="btnBuscarExam2"></label>
                        <div class="col-xs-4">
                            <input type="button" id="btnBuscarExam2" name="btnBuscarExam2" class="btn btn-primary" value="Aceptar" />
                        </div>
                    </div>
                </fieldset>
            </form>
            <div id="resultadoBusqueda"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/objetos.js"></script>
    <script type="text/javascript" src="js/codigo.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
</body>

</html>