<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>

<main>
    <h2>Recuperar Contraseña</h2>
    <form action="recuperar.php" method="post">
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit" name="recuperar">Recuperar Contraseña</button>
    </form>

    <?php

    include 'db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['recuperar'])) {
        $email = $_POST['email'];
        $token = bin2hex(random_bytes(16));
    
        $sql = "INSERT INTO recuperacion_contrasena (usuario_id, token) 
                SELECT usuario_id, ? FROM usuarios WHERE email = ?";
        $stmt = sqlsrv_query($conn, $sql, [$token, $email]);
    
        if ($stmt) {
            echo "Revisa tu correo para recuperar tu contraseña.";
            // Lógica adicional para enviar el enlace de recuperación al correo
        } else {
            echo "Error en la recuperación.";
        }
    }
    
    ?>
</main>

</body>
</html>
