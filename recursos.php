<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<header>
    <div class="logo">
        <img src="img/logo.png" alt="logo de CiberAscent">
    </div>
    <div class="derecha">
        <button class="login" href="login.php">Iniciar Sesión</button>
        <button id="abrir" class="abrir-menu">&#9776;</button>
    </div>

    <nav id="nav" class="nav">
        <button id="cerrar" class="cerrar-menu">&times;</button>
        <ul class="nav-list">
            <li><a href="inicio.html">Inicio</a></li>
            <li><a href="cursos.html">Cursos</a></li>
            <li><a href="suscripciones.html">Suscripciones</a></li>
            <li><a href="recursos.html">Recursos</a></li>
            <li><a href="quienes-somos.html">Quiénes somos</a></li>
            <li><a href="contacto.html">Contacto</a></li>
        </ul>
    </nav>
</header>

<main>
    <div class="introduccion i3">
        <div class="titulo"><h1>Recursos</h1></div>
    </div>

    <!-- Herramientas -->
    <div class="herramientas">
        <div class="titulo"><h2>Herramientas</h2></div>
        <div class="container-videos">
            <div class="video">
                <a href="https://youtu.be/Kp4Mvapo5kc?si=Px-gCaJ14jU8eusE" target="_blank">
                    <img src="https://img.youtube.com/vi/Kp4Mvapo5kc/0.jpg" alt="Video 1">
                </a>
                <p>Video 1: Introducción a las herramientas básicas.</p>
            </div>
            <div class="video">
                <a href="https://youtu.be/qwA6MmbeGNo?si=3GlP_Sj4aZgvxjm9" target="_blank">
                    <img src="https://img.youtube.com/vi/qwA6MmbeGNo/0.jpg" alt="Video 2">
                </a>
                <p>Video 2: Uso avanzado de las herramientas.</p>
            </div>
            <div class="video">
                <a href="https://youtu.be/fNzpcB7ODxQ?si=atkSdFw6Yopjo6AS" target="_blank">
                    <img src="https://img.youtube.com/vi/fNzpcB7ODxQ/0.jpg" alt="Video 3">
                </a>
                <p>Video 3: Integración de las herramientas en proyectos.</p>
            </div>
        </div>
    </div>

    <!-- Enlaces -->
    <div class="enlaces">
        <div class="titulo"><h2>Enlaces</h2></div>
        <div class="container-links">
            <div class="enlace">
                <h3>HTML6</h3>
                <p>HTML6 es una versión futura del lenguaje de marcado HTML, y aunque aún no ha sido lanzada oficialmente, este sitio proporciona información, documentación y ejemplos de las posibles características que podrían introducirse en esta nueva versión. Aquí se pueden encontrar conceptos experimentales y discusiones sobre posibles mejoras respecto a HTML5, incluyendo nuevas etiquetas, atributos y estructuras para optimizar el desarrollo web.</p>
                <a href="https://www.html6.es/" target="_blank">
                    <button>Visitar</button>
                </a>
            </div>
            <div class="enlace">
                <h3>Flask</h3>
                <p>Microframework para Python ampliamente utilizado para desarrollar aplicaciones web ligeras y escalables. Este enlace lleva a la guía oficial del proyecto Flask, donde se proporciona una documentación exhaustiva sobre cómo utilizar sus principales características, tales como enrutamiento, plantillas, gestión de formularios, autenticación y conexión con bases de datos. Es una fuente de referencia confiable para desarrolladores de todos los niveles que buscan construir aplicaciones web utilizando Python.</p>
                <a href="https://flask.palletsprojects.com/en/3.0.x/" target="_blank">
                    <button>Visitar</button>
                </a>
            </div>
            <div class="enlace">
                <h3>10015.io</h3>
                <p>una colección de herramientas en línea gratuitas pensadas para desarrolladores y creadores de contenido. Ofrece una variedad de utilidades que pueden facilitar tareas como la edición de imágenes, la conversión de archivos, el desarrollo de código, la creación de gráficos, y más. Es una plataforma muy útil para quienes buscan agilizar su flujo de trabajo sin necesidad de instalar software adicional, y todas las herramientas están disponibles directamente desde el navegador</p>
                <a href="https://10015.io/" target="_blank">
                    <button>Visitar</button>
                </a>
            </div>
            <div class="enlace">
                <h3>W3Schools</h3>
                <p> es uno de los sitios web de referencia más populares para aprender desarrollo web. Ofrece tutoriales detallados, ejemplos prácticos y ejercicios interactivos en una variedad de temas, incluyendo HTML, CSS, JavaScript, SQL, Python y muchos más. Es una excelente fuente para aprender los fundamentos del desarrollo web, y también para obtener una visión general de tecnologías avanzadas. Su enfoque educativo es accesible tanto para principiantes como para desarrolladores avanzados.</p>
                <a href="https://www.w3schools.com/" target="_blank">
                    <button>Visitar</button>
                </a>
            </div>
        </div>
    </div>

    <!-- Repositorios -->
    <div class="repositorios">
        <div class="titulo"><h2>Repositorios</h2></div>
        <div class="container-badges">
            <div class="badge">
                <i class="fa-brands fa-github"></i>
                <a href="https://github.com/s4vitar" target="_blank">Repositorio de S4vitar</a>
            </div>
            <div class="badge">
                <i class="fa-brands fa-github"></i>
                <a href="https://github.com/Maalfer" target="_blank">Repositorio de Maalfer</a>
            </div>
        </div>
    </div>
</main>

<footer class="footer">
    <img src="img/logo.png" alt="logo" class="footer-logo">
    <nav class="footer-menu">
       <a href="inicio.html">Inicio</a>
       <a href="cursos.html">Cursos</a>
       <a href="suscripciones.html">Suscripciones</a>
       <a href="recursos.html">Recursos</a>
       <a href="quienes-somos.html">Quienes somos</a>
       <a href="contacto.html">Contacto</a>
    </nav>
    <p class="footer-copyright">© 2024 Ciber Corrida</p>
</footer>



<script src="js/index.js"></script>
</body>
</html>
