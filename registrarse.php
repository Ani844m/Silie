<?php
session_start();
require_once 'includes/db_connection.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Registro de usuario - Omega Tech">
    <title>Omega Tech - Registrarse</title>
    
    <!-- CSS Links -->
    <link rel="stylesheet" href="registrarsecss.php">
    <link rel="stylesheet" href="conocenoscss.php">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat+Alternates:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <div class="breadcrumb">
        <a href="inicio.php">Inicio</a> / <span class="current-page">Registrarse</span>
    </div>

    <div class="register-container">
        <?php
        if (isset($_SESSION['message'])) {
            echo '<div class="alert alert-' . $_SESSION['message_type'] . '">' . $_SESSION['message'] . '</div>';
            unset($_SESSION['message']);
            unset($_SESSION['message_type']);
        }
        ?>
        <h1>Registrarse</h1>
        <h2>Crear una cuenta</h2>

        <form id="registrationForm" method="POST" action="procesar_registro.php">
            <!-- Client Information Section -->
            <section class="form-section">
                <h3>Informaciones del Cliente</h3>
                <div class="form-group">
                    <label for="registerEmail">Email:</label>
                    <input type="email" id="registerEmail" name="registerEmail" placeholder="Email" required>
                    <div class="error-message" id="emailError"></div>
                </div>
                <div class="form-group password-group">
                    <label for="registerPassword">Contraseña:</label>
                <div class="form-group">
                    <div class="password-input-wrapper">
                        <input type="password" id="registerPassword" name="registerPassword" placeholder="Contraseña" required>
                        <button type="button" class="password-info">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M0 0h24v24H0V0z" fill="none"/>
                                <path d="M12 6c3.87 0 7 3.13 7 7s-3.13 7-7 7-7-3.13-7-7 3.13-7 7-7m0 2c-2.76 0-5 2.24-5 5s2.24 5 5 5 5-2.24 5-5-2.24-5-5-5m0 7c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2"/>
                                <path d="M12 4.5C7 4.5 2.73 7.11 1 11.5 2.73 15.89 7 18.5 12 18.5s5-2.61 6-7c-1.73-4.39-6-7-11-7zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z"/>
                            </svg>
                            <span>(Mínimo de 8 caracteres, incluyendo una mayúscula)</span>
                        </button>
                    </div>
                    <div class="error-message" id="passwordError"></div>
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirmar:</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirmar contraseña" required>
                    <div class="error-message" id="confirmPasswordError"></div>
                </div>
                <div class="form-group account-type">
                    <label>Tipo de Cuenta:</label>
                    <div class="radio-buttons">
                        <input type="radio" id="personal" name="accountType" value="personal" checked>
                        <label for="personal" class="radio-label">Personal</label>
                        <input type="radio" id="business" name="accountType" value="business">
                        <label for="business" class="radio-label">Empresa</label>
                    </div>
                    <div class="error-message" id="accountTypeError"></div>
                </div>
                <div class="form-group">
                    <label for="firstName">Nombre:</label>
                    <input type="text" id="firstName" name="firstName" placeholder="Nombre" required>
                    <div class="error-message" id="firstNameError"></div>
                </div>
                <div class="form-group">
                    <label for="lastName">Apellido:</label>
                    <input type="text" id="lastName" name="lastName" placeholder="Apellido" required>
                    <div class="error-message" id="lastNameError"></div>
                </div>
                <div class="form-group">
                    <label for="cedula">Cédula:</label>
                    <input type="text" id="cedula" name="cedula" placeholder="Cédula" required>
                    <div class="error-message" id="cedulaError"></div>
                </div>
            </section>

            <!-- Billing Information Section -->
            <section class="form-section">
                <h3>Informaciones de facturación</h3>
                <div class="form-group">
                    <label for="address">Dirección:</label>

                </div>
                <div class="form-group">
                <div class="form-group">
                    <label for="address">Dirección:</label>
                    <label for="address2">Dirección 2:</label>
                    <input type="text" id="address2" name="address2" placeholder="Dirección 2 (Opcional)">
                    <div class="error-message" id="address2Error"></div>
                </div>
                <div class="form-group">
                    <label for="city">Ciudad:</label>
                    <input type="text" id="city" name="city" placeholder="Ciudad" required>
                    <div class="error-message" id="cityError"></div>
                </div>
                <div class="form-group">
                    <label for="postalCode">Código Postal:</label>
                    <input type="text" id="postalCode" name="postalCode" placeholder="Código Postal" required>
                    <div class="error-message" id="postalCodeError"></div>
                </div>
                <div class="form-group">
                    <label for="province">Provincia:</label>
                    <input type="text" id="province" name="province" placeholder="Provincia" required>
                    <div class="error-message" id="provinceError"></div>
                </div>
                <div class="form-group">
                    <label for="country">País:</label>
                    <select id="country" name="country" required>
                        <option>República Dominicana</option>
                        <option>Otro país</option>
                    </select>
                    <div class="error-message" id="countryError"></div>
                </div>
                <div class="form-group">
                    <label for="phone">Teléfono:</label>
                    <input type="tel" id="phone" name="phone" placeholder="Teléfono" required>
                    <div class="error-message" id="phoneError"></div>
                </div>
                <div class="form-group">
                    <label for="referredBy">Referido Por:</label>
                    <select id="referredBy" name="referredBy">
                        <option value="">Seleccione una opción (Opcional)</option>
                        <option value="google">Google</option>
                        <option value="facebook">Facebook</option>
                        <option value="instagram">Instagram</option>
                        <option value="friend">Un amigo</option>
                    </select>
                    <div class="error-message" id="referredByError"></div>
                </div>
            </section>

            <!-- Terms and Submit -->
            <div class="form-agreement">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">Yo acepto las <a href="#">Condiciones de uso</a></label>
            <div class="form-agreement">
            </div>
                <label for="terms">Yo acepto las <a href="#">Condiciones de uso</a></label>

            <button type="submit" class="button primary">Registrar</button>
        </form>

        <!-- Form Messages -->
        <div id="formMessage" class="form-message" aria-live="polite" hidden></div>
        <div id="iconoUsuario" class="success-icon" aria-hidden="true" hidden>
            👤 ¡Usuario registrado!
        </div>
        </div>
        <div class="footer-top">
            <div class="logos">
                <img src="https://1000logos.net/wp-content/uploads/2021/05/Kingston-logo.png" alt="Logo 1">
                <img src="https://1000logos.net/wp-content/uploads/2023/07/Linksys-logo.png" alt="Logo 2">
                <img src="https://1000logos.net/wp-content/uploads/2020/05/Logitech-Logo.png" alt="Logo 3">
                <img src="https://mikasastore.com/img/m/32.jpg" alt="Logo 4">
                <img src="https://www.logitech-mexico.com/wp-content/uploads/2019/01/Logitech-G-cyan-01.png" alt="Logo 5">
                <img src="https://1000marcas.net/wp-content/uploads/2019/12/Microsoft-Logo.png" alt="Logo 6">
                <img src="https://www.seagate.com/content/dam/seagate/migrated-assets/www-content/news/_shared/images/seagate-logo-image-center-374x328.png" alt="Logo 7">
                <img src="https://www.saga2go.com/web/image/dr.product.brand/61/image/Xtech?unique=8096f55" alt="Logo 8">
                <img src="https://logoeps.com/wp-content/uploads/2013/07/apc-vector-logo.png" alt="Logo 9">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvXem4GnlFWh0-6bd6wD-ge0um2ALrEZ_Uag&s" alt="Logo 10">
                <img src="https://www.wintechces.com.au/wp-content/uploads/2023/04/aoc-israel.png" alt="Logo 11">
                <img src="https://global.canon/en/corporate/logo/img/logo_01.png" alt="Logo 12">
                <img src="https://e7.pngegg.com/pngimages/6/532/png-clipart-corsair-components-logo-ddr4-sdram-corsa-text-computer-keyboard.png" alt="Logo 13">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Dell_Logo.svg/1200px-Dell_Logo.svg.png" alt="Logo 14">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Epson_Logo.png/1200px-Epson_Logo.png" alt="Logo 15">
                <img src="https://www.tier4.com.mx/wp-content/uploads/2022/12/hikvision-logo.png" alt="Logo 16">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/HP_logo_2012.svg/2048px-HP_logo_2012.svg.png" alt="Logo 17">

                </div>
        </div>
        <div class="footer-middle">
            <div class="footer-column">
                <h3>INFORMACIONES</h3>
                <a href="ofertas.php">Ofertas y promociones</a>
                <a href="identificarse.php">Formulario de Aplicación de <br> Crédito</a>
            </div>
            <div class="footer-column">
                <h3>SOBRE NOSOTROS</h3>
                <a href="sucursales.html">Nuestras Sucursales</a>
            </div>
            <div class="footer-column">
                <h3>CARRERA</h3>
                <a href="trabaja.php">Trabaja con nosotros</a>
            </div>
            <div class="footer-column">
                <h3>OFERTAS Y PROMOCIONES</h3>
                <div class="email-input">
                    <input type="email" id="email-input" placeholder="Entre su email">
                    <a href="delemail.php" id="email-button" class="email-button">
                        <i class="fa fa-envelope"></i>
                    </a>
                </div>
            </div>

            
            <script>
                const emailInput = document.getElementById('email-input');
                const emailButton = document.getElementById('email-button');
            
                emailButton.addEventListener('click', function(event) {
                    if (!emailInput.value || !isValidEmail(emailInput.value)) {
                        event.preventDefault(); // Evita que el enlace se abra
                        alert('Por favor, ingresa un correo electrónico válido.');
                    }
                });
            
                function isValidEmail(email) {
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    return emailRegex.test(email);
                }
            </script>
        </div>
        <div class="footer-bottom">
            <div class="payment-icons">
                <img src="https://brandlogos.net/wp-content/uploads/2022/07/visa_inc-logo_brandlogos.net_iai1b-300x300.png" alt="Visa">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/MasterCard_Logo.svg/2560px-MasterCard_Logo.svg.png" alt="Mastercard">
                <img src="https://play-lh.googleusercontent.com/oXUHTg2vXdJV3AqYXB7uX7aJ3N7UP2jvlWMK5fnz00nXdI0ypgPzPjO8T4j6ND6qsTI" alt="Carnet">
            </div>
            <p>&copy; Copyright @ WebElectron.com 2025</p>
        </div>
    </footer>

</body>
</html>
