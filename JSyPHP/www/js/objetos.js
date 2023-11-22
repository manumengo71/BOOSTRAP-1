 
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
}