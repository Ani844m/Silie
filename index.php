
<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OMEGA TECH S.A. - Inicio</title>
        <link rel="stylesheet" href="Iniciocss.php">
        <link rel="stylesheet" href="novedadescss.php">
        <link rel="stylesheet" href="mas-vendidocss.php">
        <link rel="stylesheet" href="footercss.php">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="/Content/vendor/font-awesome5/css/fontawesome-all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="/Content/css/porto/theme.css" rel="stylesheet">
        <link href="/Content/css/porto/custom.css" rel="stylesheet">
        <link href="/Content/css/color.css" rel="stylesheet">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="Content/images/fav-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="Content/images/fav-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="Content/images/fav-72.png">
        <link rel="apple-touch-icon-precomposed" href="Content/images/fav-57.png">
        <link rel="shortcut icon" href="Content/images/fav.png">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Cabin:400,600' rel='stylesheet' type='text/css'>
        <style>
            .carousel-indicators {
                bottom: 0;
            }
            .carousel-indicators li {
                background-color: #fff;
            }
            .carousel-indicators .active {
                background-color: #c00;
            }
            .carousel-control {
                background-image: none;
            }
            .carousel-control.left,
            .carousel-control.right {
                color: #c00;
            }
            .carousel-inner > .item {
                height: 300px;
                background-size: cover;
                background-position: center;
            }
            .carousel-progress {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 5px;
                background-color: rgba(0, 0, 0, 0.5);
                overflow: hidden;
            }
            .carousel-progress-bar {
                width: 0;
                height: 100%;
                background-color: #c00;
                transition: width 5s linear;
            }
        </style>
        <style>
            /* Ajustar el ancho del carrusel */
            #carouselExampleIndicators {
                width: 1245px; /* Ajusta este valor según lo necesario */
                margin: 0 auto; /* Centra el carrusel */
            }
        
            /* Asegurarse de que el carrusel ocupe todo el ancho del contenedor */
            .carousel-inner > .item > img {
                width: 100%;
                height: auto;
            }
        </style>
       
        <style>  /* css del video */
            .centro {
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 40px 0;
            }
        
            .video-container {
                position: relative;
                width: 80%;
                max-width: 40%;
                aspect-ratio: 16 / 9;
                overflow: hidden;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            }
        
            .video-container iframe {
                width: 100%;
                height: 100%;
                border: 0;
            }
        </style>
        
       
    </head>
    <body>
    
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
    
    <div class="body-content">
        <div class="grey-body" id="homepage">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href="https://wa.link/k7tyei" target="_blank">
                                        <img src="https://sis.omega.com.do/Areas/Content/images/banners/banner_0_kls2mra5.jr0.jpeg" alt="Banner 1">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="https://tienda.omega.com.do/es/product/consul/106192" target="_blank">
                                        <img src="https://sis.omega.com.do/Areas/Content/images/banners/banner_0_ct1vyom3.esd.png" alt="Banner 2">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="https://tienda.omega.com.do/es/product/search?Terms=Gwen" target="_blank">
                                        <img src="https://sis.omega.com.do/Areas/Content/images/banners/banner_0_4ac3rtek.m2v.jpeg" alt="Banner 3">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="https://tienda.omega.com.do/es/product/consul/95839" target="_blank">
                                        <img src="https://sis.omega.com.do/Areas/Content/images/banners/banner_0_oz44xpfl.kc4.png" alt="Banner 4">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="https://tienda.omega.com.do/es/product/consul/96713" target="_blank">
                                        <img src="https://sis.omega.com.do/Areas/Content/images/banners/banner_0_twhgetmr.ufz.png" alt="Banner 5">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="https://tienda.omega.com.do/es/product/search?Terms=Spider-man&type=grid&sort=PDE&show=20&brands=176" target="_blank">
                                        <img src="https://sis.omega.com.do/Areas/Content/images/banners/banner_0_dpvu23so.hj2.png" alt="Banner 6">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="https://tienda.omega.com.do/es/product/search?Terms=teclado%20mouse%20bulto%20mochila&page=3&type=grid&sort=DEF&show=20&brands=139" target="_blank">
                                        <img src="https://sis.omega.com.do/Areas/Content/images/banners/banner_0_yace2yz1.s02.png" alt="Banner 7">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="https://tienda.omega.com.do/es/product/search?Terms=logitech" target="_blank">
                                        <img src="https://sis.omega.com.do/Areas/Content/images/banners/banner_0_ztyh1orp.mnb.jpeg" alt="Banner 8">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="https://tienda.omega.com.do/es/product/search?Type=grid&Terms=botella&Refurbished=False&sort=DEF&show=20&brands=9" target="_blank">
                                        <img src="https://sis.omega.com.do/Areas/Content/images/banners/banner_0_r0opho3l.wa0.png" alt="Banner 9">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="https://tienda.omega.com.do/es/product/search?Terms=ezviz" target="_blank">
                                        <img src="https://sis.omega.com.do/Areas/Content/images/banners/banner_0_ilrkr3kf.jbn.jpg" alt="Banner 10">
                                    </a>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <div class="carousel-progress">
                                <div class="carousel-progress-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="centro">
        <div class="video-container">
            <iframe 
                src="https://drive.google.com/file/d/1KnEYgbL5JCyDYHoh8rtf6IoXVNgj7xwP/preview"
                allow="autoplay; encrypted-media"
                allowfullscreen>
            </iframe>
        </div>
    </div>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            var $progressBar = $('.carousel-progress-bar');
            var $items = $('.carousel-item');
            var totalItems = $items.length;
            var currentIndex = 0;
    
            function updateProgressBar() {
                var progress = (currentIndex / (totalItems - 1)) * 100;
                $progressBar.css('width', progress + '%');
            }
    
            $('#carouselExampleIndicators').on('slid.bs.carousel', function () {
                currentIndex = $('#carouselExampleIndicators .item.active').index();
                updateProgressBar();
            });
    
            // Initialize progress bar
            updateProgressBar();
    
            // Reset progress bar on slide change
            $('#carouselExampleIndicators').on('slide.bs.carousel', function () {
                $progressBar.css('width', '0%');
            });
        });



    </script>
<!-- catalogo de novedades -->
<section class="novedades">
    <div class="productos">
        <div class="producto">
            <div class="titulo-novedad">Novedades</div>
            <br>
            <img src="https://sis.omega.com.do/ProductImages/ecab1629-58dc-459e-a420-69d1ca59f386.png" alt="Bocina Klip Xtreme">
            <h3>Argom - CARGADOR USB + USB-C DE PARED DUAL COLOR BLANCO (ARG-AC-0155WT)</h3>
            <p>$ 580.13</p>
            <a href="ofertas.php">Ver todas las ofertas</a>
        </div>
        <div class="producto">
            <div class="titulo-novedad">Novedades</div>
            <img src="https://pycca.vteximg.com.br/arquivos/ids/277762-600-600/D07418-1.png?v=638768106313730000" alt="Audífonos Klip Xtreme Morados">
            <h3>Klip Xtreme - AUDIFONO CON MICROFONO ZOUNDTUNE</h3>
            <p>$ 974.96</p>
            <a href="ofertas.php">Ver todas las ofertas</a>
        </div>
        <div class="producto">
            <div class="titulo-novedad">Novedades</div>
            <img src="https://sutoasv.com/wp-content/uploads/2024/12/HEADSET-KWH-010-CELESTE-GRIS-SUTOA-EL-SALVADOR-600x600.webp" alt="Audífonos Klip Xtreme Negros">
            <h3>Klip Xtreme - AUDIFONO CON MICROFONO ZOUNDTUNE</h3>
            <p>$ 974.96</p>
            <a href="ofertas.html">Ver todas las ofertas</a>
        </div>
        <div class="producto">
            <div class="titulo-novedad">Novedades</div>
            <img src="https://www.digiplot.cl/img/productos/18104_1.webp" alt="Audífonos Klip Xtreme Escape">
            <h3>Klip Xtreme - AUDIFONO CON MICROFONO ESCAPE -</h3>
            <p>$ 1,700.71</p>
            <a href="ofertas.html">Ver todas las ofertas</a>
        </div>
    </div>
</section>

<!-- catalogo de mas vendido -->
<section class="mas-vendido">
    <div class="header-vendido">
        <h2>Lo más vendido</h2>
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
            <img src="https://mediaserver.goepson.com/ImConvServlet/imconv/661d5462c4ab1581341d2d4a22014a60f6009a0a/515Wx515H?use=productpictures&hybrisId=B2C&assetDescr=WF-C5890_SPT_C11CK23201_384x286" alt="Impresora Epson">
            <h3>Epson - IMPRESORA EPSON WF-C5890 MULTIFUNCIONAL</h3>
            <p>$ 42,795.77</p>
        </div>
        <div class="producto-vendido">
            <img src="https://sis.omega.com.do/ProductImages/829d2552-016c-4fe7-abc3-6605b757099f.png" alt="Memoria USB Kingston">
            <h3>Kingston - MEMORIA USB 64GB, DATA TRAVELER EXODIA</h3>
            <p>$ 336.06</p>
        </div>
        <div class="producto-vendido">
            <img src="https://sis.omega.com.do/ProductImages/be0d9f5b-5567-4a66-ba65-29d9280ec9ea.png" alt="Bocina MYO">
            <h3>MYO - BOCINA 8" PORTATIL CON BATERIA, MICROFONO WIRELESS</h3>
            <p>$ 12,937.30</p>
        </div>
        <div class="producto-vendido">
            <img src="https://sis.omega.com.do/ProductImages/aa0fa647-1c7e-49cc-a5df-a4add07303c3.png" alt="Monitor HP">
            <h3>HP - MONITOR HP P22V G5 21.5" FHD (1920 X 1080)</h3>
            <p>$ 8,021.13</p>
        </div>
        <div class="producto-vendido">
            <img src="https://sis.omega.com.do/ProductImages/657a5bda-8aa7-40b7-9b06-712b96f30532.png" alt="Impresora Epson">
            <h3>AOC - MONITOR AOC 22 " (21.5 ) 1920 X 1080 100 HZ, LED FULL HD</h3>
            <p>$ 7,145.70</p>
        </div>
        <div class="producto-vendido">
            <img src="https://sis.omega.com.do/ProductImages/a98c108e-4f36-406d-9867-ab38f65e9c6a.png" alt="Memoria USB Kingston">
            <h3>Dell - DOCKING STATION WD19S, 130W, PORT REPLICATOR WITH USB 3.0. (WD19)</h3>
            <p>$ 14,311.12</p>
        </div>
        <div class="producto-vendido">
            <img src="https://sis.omega.com.do/ProductImages/bc50eced-4ebe-4a20-875c-8a04ff3c7bd9.png" alt="Bocina MYO">
            <h3>Epson - IMPRESORAS SURECOLOR F170 MICROTFP, SUBLIMACION</h3>
            <p>$ 27,372.98</p>
        </div>
        <div class="producto-vendido">
            <img src="https://sis.omega.com.do/ProductImages/0f3685be-a305-41bc-98f1-e33750a90c6d.png" alt="Monitor HP">
            <h3>Dell - OPTIPLEX SMALL FORM FACTOR PLUS 7020</h3>
            <p>$ 73,703.74</p>
        </div>
    </div>
</section>

<!-- catalogo de mas visto -->
<section class="mas-visto">
    <div class="header-visto">
        <h2>Lo más visto</h2>
        <div class="nav-visto">
            <button class="nav-prev" aria-label="Previous">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </button>
            <button class="nav-next" aria-label="Next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </button>
        </div>
    </div>
    <div class="productos-visto">
        <div class="producto-visto">
            <img src="https://sis.omega.com.do/ProductImages/166c544c-2517-4ee5-b8ca-70dad605e202.png" alt="Impresora Epson">
            <h3>HP - CARTUCHO 667 - 3YM79AL - NEGRO</h3>
            <p>$ 992.88</p>
        </div>
        <div class="producto-visto">
            <img src="https://sis.omega.com.do/ProductImages/5123817f-b698-4ad7-948c-bd3667f19a67.png" alt="Memoria USB Kingston">
            <h3>Xtech - MOUSE MARVEL SPIDER-MAN, USB, 7 BOTONES, 2400DPI, LUCES ROJAS - 4 MODOS</h3>
            <p>$ 581.50</p>
        </div>
        <div class="producto-visto">
            <img src="https://sis.omega.com.do/ProductImages/647ef3fe-fa54-4211-9620-638623691aa0.png" alt="Bocina MYO">
            <h3>Apc - UPS BACK-UPS PRO, 1.5KVA(1500VA)</h3>
            <p>$ 18,002.36</p>
        </div>
        <div class="producto-visto">
            <img src="https://sis.omega.com.do/ProductImages/eb40e538-a175-4506-ad04-db189eee1398.png" alt="Monitor HP">
            <h3>HIKVISION - MONITOR HIKVISION SIN BORDES FHD DE 24, 1 HDMI,1 VGA, (1920 × 1080)</h3>
            <p>$ 7,427.39</p>
        </div>
        <div class="producto-visto">
            <img src="https://sis.omega.com.do/ProductImages/a68c241d-e84f-4aea-a3bc-1acb649cf4d1.png" alt="Impresora Epson">
            <h3>Xtech - AUDIFONO CON MICROFONO MARVEL SPIDER-MAN, 3.5MM + USB</h3>
            <p>$ 987.05</p>
        </div>
        <div class="producto-visto">
            <img src="https://sis.omega.com.do/ProductImages/1450c1af-6120-430f-9c9c-80ebe804efc2.png" alt="Impresora Epson">
            <h3>Klip Xtreme - AUDIFONO CON MICROFONO KLIPX ZOUNDBUDS</h3>
            <p>$ 1,558.73</p>
        </div>
        <div class="producto-visto">
            <img src="https://sis.omega.com.do/ProductImages/3d998f56-7fc6-4939-bca9-47a955928c8d.png" alt="Impresora Epson">
            <h3>Klip Xtreme - BOCINA MAGBLASTER, 160 WATTS RMS</h3>
            <p>$ 10,019.24</p>
        </div>
        <div class="producto-visto">
            <img src="https://sis.omega.com.do/ProductImages/63c7ab4a-8094-4bd6-9cfc-8e9f69193979.png" alt="Impresora Epson">
            <h3>Xtech - AUDIFONO CON MICROFONO MARVEL SPIDER-GWEN</h3>
            <p>$ 1,313.29</p>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Función para manejar el desplazamiento del carrusel
        function setupCarousel(productosSelector, navPrevSelector, navNextSelector) {
            const productos = document.querySelector(productosSelector);
            const navPrev = document.querySelector(navPrevSelector);
            const navNext = document.querySelector(navNextSelector);

            const scrollStep = 300; // Cantidad de píxeles a desplazar
            const productosArray = Array.from(productos.children);
            const totalWidth = productos.scrollWidth;
            const containerWidth = productos.clientWidth;

            let currentIndex = 0;

            navPrev.addEventListener('click', function() {
                currentIndex--;
                if (currentIndex < 0) {
                    currentIndex = productosArray.length - 1;
                    productos.scrollLeft = totalWidth;
                }
                productos.scrollBy({
                    left: -scrollStep,
                    behavior: 'smooth'
                });
            });

            navNext.addEventListener('click', function() {
                currentIndex++;
                if (currentIndex >= productosArray.length) {
                    currentIndex = 0;
                    productos.scrollLeft = 0;
                }
                productos.scrollBy({
                    left: scrollStep,
                    behavior: 'smooth'
                });
            });
        }

        // Configurar el carrusel de "Lo más vendido"
        setupCarousel('.productos-vendido', '.mas-vendido .nav-prev', '.mas-vendido .nav-next');

        // Configurar el carrusel de "Lo más visto"
        setupCarousel('.productos-visto', '.mas-visto .nav-prev', '.mas-visto .nav-next');
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
                <a href="#">Formulario de Aplicación de <br> Crédito</a>
            </div>
            <div class="footer-column">
                <h3>SOBRE NOSOTROS</h3>
                <a href="#">Nuestras Sucursales</a>
            </div>
            <div class="footer-column">
                <h3>CARRERA</h3>
                <a href="trabaja.php">Trabaja con nosotros</a>
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

