
<scri?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omega Tech - Ofertas</title>
    <link rel="stylesheet" href="ofertascss.php">
    <link rel="stylesheet" href="conocenoscss.php">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

            <!-- CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            <link href="/Content/vendor/font-awesome5/css/fontawesome-all.min.css" rel="stylesheet">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
            
            <link href="/Content/css/porto/theme.css" rel="stylesheet">
            <link href="/Content/css/porto/custom.css" rel="stylesheet">
            <link href="/Content/css/color.css" rel="stylesheet">
    
    <div class="header">
        <div class="container">
            <div class="logo">
                <img src="https://tienda.omega.com.do/Content/images/logo.png" alt="Omega Tech Logo">
            </div>
    
    
            <div class="cart">
                <i class="fas fa-shopping-cart"></i> 0 artículo - $0.00
            </div>
            <div class="currency">
                <select>
                    <option value="dop">RD (DOP)</option>
                </select>
            </div>
    
            <!-- Contenedor para el número de teléfono y la barra de búsqueda -->
            <div class="phone-search-container">
                <div class="phone-number">
                    <span>  📞 (809) 683-4343</span>
                </div>
                <div class="search-bar">
                    <input type="text" placeholder="Buscar">
                    <button><i class="fas fa-search" style="color: #c00;"></i></button>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-nav">
        <div class="container">
            <ul>
                <li class="dropdown">
                    <a href="#">NUESTROS PRODUCTOS</a>
                    <ul class="dropdown-menu">
                        <li><a href="https://tienda.omega.com.do/es/category/list/217?type=grid">Arte y manualidades</a></li>
                        <li class="dropdown-submenu">
                            <a href="https://tienda.omega.com.do/es/category/parent/1?type=grid">Computadora</a>
                            <ul class="submenu">
                                <li><a href="https://tienda.omega.com.do/es/category/list/142?type=grid">Desktop</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/113?type=grid">Gaming</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/141?type=grid">Laptop</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="https://tienda.omega.com.do/es/category/list/83?Type=grid">Punto De Venta</a>
                            <ul class="submenu">
                                <li><a href="https://tienda.omega.com.do/es/category/list/175?type=grid">Cajas Registradoras</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/12?type=grid">Consumibles</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/35?type=grid">Handheld</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="https://tienda.omega.com.do/es/category/parent/125?type=grid">Servidores, Almacenamiento</a>
                            <ul class="submenu">
                                <li><a href="https://tienda.omega.com.do/es/category/list/57?type=grid">Dell Emc</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/62?type=grid">Almacenamiento</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="https://tienda.omega.com.do/es/category/parent/164?type=grid">Televisores Y Soportes</a>
                            <ul class="submenu">
                                <li><a href="https://tienda.omega.com.do/es/category/list/117?type=grid">Hospitality</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/167?type=grid">Soportes</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/163?type=grid">Television</a></li>
                            </ul>
                        </li>
                        <li><a href="https://tienda.omega.com.do/es/category/list/218?type=grid">Accesorios De Impresoras</a></li>
                        <li class="dropdown-submenu">
                            <a href="https://tienda.omega.com.do/es/category/parent/73?type=grid">Adaptadores</a>
                            <ul class="submenu">
                                <li><a href="https://tienda.omega.com.do/es/category/list/173?type=grid">De Computadora</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/219?type=grid">De Transmisión</a></li>
                            </ul>
                        </li>
                        <li><a href="https://tienda.omega.com.do/es/category/list/191?type=grid">Aire Acondicionado</a></li>
                        <li><a href="https://tienda.omega.com.do/es/category/list/209?type=grid">Bateria Para Laptop</a></li>
                        <li><a href="https://tienda.omega.com.do/es/category/list/208?type=grid">Cargador Fuente</a></li>
                        <li class="dropdown-submenu">
                            <a href="https://tienda.omega.com.do/es/category/parent/58?type=grid">Celulares Y Accesorios</a>
                            <ul class="submenu">
                                <li><a href="https://tienda.omega.com.do/es/category/list/33?type=grid">Accesorios De Celular</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/171?type=grid">Celulares</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/127?type=grid">Smartwatch</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="https://tienda.omega.com.do/es/category/parent/144?type=grid">Consumibles</a>
                            <ul class="submenu">
                                <li><a href="https://tienda.omega.com.do/es/category/list/214?type=grid">Botella De Tinta</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/61?type=grid">Cartuchos</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/174?type=grid">Toner</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="https://tienda.omega.com.do/es/category/parent/105?type=grid">Impresoras Y Scanners</a>
                            <ul class="submenu">
                                <li><a href="https://tienda.omega.com.do/es/category/list/169?type=grid">Designjet</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/115?type=grid">Inkjet</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/114?type=grid">Laserjet</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/168?type=grid">Scanner</a></li>

                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="https://tienda.omega.com.do/es/category/parent/30?type=grid">Redes</a>
                            <ul class="submenu">
                                <li><a href="https://tienda.omega.com.do/es/category/list/212?type=grid">Adaptador De Red</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/131?type=grid">Access Point</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/206?type=grid">Antena</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/100?type=grid">Infraestructura</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/200?type=grid">Patch Cable</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/202?type=grid">Patch Panel</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/207?type=grid">Rollo Upt</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/130?type=grid">Router</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/129?type=grid">Switch</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/101?type=grid">Tarjeta De Red</a></li>


                            </ul>
                        </li>
                        <li><a href="https://tienda.omega.com.do/es/category/list/149?type=grid">Motores Y Bicicletas Électricas</a></li>
                        <li><a href="https://tienda.omega.com.do/es/category/list/43?type=grid">Muebles</a></li>
                        <li class="dropdown-submenu">
                            <a href="https://tienda.omega.com.do/es/category/parent/95?type=grid">Partes Para Computadora</a>
                            <ul class="submenu">
                                <li><a href="https://tienda.omega.com.do/es/category/list/116?type=grid">Cases</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/96?type=grid">CPU/Procesadores</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/118?type=grid">Disco Duro & SSD</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/194?type=grid">Power Supply</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/178?type=grid">Tarjeta De Video</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/177?type=grid">Tarjeta Madre</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="https://tienda.omega.com.do/es/category/parent/165?type=grid">Accesorios De Computadoras</a>
                            <ul class="submenu">
                                <li><a href="https://tienda.omega.com.do/es/category/list/192?type=grid">Abanico Para CPU</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/98?type=grid">Audifono Con Microfono</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/121?type=grid">Bocina</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/201?type=grid">Bultos Y Mochilas</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/82?type=grid">Cámara Web</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/146?type=grid">Joystick Y Game Pad</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/36?type=grid">Media CD & DVD</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/170?type=grid">Memoria USB</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/160?type=grid">Monitor</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/162?type=grid">Mouse</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/161?type=grid">Teclados</a></li>
                            </ul>
                        </li>
                        <li><a href="https://tienda.omega.com.do/es/category/list/53?type=grid">Promociones</a></li>
                        <li class="dropdown-submenu">
                            <a href="https://tienda.omega.com.do/es/category/parent/102?type=grid">Seguridad</a>
                            <ul class="submenu">
                                <li><a href="https://tienda.omega.com.do/es/category/list/68?type=grid">Cámaras De Seguridad</a></li>
                            </ul>
                        </li>
                        <li><a href="https://tienda.omega.com.do/es/category/list/48?type=grid">Nvr</a></li>
                        <li><a href="https://tienda.omega.com.do/es/category/list/220?type=grid">Señalización Y Video Proyección</a></li>
                        <li><a href="https://tienda.omega.com.do/es/category/list/24?type=grid">Software Y Licencias</a></li>
                        <li><a href="https://tienda.omega.com.do/es/category/list/139?type=grid">Tablet Y Accesorios</a></li>
                        <li class="dropdown-submenu">
                            <a href="https://tienda.omega.com.do/es/category/parent/181?type=grid">Ups Y Baterias</a>
                            <ul class="submenu">
                                <li><a href="https://tienda.omega.com.do/es/category/list/180?type=grid">Bateria</a></li>
                                <li><a href="https://tienda.omega.com.do/es/category/list/179?type=grid">Ups</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="ofertas.php">OFERTAS</a></li>
                <li><a href="servicios.php">SERVICIOS</a></li>
                <li><a href="conocenos.php">CONÓCENOS</a></li>
                <li><a href="sucursales.php">SUCURSALES</a></li>
                <li class="dropdown">
                    <a href="#">MI CUENTA</a>
                    <ul class="dropdown-menu account-menu">
                        <li><a href="identificarse.php" class="account-button">Identificarse</a></li>
                        <li><a href="registrarse.php" class="account-button register-button">Regístrate</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="breadcrumb">
        <a href="Inicio.php">Inicio</a> / <span class="current-page">Ofertas y promociones</span>
    </div>

    <br>
    <section class="mas-vendido">
        <div class="header-vendido">
            <h2>Novedades</h2>
            <div class="nav-vendido">
                <button class="nav-prev" aria-label="Previous">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </button>
                <button class="nav-next" aria-label="Next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </button>
            </div>
        </div>
        <div class="productos-vendido">
            <div class="producto-vendido">
                <img src="https://sis.omega.com.do/ProductImages/940ee925-12ca-452f-9ff8-eb01855182d1.png" alt="Seagate Disco Duro 16TB">
                <h3>Seagate - DISCO DURO 16TB P/VIDEOVIGILANCIA SKYHAWK</h3>
                <p>$28,186.64</p>
            </div>
            <div class="producto-vendido">
                <img src="https://sis.omega.com.do/ProductImages/30508d98-14db-4639-8c2c-02a55b05999e.png" alt="Monitor 27 Pulgadas">
                <h3>HP - MONITOR 27" FULL HD, 165HZ, 1MS, 1000:1 CONTRASTE</h3>
                <p>$ 12,999.99</p>
            </div>
            <div class="producto-vendido">
                <img src="https://sis.omega.com.do/ProductImages/cee77b1a-83ba-44fb-ad15-a4ec4101bf1d.png" alt="Roku Premier">
                <h3>Roku - PREMIER - 4K STREAMING</h3>
                <p>$ 2,547.12</p>
            </div>
            <div class="producto-vendido">
                <img src="https://sis.omega.com.do/ProductImages/94211758-01da-4f45-980b-1ac646535050.png" alt="Soporte TV Xtech">
                <h3>Xtech - SOPORTE PARA TV</h3>
                <p>$ 700.20</p>
            </div>
            <div class="producto-vendido">
                <img src="data:image/webp;base64,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" alt="Laptop HP">
                <h3>HP - LAPTOP 14" AMD RYZEN 5, 8GB RAM, 256GB SSD</h3>
                <p>$ 25,500.50</p>
            </div>
            <div class="producto-vendido">
                <img src="https://th.bing.com/th/id/OIP.dlfbTy09rJeyaHevxIZo2AHaHa?w=160&h=160&rs=1&qlt=80&o=6&dpr=1.1&pid=3.1" alt="Audífonos Inalámbricos Sony">
                <h3>Sony - AUDÍFONOS INALÁMBRICOS WH-1000XM5 (Varios Colores)</h3>
                <p>$ 18,799.75</p>
            </div>
            <div class="producto-vendido">
                <img src="data:image/webp;base64,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" alt="Smartwatch Samsung">
                <h3>Samsung - GALAXY WATCH 6 (Varios Tamaños y Colores)</h3>
                <p>$ 14,250.90</p>
            </div>
            <div class="producto-vendido">
                <img src="data:image/webp;base64,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" alt="Tablet Lenovo">
                <h3>Lenovo - TABLET TAB M10 PLUS (3ra Gen) 10.61"</h3>
                <p>$ 9,995.25</p>
            </div>
            <div class="producto-vendido">
    <img src="https://www.bing.com/th?id=OPHS.YKHZWMfJUOFtGA474C474&o=5&pid=21.1&h=124&qlt=100&dpr=1,1&bw=6&bc=FFFFFF&w=158" alt="Router Inalámbrico TP-Link">
    <h3>TP-Link - ROUTER INALÁMBRICO AX1800 DOBLE BANDA WIFI 6</h3>
    <p>$ 4,875.95</p>
</div>
<div class="producto-vendido">
    <img src="data:image/webp;base64,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" alt="Webcam Logitech">
    <h3>Logitech - WEBCAM C920S PRO HD CON PRIVACIDAD</h3>
    <p>$ 3,999.50</p>
</div>
<div class="producto-vendido">
    <img src="data:image/webp;base64,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" alt="Teclado Mecánico Redragon">
    <h3>Redragon - TECLADO MECÁNICO KUMARA K552 RGB (SWITCH ROJO)</h3>
    <p>$ 2,750.25</p>
</div>
<div class="producto-vendido">
    <img src="data:image/webp;base64,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" alt="Mouse Inalámbrico Logitech">
    <h3>Logitech - MOUSE INALÁMBRICO ERGONÓMICO LIFT VERTICAL</h3>
    <p>$ 3,125.80</p>
</div>

            
        </div>
    </section>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    const productosContainer = document.querySelector('.productos-vendido');
    const prevButton = document.querySelector('.nav-prev');
    const nextButton = document.querySelector('.nav-next');
    const containerWidth = productosContainer.offsetWidth; // Obtener el ancho visible del contenedor
    const totalProducts = document.querySelectorAll('.producto-vendido').length;
    let currentScroll = 0;
    const maxScroll = (totalProducts * (document.querySelector('.producto-vendido').offsetWidth + 20)) - containerWidth; // Ancho total - ancho visible

    prevButton.addEventListener('click', () => {
        if (currentScroll > 0) {
            currentScroll -= containerWidth;
            productosContainer.scrollLeft = currentScroll;
        }
    });

    nextButton.addEventListener('click', () => {
        if (currentScroll < maxScroll) {
            currentScroll += containerWidth;
            productosContainer.scrollLeft = currentScroll;
        }
    });
});
</script>

<!-- pie de pagina -->

<footer class="footer">
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
                <a href="ofertas.html">Ofertas y promociones</a>
                <a href="identificarse.html">Formulario de Aplicación de <br> Crédito</a>
            </div>
            <div class="footer-column">
                <h3>SOBRE NOSOTROS</h3>
                <a href="sucursales.html">Nuestras Sucursales</a>
            </div>
            <div class="footer-column">
                <h3>CARRERA</h3>
                <a href="trabaja.html">Trabaja con nosotros</a>
            </div>
            <div class="footer-column">
                <h3>OFERTAS Y PROMOCIONES</h3>
                <div class="email-input">
                    <input type="email" id="email-input" placeholder="Entre su email">
                    <a href="delemail.html" id="email-button" class="email-button">
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