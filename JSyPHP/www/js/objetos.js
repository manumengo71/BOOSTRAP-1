
// En mi base de datos llamada academiaIngles hay: {Tabla "students" -> student_id(PK), student_name(varchar de 50), student_birthdate(date), student_number(varchar de 9)}

class Student {
    constructor(id, name, birthdate, number) {
        this.id = id;
        this.name = name;
        this.birthdate = birthdate;
        this.number = number;
    }

    async altaStudent(oStudent) {
        let datos = new FormData();

        datos.append("nombre", oStudent.name);
        datos.append("cumpleaños", oStudent.birthdate);
        datos.append("numero", oStudent.number);

        let respuesta = await peticionPOST("alta_student.php", datos);

        return respuesta;
    }

    async listadoStudents() {
        let listado = "";

        let respuesta = await peticionGET("listado_students.php", new FormData());

        if (respuesta.error) {
            listado = respuesta.mensaje;
        } else {
            listado = "<table class='table table-striped'>";
            listado += "<thead><tr><th>ID ESTUDIANTE</th><th>NOMBRE</th><th>CUMPLEAÑOS</th><th>NÚMERO</th></tr></thead>";
            listado += "<tbody>";

            for (let student of respuesta.datos) {
                listado += "<tr><td>" + student.student_id + "</td>";
                listado += "<td>" + student.student_name + "</td>";
                listado += "<td>" + student.student_birthdate + "</td>";
                listado += "<td>" + student.student_number + "</td></tr>";
            }
            listado += "</tbody></table>";
        }

        return listado;
    }

    async buscarStudent(idStudent) {
        let datos = new FormData();

        datos.append("idstudent", idStudent);

        let respuesta = await peticionPOST("buscar_student.php", datos);

        return respuesta;
    }

    async borrarStudent(idStudent) {
        let datos = new FormData();

        datos.append("idstudent", idStudent);

        let respuesta = await peticionPOST("borrar_student.php", datos);

        return respuesta;
    }

    async modificarStudent(oStudent) {
        let datos = new FormData();

        // Se podría pasar campo a campo al servidor
        // pero en esta ocasión vamos a pasar todos los datos 
        // en un solo parámetro cuyos datos van en formato JSON
        datos.append("student", JSON.stringify(oStudent));

        let respuesta = await peticionPOST("modificar_student.php", datos);

        return respuesta;
    }
}

class Exam {
    constructor(id, subject, date, qualification, student_id) {
        this.id = id;
        this.subject = subject;
        this.date = date;
        this.qualification = qualification;
        this.student_id = student_id;
    }

    async altaExam(oExams) {
        let datos = new FormData();

        datos.append("tema", oExams.subject);
        datos.append("fecha", oExams.date);
        datos.append("califiacion", oExams.qualification);
        datos.append("idstudent", oExams.student_id);

        let respuesta = await peticionPOST("alta_exam.php", datos);

        return respuesta;
    }

    async get_idstudents() {
        let datos = new FormData();
        let respuesta = await peticionPOST("get_idstudents.php", datos);
        return respuesta;
    }
}