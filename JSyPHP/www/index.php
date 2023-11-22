<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@1&family=Roboto+Condensed&family=Signika+Negative:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@200&family=PT+Serif:ital@1&family=Roboto+Condensed&display=swap" rel="stylesheet">

  <!-- Icono del head -->
  <link rel="icon" href="https://i.postimg.cc/PJwRr3CC/logo.jpg" type="image/png">

  <!-- Título de la página -->
  <title>PlantillaBoostrap</title>

  <!-- CSS adicional -->
  <style>
    @import url('css/estilosAdicionales.css');
  </style>
</head>

<body>

  <!-- HEADER NAVBAR -->
  <?php
  include 'php/cabecera.php';
  ?>

  <!-- Separación --> </br>

  <!-- PARTE QUE OFRECEMOS -->
  <div class="container-fluid">
    <div class="container px-4 py-5">
      <h2 class="pb-2 border-bottom">¿Que ofrecemos?</h2>
      <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="feature col">
          <div class="feature-icon bg-primary bg-gradient">
            <img src="images/onlie.jpg" width=" 40" height="40" class="me-2">
          </div>
          <h2>TÍTULO ONLINE</h2>
          <p>Descubre nuestra academia de inglés 100% online, con lecciones interactivas en video impartidas por
            expertos de Cambridge. Aprende de manera flexible y personalizada, elevando tu dominio del idioma desde
            cualquier lugar. ¡Empieza tu viaje hacia el inglés fluido hoy!</p>
        </div>
        </br>
        <div class="feature col">
          <div class="feature-icon bg-primary bg-gradient">
            <img src="images/recursos.jpg" width=" 40" height="40" class="me-2">
          </div>
          <h2>RECURSOS</h2>
          <p>
            Explora un mundo de aprendizaje en nuestra plataforma: desde una amplia biblioteca de videos educativos
            hasta el respaldo de expertos en la materia. Ofrecemos una experiencia completa con soporte integral para
            impulsar tu dominio del inglés. Descubre todo lo que necesitas para alcanzar el éxito lingüístico con
            nosotros.</p>
        </div>
        </br>
        <div class="feature col">
          <div class="feature-icon bg-primary bg-gradient">
            <img src="images/numeroUno.jpg" width=" 40" height="40" class="me-2">
          </div>
          <h2>LO MEJOR DE LO MEJOR</h2>
          <p>
            En 2020, fuimos la página número 1 en enseñanza de inglés, ofreciendo una experiencia educativa líder con
            lecciones innovadoras y un enfoque centrado en el éxito de nuestros estudiantes. Únete a nosotros para
            descubrir por qué elegirnos significa apostar por la excelencia en el aprendizaje del idioma inglés.</p>
        </div>
      </div>
    </div>
  </div>
  <!--FIN PARTE QUE OFRECEMOS -->

  <!-- Separación --> </br>

  <!-- PARTE CON 3 FOTO Y TEXTO -->

  <!-- FOTO Y TEXTO 1 -->
  <div class="container">
    <div class="container-fluid diagonal-container">
      <div class="row">
        <!-- animate__animated animate__fadeInUp añade una animación de fadeIn, animate_delay-1s le da un retardo de 1 segundos -->
        <div class="col-md-6 text-container animate__animated animate__fadeIn animate__delay-1s">
          <h2 class="animate__animated animate__bounce">GRANDES EXPERTOS EN CAMBRIDGE</h2>
          <hr class="my-4 colorHr">
          <!-- animate__animated animate__fadeInUp añade una animación de fadeIn hacia arriba-->
          <p class="animate__animated animate__fadeInUp">Gracias a un meticuloso proceso de selección, hemos estado
            proporcionando clases de <span class="fw-bold">inglés en línea</span> durante
            casi una década, colaborando con los mejores <span class="fw-bold">profesores nativos y bilingües.</span>
          </p>

          <!-- animate__animated animate__fadeInUp añade una animación de fadeIn hacia arriba, animate_delay-1s le da un retardo de 1 segundos -->
          <p class="animate__animated animate__fadeInUp animate__delay-1s">Nuestros instructores poseen la habilidad de
            estructurar el
            curso de manera precisa, ofreciendo
            explicaciones gramaticales <span class="fw-bold">claras y de fácil comprensión</span>. No solo se limitan a
            corregir tus errores, sino
            que también te brindarán la motivación necesaria para estudiar, guiándote por el camino más directo hacia la
            consecución de tu objetivo de aprender inglés o aprobar los exámenes de Cambridge.</p>

          <!-- animate__animated animate__fadeInUp añade una animación de fadeIn hacia arriba, animate_delay-1s le da un retardo de 1 segundos -->
          <p class="animate__animated animate__fadeInUp animate__delay-1s">En nuestra academia, nos enorgullece crear un
            <span class="fw-bold">entorno de
              aprendizaje estimulante y efectivo</span>, donde cada
            estudiante encuentra el apoyo necesario para alcanzar el dominio del idioma inglés con confianza y éxito.
          </p>
        </div>
        <!-- animate__animated animate__fadeInRight añade una animación de fadeIn desde la derecha, animate__delay1-s le da un retado de 1 segundo -->
        <div class="col-md-6 image-container animate__animated animate__fadeInRight animate__delay-1s">
          <!-- La clase 'animate__animated animate__fadeInRight' añade una animación de fadeIn desde la derecha al cargar -->
          <img src="images/profIngles.jpg" alt="Profesor de inglés" class="img-fluid h-75 mx-auto d-block">
        </div>
      </div>
    </div>
  </div>
  <!-- FIN FOTO Y TEXTO 1 -->

  <!-- FOTO Y TEXTO 2 -->
  <div class="container">
    <div class="container-fluid diagonal-container">
      <div class="row">
        <!-- animate__animated animate__fadeInLeft añade una animación de fadeIn desde la izquierda, animate_delay-2s le da un retardo de 2 segundos -->
        <div class="col-md-6 image-container animate__animated animate__fadeInLeft animate__delay-2s">
          <img src="images/inglesVideo.jpeg" alt="Imagen video inglés" class="img-fluid h-75 mx-auto d-block">
        </div>
        <!-- animate__animated animate__fadeI añade una animación de fadeIn, animate_delay-2s le da un retardo de 2 segundos -->
        <div class="col-md-6 text-container animate__animated animate__fadeIn animate__delay-2s">
          <h2 class="animate__animated">APRENDE CON LECCIONES DE VIDEO ONLINE</h2>
          <hr class="my-4 colorHr">
          <!-- animate__animated animate__fadeInUp añade una animación de fadeIn hacia arriba, animate_delay-2s le da un retardo de 2 segundos -->
          <p class="animate__animated animate__fadeInUp">Descubre nuestro innovador enfoque educativo con cursos de
            inglés en línea. <span class="fw-bold">Con 91 lecciones en video</span>, impartidas por un examinador
            oficial de Cambridge, te sumergirás
            en una experiencia única de aprendizaje.
            .</span>
          </p>

          <!-- animate__animated animate__fadeInUp añade una animación de fadeIn hacia arriba, animate_delay-2s le da un retardo de 2 segundos -->
          <p class="animate__animated animate__fadeInUp animate__delay-2s">
            Explora <span class="fw-bold">48 videos que abordan errores comunes en el habla inglesa</span>,
            proporcionando valiosas correcciones y
            orientación. Además, obtén una comprensión profunda de los criterios de evaluación para Speaking y Writing
            en 7 videos especializados.</p>

          <!-- animate__animated animate__fadeInUp añade una animación de fadeIn hacia arriba, animate_delay-2s le da un retardo de 2 segundos -->
          <p class="animate__animated animate__fadeInUp animate__delay-2s">Aumenta tu dominio gramatical con <span class="fw-bold">24 videos
              dedicados a las áreas más desafiantes, y perfecciona la pronunciación con 12 videos enfocados en los
              sonidos
              y palabras más difíciles</span>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- FIN FOTO Y TEXTO 2 -->

  <!-- Separación --> </br>

  <!-- FOTO Y TEXTO 3 -->
  <div class="container">
    <div class="container-fluid diagonal-container">
      <div class="row">
        <!-- animate__animated animate__fadeIn añade una animación de fadeIn -->
        <div class="col-md-6 text-container animate__animated animate__fadeIn animate__delay-3s">
          <!--  -->
          <h2 class="animate__animated">PRÁCTICA CON NUESTROS EXÁMENES</h2>
          <hr class="my-4 colorHr">
          <!-- animate__animated animate__fadeInUp añade una animación de fadeIn hacia arriba-->
          <p class="animate__animated animate__fadeInUp">Explora nuestro curso de inglés Cambridge en línea y sumérgete
            en una preparación completa. <span class="fw-bold">Con acceso a 20 exámenes que replican fielmente el
              formato oficial (Reading,
              Use of English, Writing, Listening, y Speaking)</span>, perfeccionarás cada aspecto de tu habilidad
            lingüística.
          </p>

          <!-- animate__animated animate__fadeInUp añade una animación de fadeIn hacia arriba, animate_delay-3s le da un retardo de 3 segundos -->
          <p class="animate__animated animate__fadeInUp animate__delay-3s">Amplía tus conocimientos con <span class="fw-bold">más de 350
              ejercicios de gramática y vocabulario</span>, que incluyen explicaciones detalladas y desafíos específicos
            como
            Common Mistakes, Spelling, Sentence Transformation, Word Formation, Sentence Construction, Sentence
            Completion, y muchos más.</p>

          <!-- animate__animated animate__fadeInUp añade una animación de fadeIn hacia arriba, animate_delay-3s le da un retardo de 3 segundos -->
          <p class="animate__animated animate__fadeInUp animate__delay-3s">Además, <span class="fw-bold">vive la
              experiencia completa</span> con un
            examen cronometrado (mock exam), simula las condiciones reales del examen y prepárate para el éxito con
            confianza. Con nuestro curso, te ofrecemos el camino hacia la excelencia en el examen Cambridge de una
            manera <span class="fw-bold">única y efectiva</span>.
          </p>
        </div>
        <!-- animate__animated animate__fadeInRight añade una animación de fadeIn desde la derecha -->
        <div class="col-md-6 image-container animate__animated animate__fadeInRight animate__delay-3s">
          <img src="images/examenesIngles.jpeg" alt="Imagen exámenes ingléss" class="img-fluid h-75 mx-auto d-block">
        </div>
      </div>
    </div>
  </div>
  <!-- FIN FOTO Y TEXTO 3 -->
  <!--FIN PARTE 3 FOTOS Y TEXTO -->

  <!-- Separación --> </br></br>

  <!-- PARTE DE PRECIOS -->
  <div class="container card">
    </br>
    <h1 class="display-6 text-center mb-4">Precios</h1>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Gratis</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">0€<small class="text-muted fw-light">/mes</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>A1 y A2 incluido</li>
              <li>Acceso a 3 videos por semana</li>
              <li>Soporte</li>
              <li>Tiempo por dia de 2h</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg colorTextoBoton">Sign up for free</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Avanzado</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">15€<small class="text-muted fw-light">/mes</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>B1 Y B2 incluido</li>
              <li>Acceso a todos los videos de A1, A2, B1 Y B2</li>
              <li>Chat instantáneo con expertos</li>
              <li>Soporte prioritario</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Experto</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">30€<small class="text-muted fw-light">/mes</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>C1 Y C2 incluido</li>
              <li>Acceso a todos los videos + EXTRAS</li>
              <li>Chat instantáneo con nativos y expertos</li>
              <li>Soporte prioritario y personalizado para ti</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN PARTE DE PRECIOS -->

    <!-- PARTE COMPARACION DE PLANES -->
    <h2 class="display-6 text-center mb-4">Comparar planes</h2>

    <div class="table-responsive card">
      <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th style="width: 22%;">Gratis</th>
            <th style="width: 22%;">Avanzado</th>
            <th style="width: 22%;">Experto</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-start">Lecciones incluidas</th>
            <td>A1 Y A2</td>
            <td>B1 Y B2</td>
            <td>C1 Y C2</td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Certificados incluidos</th>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
              </svg></td>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
              </svg></td>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
              </svg></td>
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope="row" class="text-start">Acceso a videos</th>
            <td>3 x semana</td>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
              </svg></td>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
              </svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Chat</th>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
              </svg></td>
            <td>Con expertos</td>
            <td>Con nativos y expertos</td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Soporte</th>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
              </svg></td>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
              </svg></td>
            <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
              </svg></td>
          </tr>
        </tbody>
      </table>
    </div>
    </br></br>
  </div>
  <!-- FIN PARTE COMPARACION DE PLANES -->

  <!-- Separación --> </br></br>

  <!-- PARTE DE RESEÑAS -->
  <h1 class="display-6 text-center mb-4">RESEÑAS</h1>
  <div id="valoracionCarousel" class="carousel slide container" data-ride="carousel" data-interval="false">
    <div class="carousel-inner">

      <!-- RESEÑA 1 -->
      <div class="carousel-item active">
        <div class="valoracion-container">
          <img src="images/persona1.png" alt="User" class="valoracion-image">
          <div class="testimonial-stars">
            ★★★★★
          </div>
          <p class="valoracion-comment">
            "Excelente academia, profesores dedicados y método efectivo. Mi experiencia de aprendizaje ha sido muy
            positiva, lo recomiendo."
          </p>
        </div>
      </div>

      <!-- RESEÑA 2 -->
      <div class="carousel-item">
        <div class="valoracion-container">
          <img src="images/persona2.png" alt="User" class="valoracion-image">
          <div class="valoracion-stars">
            ★★★★☆
          </div>
          <p class="valoracion-comment">
            "Excelente academia, profesores altamente cualificados. El enfoque personalizado hace que las clases sean
            dinámicas y efectivas. Muy recomendada, ¡una experiencia de aprendizaje de inglés de calidad!"
          </p>
        </div>
      </div>

      <!-- RESEÑA 3 -->
      <div class="carousel-item">
        <div class="valoracion-container">
          <img src="images/persona3.png" alt="User" class="valoracion-image">
          <div class="valoracion-stars">
            ★★★★★
          </div>
          <p class="valoracion-comment">
            "La calidad de enseñanza es sobresaliente, ambiente amigable y clases adaptadas. Aprendizaje efectivo y
            resultados visibles desde el inicio. Muy satisfecho con mi progreso."
          </p>
        </div>
      </div>
    </div>

    <a class="carousel-control-prev" href="#valoracionCarousel" role="button" data-slide="prev">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
        <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
      </svg>
    </a>
    <a class="carousel-control-next" href="#valoracionCarousel" role="button" data-slide="next">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
        <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
      </svg>
    </a>
  </div>
  <!-- FIN PARTE DE VALORACIONES -->

  <!-- FOOTER -->
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24">
            <use xlink:href="#bootstrap"></use>
          </svg>
        </a>
        <span class="mb-3 mb-md-0 text-muted">© 2023 MengoAcademy, Inc</span>
      </div>
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
            </svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
              <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z" />
            </svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
            </svg></a></li>
      </ul>
    </footer>
  </div>
  <!-- FIN FOOTER -->

  <!-- SCRIPTS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- FIN SCRIPTS -->
</body>

</html>