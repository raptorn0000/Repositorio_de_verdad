<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - CiberAscent</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <div class="logo">
        <a href="inicio.php"><img src="img/logo.png" alt="logo de CiberAscent"></a>
    </div>
</header>

<main>
    <h2>Registro de Usuario</h2>
    <form action="registro.php" method="post">
        <label for="username">Nombre de usuario:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" name="register">Registrarse</button>
    </form>

    <?php
    include 'db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Hashea la contraseña
        $email = $_POST['email'];
    
        $sql = "INSERT INTO usuarios (username, password, email) VALUES (?, ?, ?)";
        $params = [$username, $password, $email];
        $stmt = sqlsrv_query($conn, $sql, $params);
    
        if ($stmt) {
            echo "Registro exitoso.";
        } else {
            echo "Error en el registro.";
        }
    }
    
    ?>
</main>

<footer class="footer">
    <img src="img/logo.png" alt="logo" class="footer-logo">
    <nav class="footer-menu">
       <a href="inicio.php">Inicio</a>
       <a href="cursos.php">Cursos</a>
       <a href="suscripciones.php">Suscripciones</a>
       <a href="recursos.php">Recursos</a>
       <a href="quienes-somos.php">Quiénes somos</a>
       <a href="contacto.php">Contacto</a>
    </nav>
    <p class="footer-copyright">© 2024 Ciber Ascent</p>
</footer>

</body>
</html>