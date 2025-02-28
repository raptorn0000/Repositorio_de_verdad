<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suscripciones</title>
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
        <div class="introduccion i2">
            <video autoplay muted loop class="background-video">
                <source src="video/grafico.mp4" type="video/mp4">
                Tu navegador no soporta la reproducción de video.
            </video>
            <h1 class="titulo">Suscripciones</h1>
        </div>
        
        <div class="planes-container">
            <h1 class="titulo-planes">Elige tu plan</h1>
            <div class="planes">
                <div class="plan">
                    <div class="tipo"><h2 class="platita">Plata</h2></div>
                    <div class="ventajas">
                        <ul>
                            <li><i class="fa-sharp fa-regular fa-circle-check"></i> Acceso a todos los cursos</li>
                            <li><i class="fa-sharp fa-regular fa-circle-check"></i> Soporte en Discord</li>
                            <li><i class="fa-sharp fa-regular fa-circle-check"></i> Canales exclusivos</li>
                            <li><i class="fa-sharp fa-regular fa-circle-check"></i> Material de lectura complementaria</li>
                            <li><i class="fa-sharp fa-regular fa-circle-check"></i> Acceso a recursos</li>
                        </ul>
                    </div>
                    
                    <div class="pago-plata">$14.99/mes</div>
                    <button class="boton-suscribirse plata">Suscribirse</button>

                </div>

                <div class="plan">
                    <div class="tipo"><h2 class="orito">Oro</h2></div>
                    <div class="ventajas">
                        <ul>
                            <li><i class="fa-sharp fa-regular fa-circle-check"></i>Todas las ventajas de Plata</li>
                            <li><i class="fa-sharp fa-regular fa-circle-check"></i>Reuniones en grupo</li>
                            <li><i class="fa-sharp fa-regular fa-circle-check"></i>Canales de voz exclusivos</li>
                            <li><i class="fa-sharp fa-regular fa-circle-check"></i>Recursos descargables</li>
                            <li><i class="fa-sharp fa-regular fa-circle-check"></i>Acceso anticipado a nuevos cursos</li>
                        </ul>
                    </div>
                    <div class="pago-oro">$59.99/mes</div>
                    <button class="boton-suscribirse oro">Suscribirse</button>
                </div>

                <div class="plan">
                    <div class="tipo"><h2 class="diamantito">Diamante</h2></div>
                    <div class="ventajas">
                        <ul>
                            <li><i class="fa-sharp fa-regular fa-circle-check"></i>Todas las ventajas de Oro</li>
                            <li><i class="fa-sharp fa-regular fa-circle-check"></i>Tutorías personalizadas</li>
                            <li><i class="fa-sharp fa-regular fa-circle-check"></i>Soporte prioritario</li>
                            <li><i class="fa-sharp fa-regular fa-circle-check"></i>Certificación avanzada</li>
                            <li><i class="fa-sharp fa-regular fa-circle-check"></i>Acceso a grupos de estudio en Discord</li>
                        </ul>
                    </div>
                    <div class="pago-diamond">$199.99/mes</div>
                    <button class="boton-suscribirse diamante">Suscribirse</button>
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
