<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APLICACION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>
    <header class="p-3 bg-dark text-white">
        <nav>
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                        <img src="images/logo.jpeg" alt="" width="45" height="40" class="me-2">
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <!-- Botón para volver al landpage -->
                        <li><a href="/" class="nav-link px-2 text-secondary">Home</a></li>
                        <li class="nav-item dropdown"><a href="#" id="cambiarNombre2" class="nav-link px-2 text-white dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Estudiantes(NO se hace)</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" id="">Alta de estudiante</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#" id="">Buscar un estudiante</a></li>
                                <li><a class="dropdown-item" href="#" id="">Listar estudiantes</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a href="#" id="cambiarNombre3" class="nav-link px-2 text-white dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Examenes</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="alta_examen.php" id="">Alta de examen</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="buscar_examen.php" id="">Buscar examenes</a></li>
                                <li><a class="dropdown-item" href="listado_examenes.php" id="">Listar examenes</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">About</a></li>
                    </ul>

                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                        <input type="search" class="form-control form-control-dark" placeholder="Buscar palabras claves..." aria-label="Search">
                    </form>

                    <div class="text-end">
                        <button type="button" class="btn btn-outline-light me-2" onclick="window.location.href='index.php'">Acceso usuario</button>
                        <!-- Botón para abrir la segunda parte de la practica utilzando javascript -->
                        <button type="button" class="btn btn-warning" onclick="window.location.href='programaInterno.php'">Acceso admin</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var currentUrl = window.location.href;

            if (currentUrl.includes("http://localhost/index.php")) {
                document.getElementById("cambiarNombre2").innerText = "Cursos";
                document.getElementById("cambiarNombre3").innerText = "Precios";
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html><!-- HEADER NAVBAR -->