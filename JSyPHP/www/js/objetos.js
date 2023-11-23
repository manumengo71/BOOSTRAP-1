
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
}