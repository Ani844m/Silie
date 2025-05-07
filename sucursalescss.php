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
    justify-content: flex-start;
    align-items: center;
}

.header {
    background: linear-gradient(to bottom, #1f1e1e, #000);
    padding: 17px 0;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    width: 100%;
}

.header .logo {
    margin-right: auto;
}

.header .cart,
.header .currency,
.header .search-bar {
    margin-left: 10px;
}

.header .right-align {
    flex-grow: 1;
}

.search-bar {
    margin-left: auto;
}

.logo img {
    height: 75px;
}

.cart, .currency {
    color: #fff;
    margin-top: 29px;
}

.currency select {
    display: block !important;
    width: auto !important;
    visibility: visible !important;
    background-color: #ffffff;
    color: #000;
    border: none;
    padding: 7px 10px;
}

.phone-search-container {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    margin-top: 0px;
}

.phone-number {
    color: #fff;
    font-size: 17px;
    margin-bottom: 4px;
    margin-top: 0;
    position: relative;
}

.search-bar {
    display: flex;
    border: 1px solid #ccc;
    border-radius: 4px;
    overflow: hidden;
    margin-top: 0;
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
}

.main-nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    
}

.main-nav ul li a {
    color: #fff;
    text-decoration: none;
    padding: 10px 15px;
    display: block;
    font-size: 12px;
}
/* selector modificado para afectar solo la parte principal del menú */
.main-nav > div > ul > li > a {
    color: #fff;
    text-decoration: none;
    padding: 10px 15px;
    display: block;
    font-size: 12px;
    font-weight: bold;
    letter-spacing: 1px;
}

/* estilos  para los botones "identificarse" y "refstrate" */
.account-menu .account-button,
.account-menu .register-button {
    background-color: #c00;
    color: #fff !important;
    border: none;
    padding: 10px 15px;
    display: block;
    text-decoration: none;
    text-align: center;
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
    opacity: 0;
    visibility: hidden;
    transform: translateY(10px);
    transition: all 0.3s ease;
}

.dropdown:hover .dropdown-menu {
    display: block;
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

/* For submenu transitions */
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
    opacity: 0;
    visibility: hidden;
    transform: translateX(10px);
    transition: all 0.3s ease;
}

.dropdown-submenu:hover .submenu {
    display: block;
    opacity: 1;
    visibility: visible;
    transform: translateX(0);
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

.contact-section {
    background-color: #f5f5f5;
    padding: 40px 0;
}

.contact-section h3 {
    color: #c00;
    text-align: center;
    margin-bottom: 30px;
}

.map-section {
    margin: 40px 0;
}

.sucursales-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
}

.sucursales-container h2 {
    color: #c00;
    text-align: center;
    margin-bottom: 40px;
}

.sucursales-lista {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    padding: 20px;
}

.sucursal-card {
    background: white;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.sucursal-card:hover {
    transform: translateY(-5px);
}

.sucursal-card h3 {
    color: #c00;
    margin-bottom: 15px;
    font-size: 1.2em;
}

.sucursal-card p {
    color: #666;
    margin-bottom: 10px;
    line-height: 1.6;
}

.sucursal-card i {
    color: #c00;
    margin-right: 8px;
}

@media (max-width: 768px) {
    .sucursales-lista {
        grid-template-columns: 1fr;
    }
}
.sucursal-card.principal-sd h3 {
    color: #c00;
}

.breadcrumb-container a {
    color: #c00;
    text-decoration: none;
    font-size: 0.9em;
}

.breadcrumb-container a:hover {
    color: #c00;
}
.breadcrumb {
    padding: 10px 20px;
    background-color: #ffffff;
    font-size: 14px;
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