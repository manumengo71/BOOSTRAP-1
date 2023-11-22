"use strict";

var oStudent = new Student();

registrarEventos();

/** REGISTRO DE EVENTOS */

function registrarEventos() {
    // Opciones de menú
    document
        .querySelector("#txtNav2")
        .addEventListener("click", mostrarFormulario);
    document
        .querySelector("#txtNav4")
        .addEventListener("click", mostrarListadoStudents);

    // Botones
    frmAltaStudent.btnAceptarAltaStudent.addEventListener("click", procesarAltaStudent);
}

/** FIN REGISTRO DE EVENTOS */

/** MOSTRAR FORMULARIOS */

function mostrarFormulario(oEvento) {
    let opcionMenu = oEvento.target.id; // Opción de menú pulsada (su id)

    ocultarFormularios();

    switch (opcionMenu) {
        case "txtNav2":
            frmAltaStudent.style.display = "block";
            break;
    }
}

function mostrarListadoStudents() {
    open("listado_students.html ");
}

/** FIN MOSTRAR FORMULARIOS */

/** OCULTAR FORMULARIOS */

function ocultarFormularios() {
    frmAltaStudent.style.display = "none";
}

/** FIN OCULTAR FORMULARIOS */

/** PROCESAR FORMULARIOS */

async function procesarAltaStudent() {
    if (validarAltaStudent()) {
        let nombre = frmAltaStudent.txtNombre.value.trim();
        let cumpleaños = frmAltaStudent.txtCumpleaños.value.trim();
        let numero = frmAltaStudent.txtNumero.value.trim();

        let respuesta = await oStudent.altaStudent(new Student(null, nombre, cumpleaños, numero));

        alert(respuesta.mensaje);

        if (!respuesta.error) { // Si NO hay error
            //Resetear formulario
            frmAltaStudent.reset();
            // Ocultar el formulario
            frmAltaStudent.style.display = "none";
        }
    }
}

/** FIN PROCESAR FORMULARIOS */

/** VALIDACIONES */

function validarAltaStudent() {
    let nombre = frmAltaStudent.txtNombre.value.trim();
    let cumpleaños = frmAltaStudent.txtCumpleaños.value.trim();
    let numero = frmAltaStudent.txtNumero.value.trim();
    let valido = true;
    let errores = "";

    if (nombre.length == 0 || cumpleaños.length == 0 || numero.length == 0) {
        valido = false;
        errores += "Faltan datos por rellenar";
    }

    if (!valido) {
        alert(errores);
    }

    return valido;
}

/** FIN VALIDACIONES */