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
    document
        .querySelector("#txtNav6")
        .addEventListener("click", mostrarListadoExams);
    document
        .querySelector("#txtNav1")
        .addEventListener("click", mostrarFormulario);
    // Botones
    frmAltaStudent.btnAceptarAltaStudent.addEventListener("click", procesarAltaStudent);
    frmAltaExam.btnAceptarAltaExam.addEventListener("click", procesarAltaExam);
    frmBuscarStudent.btnBuscarStudent.addEventListener("click", procesarBuscarStudent);
    frmBuscarStudent2.btnBuscarStudent2.addEventListener("click", procesarBuscarStudent);
    frmModificarStudent.btnAceptarModStudent.addEventListener("click", procesarModificarStudent);
    frmBuscarExam.btnBuscarExam.addEventListener("click", procesarBuscarExam);
    frmBuscarExam2.btnBuscarExam2.addEventListener("click", procesarBuscarExam);

    frmModificarExam.btnAceptarModExam.addEventListener("click", procesarModificarExam);
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
            frmBuscarStudent2.style.display = "block";
            break;
        case "txtNav1":
            frmBuscarExam.style.display = "block";
            frmBuscarExam2.style.display = "block";
            break;
    }
}

function mostrarListadoStudents() {
    open("listado_students.html ");
}

function mostrarListadoExams() {
    open("listado_examns.html ");
}

/** FIN MOSTRAR FORMULARIOS */

/** OCULTAR FORMULARIOS */

function ocultarFormularios() {
    frmAltaStudent.style.display = "none";
    frmAltaExam.style.display = "none";
    frmBuscarStudent.style.display = "none";
    frmBuscarStudent2.style.display = "none";
    resultadoBusqueda.style.display = "none";
    frmBuscarExam.style.display = "none";
    frmModificarStudent.style.display = "none";
    frmModificarExam.style.display = "none";
    frmBuscarExam2.style.display = "none";
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
    let idStudent = parseInt(frmBuscarStudent.txtIdStudent.value.trim());
    let nombreStudent = frmBuscarStudent2.txtNombreStudent.value.trim();
    let respuesta;

    if (validarBuscarStudent() == idStudent) {
        respuesta = await oStudent.buscarStudent(idStudent);
    } else if (validarBuscarStudent() == nombreStudent) {
        respuesta = await oStudent.buscarStudent2(nombreStudent);
    }

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
    frmModificarExam.lstStudent.innerHTML = options;
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

async function procesarBuscarExam() {
    if (validarBuscarExam()) {
        let idExam = parseInt(frmBuscarExam.txtIdExam.value.trim());
        let temaExamen = frmBuscarExam2.txtTemaExam.value.trim();
        let respuestaExam;

        if (validarBuscarExam() == idExam) {
            respuestaExam = await oExams.buscarExam(idExam);
        } else if (validarBuscarExam() == temaExamen) {
            respuestaExam = await oExams.buscarExam2(temaExamen);
        }

        if (!respuestaExam.error) { // Si NO hay error
            let resultadoBusqueda = document.querySelector("#resultadoBusqueda");

            let ExamInfo = {
                exam_id: respuestaExam.datos.exam_id,
                exam_subject: respuestaExam.datos.exam_subject,
                exam_date: respuestaExam.datos.exam_date,
                student_id: respuestaExam.datos.student_id,
                qualification: respuestaExam.datos.qualification
            };

            // Escribimos resultado
            let tablaSalida = "<table class = 'table'>";
            tablaSalida += "<thead><tr><th>ID EXAMEN</th><th>TEMA</th><th>FECHA DE REALIZACION</th><th>NOMBRE DEL ESTUDIANTE</th><th>CALIFICACIÓN</th></tr></thead>";
            tablaSalida += "<tbody><tr>";
            tablaSalida += "<td>" + respuestaExam.datos.exam_id + "</td>";
            tablaSalida += "<td>" + respuestaExam.datos.exam_subject + "</td>";
            tablaSalida += "<td>" + respuestaExam.datos.exam_date + "</td>";
            tablaSalida += "<td>" + respuestaExam.datos.student_name + "</td>";
            tablaSalida += "<td>" + respuestaExam.datos.qualification + "</td>";
            tablaSalida += "<td><button type='button' class='btn btn-danger' id='btnBorrarExam' data-idexam='" + respuestaExam.datos.exam_id + "'>";
            tablaSalida += "<i class='bi bi-trash3-fill'></i> Borrar</button></td>";
            tablaSalida += "<td><button type='button' class='btn btn-primary' id='btnEditarExam' data-exam='" + JSON.stringify(ExamInfo) + "'>";
            tablaSalida += "<i class='bi bi-pencil-square'></i> Editar</button></td>";
            tablaSalida += "<tr></tbody></table>";

            resultadoBusqueda.innerHTML = tablaSalida;
            resultadoBusqueda.style.display = "block";

            // Registrar evento para el botón de borrar
            document.querySelector("#btnBorrarExam").addEventListener("click", borrarExam);
            actualizarDesplegableIds();
            document.querySelector("#btnEditarExam").addEventListener('click', procesarBotonEditarExam);

        } else { // Si hay error
            alert(respuesta.mensaje);
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
    let idStudent = parseInt(frmModificarStudent.txtModIdStudent.value.trim());
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

async function borrarExam(oEvento) {
    let boton = oEvento.target;
    let idExam = boton.dataset.idexam;

    let respuesta = await oExams.borrarExam(idExam);

    alert(respuesta.mensaje);

    if (!respuesta.error) { // Si NO hay error
        // Borrado de la tabla html
        document.querySelector("#resultadoBusqueda").innerHTML = "";
    }

}

function procesarBotonEditarExam(oEvento) {
    let boton = null;

    boton = oEvento.target;

    // 1.Ocultar todos los formularios
    ocultarFormularios();
    // 2.Mostrar el formulario de modificación de estudiantes
    frmModificarExam.style.display = "block";
    // 3. Rellenar los datos de este formulario con los del estudainte seleccionado
    let exam = JSON.parse(boton.dataset.exam);

    frmModificarExam.txtModIdExam.value = exam.exam_id;
    frmModificarExam.txtModTemaExam.value = exam.exam_subject;
    frmModificarExam.txtModFechaExam.value = exam.exam_date;
    frmModificarExam.txtModCalificacionExam.value = exam.qualification;
}

async function procesarModificarExam() {
    // Recuperar datos del formulario frmModificarComponente
    let idExam = parseInt(frmModificarExam.txtModIdExam.value.trim());
    let tema = frmModificarExam.txtModTemaExam.value.trim();
    let fecha = frmModificarExam.txtModFechaExam.value.trim();
    let calificacion = frmModificarExam.txtModCalificacionExam.value.trim();
    let idStudent = parseInt(frmModificarExam.lstStudent.value);

    // Validar datos del formulario
    if (validarModExam()) {
        let respuesta = await oExams.modificarExam(new Exam(idExam, tema, fecha, calificacion, idStudent));

        alert(respuesta.mensaje);

        if (!respuesta.error) { // Si NO hay error
            //Resetear formulario
            frmModificarExam.reset();
            // Ocultar el formulario
            frmModificarExam.style.display = "none";
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
    let nombreStudent = frmBuscarStudent2.txtNombreStudent.value.trim();
    let valido = true;
    let errores = "";
    let variable;

    if (isNaN(idStudent) && nombreStudent.length == 0) {
        valido = false;
        errores += "No se ha pasado ningun parámetro";
    } else if (!isNaN(idStudent) && nombreStudent.length != 0) {
        valido = false;
        errores += "No se puede pasar los dos parámetros";
    } else if (isNaN(idStudent) && nombreStudent.length != 0) {
        valido = true;
        variable = nombreStudent;
    } else if (!isNaN(idStudent) && nombreStudent.length == 0) {
        valido = true;
        variable = idStudent;
    }

    if (!valido) {
        // Hay errores
        alert(errores);
    }

    return variable;
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
    let tema = frmAltaExam.txtTema.value.trim();
    let fecha = frmAltaExam.txtFecha.value.trim();
    let calificacion = frmAltaExam.txtCalificacion.value.trim();
    let idStudent = frmAltaExam.lstStudent.value;
    let valido = true;
    let errores = "";

    if (tema.length == 0 || fecha.length == 0 || calificacion.length == 0) {
        valido = false;
        errores += "Faltan datos por rellenar";
    }

    if (calificacion < 0 || calificacion > 10) {
        valido = false;
        errores += "La calificación debe estar entre 0 y 10";
    }

    if (!valido) {
        alert(errores);
    }

    return valido;
}

function validarBuscarExam() {
    let idExam = parseInt(frmBuscarExam.txtIdExam.value.trim());
    let temaExamen = frmBuscarExam2.txtTemaExam.value.trim();
    let valido = true;
    let errores = "";
    let variable;

    if (isNaN(idExam) && temaExamen.length == 0) {
        valido = false;
        errores += "No se ha pasado ningun parámetro";
    } else if (!isNaN(idExam) && temaExamen.length != 0) {
        valido = false;
        errores += "No se puede pasar los dos parámetros";
    } else if (isNaN(idExam) && temaExamen.length != 0) {
        valido = true;
        variable = temaExamen;
    } else if (!isNaN(idExam) && temaExamen.length == 0) {
        valido = true;
        variable = idExam;
    }

    if (!valido) {
        // Hay errores
        alert(errores);
    }

    return variable;
}

function validarModExam() {
    // Recuperar datos del formulario frmModificarComponente
    let idExam = frmModificarStudent.txtModIdStudent.value.trim();
    let tema = frmAltaExam.txtTema.value.trim();
    let fecha = frmAltaExam.txtFecha.value.trim();
    let calificacion = frmAltaExam.txtCalificacion.value.trim();
    let idStudent = frmAltaExam.lstStudent.value;

    let valido = true;
    let errores = "";

    if (isNaN(idExam)) {
        valido = false;
        errores += "El identificador del examen no es correcto";
    }

    if (calificacion < 0 || calificacion > 10) {
        valido = false;
        errores += "La calificación debe estar entre 0 y 10";
    }

    // if (tema.length == 0 || fecha.length == 0) {
    //     valido = false;
    //     errores += "El tema y la fecha no pueden estar vacíos";
    // }

    if (!valido) {
        // Hay errores
        alert(errores);
    }

    return valido;
}

/** FIN VALIDACIONES */