<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciber Ascent</title>
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php
      session_start();
    ?>
    <header>
        <div class="logo">
            <a href="inicio.html"><img src="img/logo.png" alt="logo de CiberAscent"> </a>
        </div>
        <div class="derecha">
          <div class="iniciar-sesion">
            <a class="login" href="Login.php">Iniciar Sesión</a>
        </div>        
            <div class="hamburguesa"><button id="abrir" class="abrir-menu">&#9776;</button></div> <!-- Icono menú hamburguesa -->
        </div>
        
        <nav id="nav" class="nav">
            <button id="cerrar" class="cerrar-menu">&times;</button> <!-- Botón para cerrar el menú -->
            <ul class="nav-list">
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="cursos.php">Cursos</a></li>
                <li><a href="suscripciones.php">Suscripciones</a></li>
                <li><a href="recursos.php">Recursos</a></li>
                <li><a href="quienes-somos.php">Quiénes somos</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
      <div class="introduccion i1">
        <video autoplay muted loop class="background-video">
            <source src="video/global-tech.mp4" type="video/mp4">
            Tu navegador no soporta la reproducción de video.
        </video>
      <div class="titulo-texto">
        <div class="titulo">
            <h1>CIBER ASCENT</h1>
        </div>
        <div class="texto">
            <p>Asciende al siguiente nivel, la cumbre digital te espera</p>
      </div>
      </div>
        <div class="btn">
            <button>Empezar</button>
        </div>            
    </div>
    
    <section class="motivos">
      <div class="titulo"><h1>¿Por qué elegirnos?</h1></div>
      <div class="container-badges">
          <div class="column">
              <span class="badge"><i class="fa-solid fa-user-graduate"></i> Cursos diseñados por profesionales</span>
              <span class="badge"><i class="fa-solid fa-star"></i> Calidad que marca la diferencia</span>
              <span class="badge"><i class="fa-solid fa-clock"></i> Aprendizaje accesible en cualquier momento</span>
          </div>
          <div class="column">
              <span class="badge"><i class="fa-solid fa-dollar-sign"></i> Educación a precios competitivos</span>
              <span class="badge"><i class="fa-solid fa-book-open"></i> Amplia oferta de cursos especializados</span>
              <span class="badge"><i class="fa-solid fa-certificate"></i> Certificaciones que impulsan tu carrera</span>
          </div>
      </div>
  </section>
  

        
        <section class="destacados">
            <div class="titulo"><h2>CURSOS DESTACADOS</h2></div>
            <div class="container-cursos">
                <div class="curso">
                    <img src="img/curso1.jpg" alt="Curso 1" class="curso-imagen">
                    <h3>Curso de Ciberseguridad</h3>
                    <p class="descripcion">Aprende los conceptos básicos de ciberseguridad.</p>
                    <button class="btn-mas-info">Más Información</button>
                </div>
                <div class="curso">
                    <img src="img/curso2.jpg" alt="Curso 2" class="curso-imagen">
                    <h3>Curso de Redes CCNA</h3>
                    <p class="descripcion">Prepara tu certificación CCNA con nosotros.</p>
                    <button class="btn-mas-info">Más Información</button>
                </div>
                <div class="curso">
                    <img src="img/curso3.jpg" alt="Curso 3" class="curso-imagen">
                    <h3>Curso de Python</h3>
                    <p class="descripcion">Inicia tu carrera de programación con Python.</p>
                    <button class="btn-mas-info">Más Información</button>
                </div>
            </div>
        </section>
        
        <section class="valoraciones">
            <h2>Valoraciones</h2>
            <div class="valoraciones-container">
              
              <div class="valoracion">
                <i class="fa-solid fa-quote-left"></i>
                <p>Ciber Ascent ha transformado mi visión sobre la educación en línea. Sus cursos de ciberseguridad son impartidos por profesionales con experiencia real en la industria. Gracias a ellos, he podido avanzar en mi carrera de manera significativa.</p>
                <div class="autor">
                  <img src="img/vegetta.jpg" alt="Autor 1">
                  <div>
                    <h3>Samuel de Luque</h3>
                    <p class="puesto">Director de Transformación Digital en Grupo Planeta</p>
                  </div>
                </div>
              </div>
          
              <div class="valoracion">
                <i class="fa-solid fa-quote-left"></i>
                <p>Al principio, tenía dudas sobre la educación en línea, pero Ciber Ascent cambió mi perspectiva. Sus cursos son flexibles y se adaptan a mi horario. He aprendido tanto en poco tiempo, ¡y todo sin salir de casa!</p>
                <div class="autor">
                  <img src="img/lana.jpg" alt="Autor 2">
                  <div>
                    <h3>Lana Rueda</h3>
                    <p class="puesto">Experta en belleza y fitness facial</p>
                  </div>
                </div>
              </div>
          
              <div class="valoracion">
                <i class="fa-solid fa-quote-left"></i>
                <p>Ciber Ascent ha transformado mi visión sobre la educación en línea. Sus cursos de ciberseguridad son impartidos por profesionales con experiencia real en la industria. Gracias a ellos, he podido avanzar en mi carrera de manera significativa.</p>
                <div class="autor">
                  <img src="img/illojuan.jpg" alt="Autor 3">
                  <div>
                    <h3>Juan Alberto</h3>
                    <p class="puesto">Psicólogo y coach deportivo</p>
                  </div>
                </div>
              </div>
          
              <div class="valoracion">
                <i class="fa-solid fa-quote-left"></i>
                <p>Gracias a Ciber Ascent, he encontrado excelentes recursos que me han permitido enriquecer mis clases de programación web. Las herramientas y el contenido son de gran ayuda para mis estudiantes.</p>
                <div class="autor">
                  <img src="img/arthur.webp" alt="Autor 4">
                  <div>
                    <h3>Arthur Morgan</h3>
                    <p class="puesto">Consultor de Marketing Digital</p>
                  </div>
                </div>
              </div>
          
              <div class="valoracion">
                <i class="fa-solid fa-quote-left"></i>
                <p class="puesto">Los cursos de ciberseguridad de Ciber Ascent me han proporcionado conocimientos clave que he podido aplicar en mi trabajo. Sin duda, son una gran inversión para quienes buscan estar al día en el mundo digital</p>
                <div class="autor">
                  <img src="img/tuco.jpg" alt="Autor 5">
                  <div>
                    <h3>Tuco Bejarano</h3>
                    <p>Creador de contenido digital</p>
                  </div>
                </div>
              </div>
          
            </div>
          </section>
          

    </main>

    <footer class="footer">
        <img src="img/logo.png" alt="logo" class="footer-logo">
        <nav class="footer-menu">
           <a href="inicio.php">Inicio</a>
           <a href="cursos.php">Cursos</a>
           <a href="suscripciones.php">Suscripciones</a>
           <a href="recursos.php">Recursos</a>
           <a href="quienes-somos.php">Quienes somos</a>
           <a href="contacto.php">Contacto</a>
        </nav>
        <p class="footer-copyright">© 2024 Ciber Corrida</p>
    </footer>
    
    

    <script src="js/index.js"></script>
</body>
</html>
