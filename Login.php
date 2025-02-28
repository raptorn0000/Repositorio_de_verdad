<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CiberAscent - Iniciar Sesión</title>
    <link rel="stylesheet" href="css/estilos.css"> 
</head>
<body>

   


    <main>
        <h2>Iniciar Sesión</h2>
        <form action="Login.php" method="post">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="login">Iniciar Sesión</button>
            <a href="recuperar.php">¿Olvidaste tu contraseña?</a>
        </form>

        <?php
        session_start();

        include 'db.php';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
        
            $sql = "SELECT password FROM usuarios WHERE username = ?";
            $stmt = sqlsrv_query($conn, $sql, [$username]);
        
            if ($stmt && $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                if (password_verify($password, $row['password'])) {
                    echo "Inicio de sesión exitoso.";
                    // Redirigir o iniciar sesión
                } else {
                    echo "Contraseña incorrecta.";
                }
            } else {
                echo "Usuario no encontrado.";
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
        <p class="footer-copyright">© 2024 CiberAscent</p>
    </footer>


</body>
</html>
