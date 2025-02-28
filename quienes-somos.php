<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CiberAscent</title>
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
        
        <div class="introduccion i4">
            <video autoplay muted loop class="background-video">
                <source src="video/oficina1.mp4" type="video/mp4">
                Tu navegador no soporta la reproducción de video.
            </video>
            <div class="titulo"><h1>Escalando juntos hacia la cima digital</h1></div>
            <div class="subtitulo"><p> Te equipamos con las herramientas necesarias para alcanzar nuevas alturas en el mundo de la informática</p></div>
        </div>
         
        <div class="contenedor-mision">
            <div class="texto-mision">
                <h2>Nuestra Misión</h2>
                <p>
                    En CiberAscent, ayudamos a cada estudiante a liberar su potencial en el mundo digital. Nos comprometemos a proporcionar
                    cursos accesibles y de alta calidad, equipando a nuestros alumnos con conocimientos prácticos y habilidades esenciales
                    para prosperar en un entorno en constante cambio. Enfrentamos los desafíos de la tecnología juntos, ofreciendo herramientas 
                    y recursos que hacen posible alcanzar el éxito.
                </p>
                <p><strong>Creemos que el riesgo no debe frenar tu crecimiento, sino impulsarlo.</strong></p>
                <p>
                    Nos esforzamos no solo por enseñar, sino por asegurar que nuestros estudiantes logren resultados tangibles. A través de 
                    una comunidad de aprendizaje colaborativa, proporcionamos apoyo constante y experiencias personalizadas. Confía en 
                    CiberAscent para acompañarte en tu camino hacia el crecimiento y la rentabilidad en el ámbito tecnológico.
                </p>
            </div>
            <div class="imagen-mision">
                <img src="img/estudiante1.jpg" alt="Imagen de la misión de CiberAscent">
            </div>
        </div>


        <div class="contenedor-valores">
            <div class="titular">
                <h2>Nuestros valores</h2>
                <p>En lo que creemos</p>
            </div>
            <div class="valores">

                <div class="fila">
                    <div class="valor">
                        <div class="iconito"><i class="fa-solid fa-graduation-cap"></i></div>
                        <div class="titulo"><h2>Educación</h2></div>
                        <div class="textito"><p>Brindar conocimiento práctico y recursos que faciliten un aprendizaje continuo, adaptado a los desafíos del mundo digital actual.</p></div>
                    </div>
                    <div class="valor">
                        <div class="iconito"><i class="fa-solid fa-lightbulb"></i></div>
                        <div class="titulo"><h2>Innovación</h2></div>
                        <div class="textito"><p>Fomentar la creatividad y el pensamiento innovador, integrando las últimas tendencias tecnológicas en cada programa educativo.</p></div>
                    </div>
                    <div class="valor">
                        <div class="iconito"><i class="fa-solid fa-user-group"></i></div>
                        <div class="titulo"><h2>Colaboración</h2></div>
                        <div class="textito"><p>Crear una comunidad de aprendizaje activa y solidaria, donde la colaboración y el apoyo mutuo sean valores esenciales.</p></div>
                    </div>
                </div>

                <div class="fila">
                    <div class="valor">
                        <div class="iconito"><i class="fa-solid fa-hand-holding-heart"></i></div>
                        <div class="titulo"><h2>Inclusión</h2></div>
                        <div class="textito"><p>Promover el acceso igualitario a la educación, diseñando experiencias inclusivas que abarquen la diversidad de todos los estudiantes.</p></div>
                    </div>
                    <div class="valor">
                        <div class="iconito"><i class="fa-solid fa-star"></i></div>
                        <div class="titulo"><h2>Excelencia</h2></div>
                        <div class="textito"><p>Ofrecer contenidos de alta calidad que garanticen una formación valiosa y aplicable para cada estudiante.</p></div>
                    </div>
                    <div class="valor">
                        <div class="iconito"><i class="fa-solid fa-scale-unbalanced-flip"></i></div>
                        <div class="titulo"><h2>Ética</h2></div>
                        <div class="textito"><p>Promover la responsabilidad y la integridad en la enseñanza de la tecnología, alentando prácticas digitales éticas y responsables.</p></div>
                    </div>

                </div>

            </div>

        </div>
        
        
        <div class="container-eleccion">
            <div class="intro-numeros">
                <h1>Resultados que hablan por sí mismos</h1>
                <p>
                    En un mundo digital en constante cambio, los resultados reflejan adaptabilidad y aprendizaje continuo. Nuestros profesionales combinan habilidades técnicas con una mentalidad innovadora.
                </p>
            </div>
           
            <div class="caja-numero">
                <div class="numeros">
                    <h1>80%</h1>
                    <p>El 80% de empleos requiere conocimientos informáticos básicos</p>
                </div>
                <div class="numeros">
                    <h1>90d</h1>
                    <p>La mayoria de estudiantes dominan habilidades nuevas en solo tres meses</p>
                </div>
                <div class="numeros">
                    <h1>9/10</h1>
                    <p>Nueve de cada diez mejoran sus oportunidades laborales.</p>
                </div>
                <div class="numeros">
                    <h1>100K</h1>
                    <p>Más de 100,000 estudiantes han completado nuestros cursos</p>
                </div>
            </div>
        </div>


        <div class="titulo-team">Conoce a nuestro equipo humano</div>
        <div class="team">
            <div class="miembro">
                <div class="persona"><img src="img/estudiante1.jpg" alt="Abhijeet Kaldate"></div>
                <h3>Azan Umar</h3>
                <p class="puesto"> Desarrollador Front-End</p>
                <div class="descripcion">Azan se encarga de crear interfaces atractivas y responsivas usando HTML, CSS y JavaScript. Su enfoque es mejorar la experiencia de usuario y el diseño visual en cada proyecto.</div>
            </div>
            <div class="miembro">
                <div class="persona"><img src="img/estudiante2.jpg" alt="Sujay Pawar"></div>
                <h3>Nelson Bejarano</h3>
                <p class="puesto">Desarrollador Back-End</p>
                <div class="descripcion">Nelson maneja la lógica del servidor y bases de datos para asegurar un funcionamiento eficiente. Con experiencia en Python y SQL, hace que las aplicaciones sean rápidas y seguras.</div>
            </div>
        </div>
        


        <div class="metodo">
    <div class="titulo">Método de enseñanza</div>
    <div class="contenido-metodo">
        <div class="texto">
            <p>
                Nuestro método de enseñanza se basa en el aprendizaje activo, combinando teoría y práctica para maximizar la comprensión y retención del conocimiento. Ofrecemos cursos flexibles y accesibles en línea, permitiendo a los estudiantes aprender a su propio ritmo. Nuestro enfoque incluye recursos didácticos actualizados, soporte personalizado de instructores, y evaluaciones prácticas que preparan a los estudiantes para los desafíos del mercado laboral. 
            </p>
        </div>
        <div>
            <img src="img/rb_2149461806.png" alt="">
        </div>
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
</body>
</html>
