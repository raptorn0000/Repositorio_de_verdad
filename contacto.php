<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <header>
        <div class="logo">
            <a href="inicio.html"><img src="img/logo.png" alt="logo de CiberAscent"> </a>
        </div>
        <div class="derecha">
          <div class="iniciar-sesion">
            <a class="login" href="Login.html">Iniciar Sesión</a>
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
        <div class="container">
            <div class="texto-informativo">
                <h2>Conéctate con Nosotros: ¡Escríbenos!</h2>
                <p>En CiberAscent, estamos comprometidos en ofrecerte los mejores cursos de informática, diseñados para ayudarte a adquirir habilidades prácticas y avanzadas en áreas clave del sector tecnológico.</p>
            
                <p>Nuestro catálogo de cursos cubre una amplia gama de temas, como:</p>
                <ul>
                    <li>Programación y desarrollo de software</li>
                    <li>Ciberseguridad y protección de datos</li>
                    <li>Inteligencia artificial y machine learning</li>
                    <li>Administración de bases de datos</li>
                    <li>Desarrollo web y aplicaciones móviles</li>
                </ul>
            
                <p>Si tienes alguna duda sobre nuestros cursos, el contenido, o necesitas asesoría para elegir el curso adecuado para ti, no dudes en contactarnos a través del formulario a la derecha. ¡Nuestro equipo estará encantado de ayudarte!</p>
            
                <!-- Sección de Redes Sociales -->
                <div class="redes-sociales">
                    <a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                </div>
            </div>
            
            <!-- Sección Formulario de Contacto -->
            <div class="formulario">
                <h2>Contáctanos</h2>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre completo" required>
                    </div>
    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Ingresa tu correo electrónico" required>
                    </div>
    
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" id="telefono" name="telefono" placeholder="Ingresa tu número de teléfono" required>
                    </div>
    
                    <div class="form-group">
                        <label for="asunto">Asunto</label>
                        <select id="asunto" name="asunto" required>
                            <option value="">Selecciona una opción</option>
                            <option value="consulta">Consulta</option>
                            <option value="soporte">Soporte técnico</option>
                            <option value="feedback">Feedback</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
    
                    <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" rows="5" placeholder="Escribe tu mensaje aquí" required></textarea>
                    </div>
    
                    <button type="submit" class="btn-enviar">Enviar Mensaje</button>
                </form>
            </div>
        </div>
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
</html>
