
<?php
header("Content-type: text/css");
?>

<style>

body {
    font-family: sans-serif;
    margin: 0;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: flex-start; /* Cambia de 'space-between' a 'flex-start' */
    align-items: center;
}

.header {
    background: linear-gradient(to bottom, #1f1e1e, #000);
    padding: 17px 0;
    display: flex; /* Agregar esto para que los elementos se alineen en una fila */
    justify-content: flex-start; /* Cambiar de 'flex-end' a 'flex-start' para permitir que todo ocupe el espacio */
    align-items: center;
    width: 100%;
}

.header .logo {
    margin-right: auto; /* Deja el logo a la izquierda */
}

.header .cart,
.header .currency,
.header .search-bar {
    margin-left: 10px; /* Asegura que haya espacio entre los elementos */
}

.header .right-align {
    flex-grow: 1; /* Esto empuja los elementos a la derecha */
}


.search-bar {
    margin-left: auto; /* También puedes ajustar el margen izquierdo si lo necesitas */
}


.logo img {
    height: 75px;
}

.cart, .currency {
    color: #fff;
    margin-top: 29px; /* Asegura un margen superior adicional */
}

.currency select {
    display: block !important;
    width: auto !important;
    visibility: visible !important;
    background-color: #ffffff;
    color: #000;
    border: none;
    padding: 7px 10px; /* el rd dop mas abajo*/
}

.phone-search-container {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    margin-top: 0px; /* Asegura un espacio superior entre la barra de búsqueda y el número de teléfono */
    /* Asegura que la barra este un poco mas arriba */
   
}

.phone-number {
    color: #fff;
    font-size: 17px;
    margin-bottom: 4px; /* Asegura un pequeño espacio entre el número y la barra */
    margin-top: 0; /* Elimina cualquier margen superior */
    position: relative; /* Evita el uso de top para mover el número */
}

.search-bar {
    display: flex;
    border: 1px solid #ccc;
    border-radius: 4px;
    overflow: hidden;
    margin-top: 0; /* Asegura que no haya margen superior adicional */
}

.search-bar input {
    padding: 8px 12px;
    border: none;
    outline: none;
    flex-grow: 1;
}

.search-bar button {
    background-color: #fff;
    color: #c00;
    border: none;
    padding: 8px 12px;
    cursor: pointer;
}


.main-nav {
    background-color: rgb(139, 13, 13);
    color: #fff;
    padding: 3px 0;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}

.main-nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
}

.main-nav ul li a {
    color: #fff;
    text-decoration: none;
    padding: 15px 20px;
    display: block;
    font-size: 13px;
    transition: all 0.3s ease;
    border-radius: 4px;
}

.main-nav > div > ul > li > a {
    font-weight: 600;
    letter-spacing: 1px;
}

/* Dropdown styles */
.dropdown-menu {
    background-color: #fff;
    border-radius: 8px;
    padding: 10px;
    min-width: 220px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.dropdown-menu li a {
    color: #333 !important;
    padding: 10px 15px;
    font-size: 13px;
    transition: all 0.2s ease;
    border-radius: 4px;
}

.dropdown-menu li a:hover {
    background-color: #f5f5f5;
    color: #c00 !important;
    transform: translateX(5px);
}

/* Submenu styles */
.submenu {
    background-color: #fff;
    border-radius: 8px;
    padding: 10px;
    min-width: 220px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

/* Hover effects */
.main-nav ul li a:hover {
    background-color: rgba(255,255,255,0.1);
    color: #fff;
}

/* Account menu specific styles */
.account-menu {
    min-width: 180px;
}

.account-button {
    background-color: #c00;
    color: #fff !important;
    border-radius: 4px;
    text-align: center;
    margin: 5px 0;
    transition: all 0.3s ease;
}

.account-button:hover {
    background-color: #a00;
    transform: translateY(-2px);
}

.account-button .account-button,
.account-button .register-button {
    background-color: #c00;
    color: #fff !important;
    border: none;
    padding: 10px 15px;
    display: block;
    text-decoration: none;
    text-align: center;
    text-emphasis-color: white;
    border-radius: 5px;
    margin-bottom: 5px; /* espacio entre los botones */
}



/*menu*/

.dropdown {
    position: relative;
}

.dropdown .dropdown-menu {
    display: none;
    position: absolute;
    background-color: #fff;
    list-style: none;
    padding: 10px;
    margin: 0;
    width: 200px;
    z-index: 1;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.dropdown:hover .dropdown-menu {
    display: block;
}

.dropdown .dropdown-menu li a {
    padding: 10px 15px;
    display: flex; /* Cambiado a flexbox */
    justify-content: space-between; /* Espacia el texto y la flecha */
    align-items: center; /* Alinea verticalmente */
    text-decoration: none;
    color: #4e4e4e;
    font-size: 13px;
}

.dropdown .dropdown-menu li a:hover {
    background-color: #ddd;
}

.main-nav ul li a:hover {
    background-color: #ddd;
    color: #333;
}

.dropdown > a::after {
    content: '\25BC';
    margin-left: 5px;
    font-size: 10px;
    vertical-align: 2px;
}

.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .submenu {
    display: none;
    position: absolute;
    top: 0;
    left: 100%;
    background-color: #fff;
    list-style: none;
    padding: 10px;
    margin: 0;
    width: 200px;
    z-index: 2;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.dropdown-submenu:hover .submenu {
    display: block;
}

.dropdown-submenu > a::after {
    content: '\25BA';
    font-size: 10px;
}


/* estilos para el menú de productos */
.dropdown-menu {
    width: 200px;
}

.dropdown-menu li a {
    padding: 10px 15px;
    display: block;
}

/* estilos para la viñeta */
.dropdown > a::after {
    content: '\25BC'; /* Código Unicode para la flecha hacia abajo */
    margin-left: 5px; /* Espacio entre el texto y la flecha */
    font-size: 10px;
    vertical-align: 2px;
}

/*hasta aqui*/

.breadcrumb {
    padding: 10px 20px;
    background-color: white;
    font-size: 14px;
    color: #333; 
}

.breadcrumb a {
    color: #c00;
    text-decoration: none;
}

.breadcrumb a:hover {
    text-decoration: underline;
}

.breadcrumb .current-page {
    color: #333;
}

.breadcrumb-simple {
    background-color: #f5f5f5;
    padding: 15px 40px;  /* Reduced top padding and increased right padding */
    font-size: 14px;
    border-bottom: 1px solid #ddd;
    margin-top: 5px;  /* Added small margin from top */
}

.breadcrumb-simple a {
    color: #c00;
    text-decoration: none;
}

.breadcrumb-simple a:hover {
    text-decoration: underline;
}

.ofertas-container {
    padding: 20px;
    background-color: #f9f9f9;
}

.ofertas-title {
    text-align: left;
    margin-bottom: 20px;
    color: #c00; 
}

.novedades-container {
    margin-bottom: 20px;
}

.novedades-title {
    text-align: left;
    margin-bottom: 10px;
    color: #c00; 
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-arrows {
    font-size: 1.2em;
    color: #c00;
}

.gray-background {
    background-color: #f9f9f9; 
    padding-top: 10px; /* espacio superior para separar del menú */
}


.productos-container {
    display: flex;
    overflow: hidden;
    width: 2730px; 
    transition: transform 0.5s ease;
    justify-content: space-around; /* Distribuye el espacio alrededor de los productos */
}

.producto {
    flex: 0 0 200px; /* Ancho fijo de 200px */
    /* margin: 0 40px;  Elimina el margen de los productos */
    transition: transform 0.3s ease;
}

.producto:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.producto img {
    max-width: 180px; /* Ajusta el ancho de la imagen */
    height: auto;
    margin-bottom: 20px;
}

/* pie de pagina*/

.footer {
    background-color: #800000; /* Color rojo oscuro */
    color: rgb(217, 208, 208);
    text-align: left;
    padding: 20px;
}

.footer-top {
    text-align: center;
    margin-bottom: 20px;
    background-color: white; /* Agregamos fondo blanco */
    padding: 10px; /* Añadimos un poco de espacio alrededor de los logos */
}

.footer-top img {
    height: 25px; /* Ajusta el tamaño de los logos */
    margin: 9 8px;
}

.footer-middle {
    display: flex;
    justify-content: space-around;
    
    flex-wrap: wrap; /* Para hacerlo responsivo */
}

.footer-column {
    margin-bottom: 20px;
    
}

.footer-column h3 {
    margin-bottom: 10px;
}

.footer-column a, .footer-column input, .footer-column button {
    display: block;
    margin-bottom: 5px;
    color: rgb(253, 255, 253);
    text-decoration: none;
    text-align: left;
    background-color: transparent;
    border: none;
    padding: 5px;
}

.footer-column .email-input {
    display: flex; /* Usamos flexbox para alinear el input y el botón */
}

.footer-column button i {
    margin-left: 5px; /* Espacio entre el texto del botón y el icono */
}


.footer-column .email-button {
    background-color: white;
    color: #800000;
    cursor: pointer;
    border: 1px solid white;
    border-left: none;
    padding: 8px 10px;
    text-decoration: none; /* Elimina el subrayado del enlace */
    display: flex; /* Alinea el icono dentro del enlace */
    align-items: center; /* Centra verticalmente el icono */
    transition: background-color 0.3s ease; /* Agregamos una transición suave */
}

.footer-column .email-button:hover {
    background-color: rgb(72, 62, 62); /* Color al pasar el cursor */
}
.footer-column .email-button:hover i { /* Agregamos esta regla */
    color: white; /* Cambia el color del icono a blanco */
}

.footer-column input {
    border: 1px solid rgb(179, 186, 180);
    padding: 8px;
    color: rgb(27, 29, 23);
    background-color: lightgray; /* Color de fondo gris claro */
    width: 250px; /* Ancho del cuadro en píxeles */
    border-right: none; 
}

.footer-column button {
    background-color: rgb(250, 252, 249);
    color: #000000;
    cursor: pointer;
    border: 1px solid rgb(17, 4, 4); /* Agregamos el borde al botón */
    padding: 90px 10px; /* Ajustamos el padding del botón */
}

.footer-bottom {
    text-align: center;
    margin-top: 20px;
}

.payment-icons img {
    height: 40px; /* Ajusta el tamaño de los iconos de pago */
    margin: 0 5px;
}

.carousel-container {
    position: relative;
    width: 100%;
    overflow: hidden;
    padding: 0 40px;
}

.carousel-wrapper {
    overflow: hidden;
}

.carousel-slide {
    display: flex;
    transition: transform 0.5s ease;
}

.carousel-button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    z-index: 1;
}

.carousel-button.prev {
    left: 0;
}

.carousel-button.next {
    right: 0;
}

.producto {
    min-width: 250px;
    margin: 0 10px;
    text-align: center;
}

.producto img {
    max-width: 100%;
    height: auto;
}

.nav-arrows {
    cursor: pointer;
}

.nav-arrows i {
    margin: 0 5px;
    font-size: 20px;
    color: #c00;
}

.carousel-control {
    background: none;
    width: 5%;
}

.carousel-control.left, .carousel-control.right {
    background-image: none;
}

.mas-vendido {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.header-vendido {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.nav-vendido button {
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
    padding: 5px 10px;
}

.productos-vendido {
    display: flex;
    transition: transform 0.5s ease;
    overflow: hidden;
}

.producto-vendido {
    flex: 0 0 25%;
    padding: 10px;
    text-align: center;
}

.producto-vendido img {
    max-width: 100%;
    height: auto;
}

.producto-vendido h3 {
    font-size: 14px;
    margin: 10px 0;
}

.producto-vendido p {
    font-weight: bold;
    color: #c00;
}

.ofertas-section {
    max-width: 1200px;
    margin: 40px auto;
    padding: 0 15px;
}

.productos-ofertas {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.producto-vendido {
    background: white;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.producto-vendido:hover {
    transform: translateY(-5px);
}

.producto-vendido img {
    width: 100%;
    height: auto;
    object-fit: contain;
    margin-bottom: 15px;
}

.producto-vendido h3 {
    font-size: 16px;
    margin: 10px 0;
    color: #333;
}

.producto-vendido p {
    font-size: 18px;
    color: #c00;
    font-weight: bold;
    margin: 10px 0;
}

@media (max-width: 768px) {
    .productos-ofertas {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    }
}

</style>



