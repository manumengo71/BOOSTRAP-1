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
                        <div class="col-xs-4">
                            <input type="button" id="btnAceptarAltaStudent" name="btnAceptarAltaStudent" class="btn btn-primary" value="Aceptar" />
                        </div>
                        <div class="col-xs-4">
                            <input type="button" class="btn btn-secondary" value="Cancelar" onclick="ocultarFormularios()" />
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/objetos.js"></script>
    <script type="text/javascript" src="js/codigo.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
</body>

</html>