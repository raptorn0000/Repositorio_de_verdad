<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <header>
        <div class="logo">
            <img src="img/logo.png" alt="logo de CiberAscent"> 
        </div>
        <div class="derecha">
            <button class="login" href="login.php">Iniciar Sesión</button> 
            <button id="abrir" class="abrir-menu">&#9776;</button> <!-- Icono menú hamburguesa -->
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
    <div class="intro cursos">
        <h1>Cursos</h1>
    </div>

    <section class="buscador">
        <input type="text" placeholder="Buscar cursos..." id="buscador">
    </section>
    
    <div class="Cursos">
        <div class="curso">Desarrollo Web</div>
        <div class="curso">Inteligencia Artificial</div>
        <div class="curso">Ciberseguridad</div>
        <div class="curso">Bases de Datos</div>
        <div class="curso">Machine Learning</div>
        <div class="curso">Marketing Digital</div>
        <div class="curso">Python para Principiantes</div>
        <div class="curso">Analítica de Datos</div>
    </div>
    

        <section class="recomendaciones">
            <h3>Recomendaciones</h3>
            <div class="ciber-redes">
                <div class="recoomendacion"></div>
                <div class="recomendacion"></div>
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
</html>