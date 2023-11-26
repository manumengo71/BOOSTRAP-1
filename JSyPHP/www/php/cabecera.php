<!-- HEADER NAVBAR -->
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
                    <li class="nav-item dropdown"><a href="#" id="cambiarNombre2" class="nav-link px-2 text-white dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cursos</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" id="txtNav2">Alta de estudiante</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#" id="txtNav5">Buscar un estudiante</a></li>
                            <li><a class="dropdown-item" href="#" id="txtNav4">Listar estudiantes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a href="#" id="cambiarNombre3" class="nav-link px-2 text-white dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Precios</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" id="txtNav3">Alta de examen</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#" id="txtNav1">Buscar un examen</a></li>
                            <li><a class="dropdown-item" href="#" id="txtNav6">Listar examenes</a></li>
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

        if (currentUrl.includes("http://localhost/programaInterno.php")) {
            document.getElementById("cambiarNombre2").innerText = "Estudiantes";
            document.getElementById("cambiarNombre3").innerText = "Examenes";
        }
    });
</script>