<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION["user_id"])) {
    $loggedIn = true;
    $userId = $_SESSION["user_id"];

    // Datos de conexión a la base de datos (¡Reemplaza con tus credenciales!)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "proyecto";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Recuperar el nombre del usuario (asumiendo que tienes una columna 'firstName' en tu tabla 'usuarios')
    $sql = "SELECT firstName FROM usuarios WHERE id = $userId";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $userName = $row["firstName"];
    } else {
        $userName = "Usuario"; // Nombre genérico si no se encuentra
    }

    $conn->close();
} else {
    $loggedIn = false;
    $userName = "";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <style>
        /* Estilos CSS básicos */
        body {
            font-family: sans-serif;
            margin: 20px;
        }
        .user-info {
            position: absolute; /* O fixed, dependiendo de dónde quieras mostrarlo */
            top: 10px;
            right: 10px;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
            font-size: 0.9em;
        }
        .logout-button {
            margin-left: 10px;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h1>Bienvenido a la Página Principal</h1>

    <?php if ($loggedIn): ?>
        <div class="user-info">
            <span>¡Hola, <?php echo htmlspecialchars($userName); ?>!</span>
            <button class="logout-button" onclick="window.location.href='logout.php'">Cerrar Sesión</button>
        </div>
    <?php else: ?>
        <p>No has iniciado sesión. <a href="conócenos.html">Iniciar Sesión</a></p>
    <?php endif; ?>

    <p>Este es el contenido principal de tu página.</p>
    </body>
</html>