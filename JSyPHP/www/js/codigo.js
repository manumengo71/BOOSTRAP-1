"use strict";

var oStudent = new Student();
var oExams = new Exam();

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
    document
        .querySelector("#txtNav3")
        .addEventListener("click", mostrarFormulario);
    document
        .querySelector("#txtNav5")
        .addEventListener("click", mostrarFormulario);

    // Botones
    frmAltaStudent.btnAceptarAltaStudent.addEventListener("click", procesarAltaStudent);
    frmAltaExam.btnAceptarAltaExam.addEventListener("click", procesarAltaExam);
    frmBuscarStudent.btnBuscarStudent.addEventListener("click", procesarBuscarStudent);
    frmModificarStudent.btnAceptarModStudent.addEventListener("click", procesarModificarStudent);
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
        case "txtNav3":
            frmAltaExam.style.display = "block";
            actualizarDesplegableIds();
            break;
        case "txtNav5":
            frmBuscarStudent.style.display = "block";
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
    frmAltaExam.style.display = "none";
    frmBuscarStudent.style.display = "none";
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

async function procesarBuscarStudent() {
    if (validarBuscarStudent()) {
        let idStudent = parseInt(frmBuscarStudent.txtIdStudent.value.trim());

        let respuesta = await oStudent.buscarStudent(idStudent);

        if (!respuesta.error) { // Si NO hay error
            let resultadoBusqueda = document.querySelector("#resultadoBusqueda");

            let studentInfo = {
                student_id: respuesta.datos.student_id,
                student_name: respuesta.datos.student_name,
                student_birthdate: respuesta.datos.student_birthdate,
                student_number: respuesta.datos.student_number
            };

            // Escribimos resultado
            let tablaSalida = "<table class = 'table'>";
            tablaSalida += "<thead><tr><th>IDESTUDIANTE</th><th>NOMBRE</th><th>CUMPLEAÑOS</th><th>NUMERO</th></tr></thead>";
            tablaSalida += "<tbody><tr>";
            tablaSalida += "<td>" + respuesta.datos.student_id + "</td>";
            tablaSalida += "<td>" + respuesta.datos.student_name + "</td>";
            tablaSalida += "<td>" + respuesta.datos.student_birthdate + "</td>";
            tablaSalida += "<td>" + respuesta.datos.student_number + "</td>";
            tablaSalida += "<td><button type='button' class='btn btn-danger' id='btnBorrarStudent' data-idstudent='" + respuesta.datos.student_id + "'>";
            tablaSalida += "<i class='bi bi-trash3-fill'></i> Borrar</button></td>";
            tablaSalida += "<td><button type='button' class='btn btn-primary' id='btnEditarStudent' data-student='" + JSON.stringify(studentInfo) + "'>";
            tablaSalida += "<i class='bi bi-pencil-square'></i> Editar</button></td>";
            tablaSalida += "<tr></tbody></table>";

            resultadoBusqueda.innerHTML = tablaSalida;
            resultadoBusqueda.style.display = "block";

            // Registrar evento para el botón de borrar
            document.querySelector("#btnBorrarStudent").addEventListener("click", borrarStudent);
            document.querySelector("#btnEditarStudent").addEventListener('click', procesarBotonEditarStudent);

        } else { // Si hay error
            alert(respuesta.mensaje);
        }
    }
}

async function actualizarDesplegableIds(idStudentSeleccionado) {

    let respuesta = await oExams.get_idstudents();
    let options = "";

    for (let students of respuesta.datos) {
        if (idStudentSeleccionado && idStudentSeleccionado == students.student_id) { // Si llega el parámetro ( != undefined )
            options += "<option selected value='" + students.student_id + "' >" + students.student_name + "</option>";
        } else {
            options += "<option value='" + students.student_id + "' >" + students.student_name + "</option>";
        }

    }
    // Agrego los options generados a partir del contenido de la BD
    frmAltaExam.lstStudent.innerHTML = options;
    // Aprovecho y actualizo todos los desplegables se vea o no el formulario
}

async function procesarAltaExam() {
    // Recuperar datos del formulario frmAltaComponente
    let tema = frmAltaExam.txtTema.value.trim();
    let fecha = frmAltaExam.txtFecha.value.trim();
    let calificacion = frmAltaExam.txtCalificacion.value.trim();
    let idStudent = frmAltaExam.lstStudent.value;

    // Validar datos del formulario
    if (validarAltaExam()) {
        let respuesta = await oExams.altaExam(new Exam(null, tema, fecha, calificacion, idStudent));
        alert(respuesta.mensaje);

        if (!respuesta.error) { // Si NO hay error
            //Resetear formulario
            frmAltaExam.reset();
            // Ocultar el formulario
            frmAltaExam.style.display = "none";
        }

    }
}

/** FUNCIONES */

async function borrarStudent(oEvento) {
    let boton = oEvento.target;
    let idStudent = boton.dataset.idstudent;

    let respuesta = await oStudent.borrarStudent(idStudent);

    alert(respuesta.mensaje);

    if (!respuesta.error) { // Si NO hay error
        // Borrado de la tabla html
        document.querySelector("#resultadoBusqueda").innerHTML = "";
    }

}

function procesarBotonEditarStudent(oEvento) {
    let boton = null;

    boton = oEvento.target;

    // 1.Ocultar todos los formularios
    ocultarFormularios();
    // 2.Mostrar el formulario de modificación de estudiantes
    frmModificarStudent.style.display = "block";
    // 3. Rellenar los datos de este formulario con los del estudainte seleccionado
    let student = JSON.parse(boton.dataset.student);

    frmModificarStudent.txtModIdStudent.value = student.student_id;
    frmModificarStudent.txtModNombreStudent.value = student.student_name;
    frmModificarStudent.txtModCumpleañosStudent.value = student.student_birthdate;
    frmModificarStudent.txtModNumeroStudent.value = student.student_number;
}

async function procesarModificarStudent() {
    // Recuperar datos del formulario frmModificarComponente
    let idStudent = frmModificarStudent.txtModIdStudent.value.trim();
    let nombre = frmModificarStudent.txtModNombreStudent.value.trim();
    let cumpleaños = frmModificarStudent.txtModCumpleañosStudent.value.trim();
    let numero = frmModificarStudent.txtModNumeroStudent.value.trim();

    // Validar datos del formulario
    if (validarModStudent()) {
        let respuesta = await oStudent.modificarStudent(new Student(idStudent, nombre, cumpleaños, numero));

        alert(respuesta.mensaje);

        if (!respuesta.error) { // Si NO hay error
            //Resetear formulario
            frmModificarStudent.reset();
            // Ocultar el formulario
            frmModificarStudent.style.display = "none";
        }

    }
}

/** FIN FUNCIONES */

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

function validarBuscarStudent() {
    let idStudent = parseInt(frmBuscarStudent.txtIdStudent.value.trim());
    let valido = true;
    let errores = "";

    if (isNaN(idStudent)) {
        valido = false;
        errores += "El identificador del estudiante debe ser numérico";
    }

    if (!valido) {
        // Hay errores
        alert(errores);
    }

    return valido;
}

function validarModStudent() {
    // Recuperar datos del formulario frmModificarComponente
    let idStudent = frmModificarStudent.txtModIdStudent.value.trim();
    let nombre = frmModificarStudent.txtModNombreStudent.value.trim();
    let cumpleaños = frmModificarStudent.txtModCumpleañosStudent.value.trim();
    let numero = frmModificarStudent.txtModNumeroStudent.value.trim();

    let valido = true;
    let errores = "";

    if (isNaN(idStudent)) {
        valido = false;
        errores += "El identificador del estudiante no es correcto";
    }

    if (isNaN(numero)) {
        valido = false;
        errores += "El numero no es correcto";
    }

    if (cumpleaños.length == 0) {
        valido = false;
        errores += "El cumpleaños no puede estar vacío";
    }

    if (nombre.length == 0) {
        valido = false;
        errores += "El nombre no puede estar vacío";
    }

    if (!valido) {
        // Hay errores
        alert(errores);
    }

    return valido;
}

function validarAltaExam() {
    // Recuperar datos del formulario frmModificarComponente
    let tema = frmAltaExam.txtTema.value.trim();
    let fecha = frmAltaExam.txtFecha.value.trim();
    let calificacion = parseInt(frmAltaExam.txtCalificacion.value.trim());
    let idStudent = frmAltaExam.lstStudent.value;

    let valido = true;
    let errores = "";

    if (isNaN(calificacion)) {
        valido = false;
        errores += "La calificacion debe ser numérico";
    }

    if (tema.length == 0 || fecha.length == 0) {
        valido = false;
        errores += "El tema y la fecha no pueden estar vacíos";
    }

    if (!valido) {
        // Hay errores
        alert(errores);
    }

    return valido;
}

/** FIN VALIDACIONES */