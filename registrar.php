<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambia si tu servidor MySQL está en otro lugar
$username = "root"; // Reemplaza con tu nombre de usuario de MySQL
$password = ""; // Reemplaza con tu contraseña de MySQL
$dbname = "proyecto"; // El nombre de la base de datos que creaste

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $registerEmail = $_POST["registerEmail"] ?? '';
    $registerPassword = $_POST["registerPassword"] ?? '';
    $accountType = $_POST["accountType"] ?? 'personal';
    $firstName = $_POST["firstName"] ?? '';
    $lastName = $_POST["lastName"] ?? '';
    $cedula = $_POST["cedula"] ?? '';
    $address = $_POST["address"] ?? '';
    $address2 = $_POST["address2"] ?? '';
    $city = $_POST["city"] ?? '';
    $postalCode = $_POST["postalCode"] ?? '';
    $province = $_POST["province"] ?? '';
    $country = $_POST["country"] ?? '';
    $phone = $_POST["phone"] ?? '';
    $referredBy = $_POST["referredBy"] ?? '';
    $terms = $_POST["terms"] ?? ''; // Aunque no lo guardaremos directamente, podemos verificar si se aceptaron

    // Validaciones básicas en el servidor (¡Importante!)
    if (!filter_var($registerEmail, FILTER_VALIDATE_EMAIL)) {
        echo "error: El correo electrónico no es válido.";
        $conn->close();
        exit();
    }

    if (strlen($registerPassword) < 8 || !preg_match('/[A-Z]/', $registerPassword)) {
        echo "error: La contraseña debe tener al menos 8 caracteres e incluir una mayúscula.";
        $conn->close();
        exit();
    }

    if (empty($terms)) {
        echo "error: Debes aceptar los términos y condiciones.";
        $conn->close();
        exit();
    }

    // Escapar los datos para prevenir inyección SQL
    $registerEmail = $conn->real_escape_string($registerEmail);
    $registerPasswordHashed = password_hash($conn->real_escape_string($registerPassword), PASSWORD_DEFAULT);
    $accountType = $conn->real_escape_string($accountType);
    $firstName = $conn->real_escape_string($firstName);
    $lastName = $conn->real_escape_string($lastName);
    $cedula = $conn->real_escape_string($cedula);
    $address = $conn->real_escape_string($address);
    $address2 = $conn->real_escape_string($address2);
    $city = $conn->real_escape_string($city);
    $postalCode = $conn->real_escape_string($postalCode);
    $province = $conn->real_escape_string($province);
    $country = $conn->real_escape_string($country);
    $phone = $conn->real_escape_string($phone);
    $referredBy = $conn->real_escape_string($referredBy);

    // Insertar datos en la tabla 'usuarios'
    $sql = "INSERT INTO usuarios (registerEmail, registerPassword, accountType, firstName, lastName, cedula, address, address2, city, postalCode, province, country, phone, referredBy)
            VALUES ('$registerEmail', '$registerPasswordHashed', '$accountType', '$firstName', '$lastName', '$cedula', '$address', '$address2', '$city', '$postalCode', '$province', '$country', '$phone', '$referredBy')";

    if ($conn->query($sql) === TRUE) {
        echo "success"; // Enviar respuesta de éxito
    } else {
        echo "error: Error al registrar el usuario: " . $sql . "<br>" . $conn->error; // Enviar respuesta de error
    }
} else {
    echo "error: Método de petición incorrecto.";
}

$conn->close();
?>