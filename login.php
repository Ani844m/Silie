<?php
session_start(); // Iniciar la sesión (necesario para guardar información del usuario)

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

// Recibir datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $loginEmail = $_POST["loginEmail"] ?? '';
    $loginPassword = $_POST["loginPassword"] ?? '';

    // Validaciones básicas en el servidor (¡Importante!)
    if (!filter_var($loginEmail, FILTER_VALIDATE_EMAIL)) {
        echo "error: El correo electrónico no es válido.";
        $conn->close();
        exit();
    }

    if (empty($loginPassword)) {
        echo "error: Por favor, ingrese su contraseña.";
        $conn->close();
        exit();
    }

    // Escapar el correo electrónico para prevenir inyección SQL
    $loginEmail = $conn->real_escape_string($loginEmail);

    // Buscar el usuario en la base de datos
    $sql = "SELECT id, registerPassword FROM usuarios WHERE registerEmail = '$loginEmail'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashedPasswordFromDB = $row["registerPassword"];

        // Verificar si la contraseña ingresada coincide con la contraseña encriptada de la base de datos
        if (password_verify($loginPassword, $hashedPasswordFromDB)) {
            // Inicio de sesión exitoso
            $_SESSION["user_id"] = $row["id"]; // Guardar el ID del usuario en la sesión
            echo "success";
        } else {
            // Contraseña incorrecta
            echo "error: Contraseña incorrecta.";
        }
    } else {
        // Usuario no encontrado
        echo "error: El correo electrónico no está registrado.";
    }
} else {
    echo "error: Método de petición incorrecto.";
}

$conn->close();
?>