
<?php
header("Content-type: text/css");
?>
<style>
body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
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


/* Estilos para el menú de productos */
.dropdown-menu {
    width: 200px;
}

.dropdown-menu li a {
    padding: 10px 15px;
    display: block;
}

/* Estilos para la viñeta */
.dropdown > a::after {
    content: '\25BC'; /* Código Unicode para la flecha hacia abajo */
    margin-left: 5px; /* Espacio entre el texto y la flecha */
    font-size: 10px;
    vertical-align: 2px;
}

.breadcrumb {
    padding: 10px 20px;
    background-color: rgb(255, 255, 255);
    font-size: 14px;
    color: #333; /* Texto en gris oscuro */
    text-align: left;
    margin-left: 5px;
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

/* Agregar css de las demás cosas antes del pie de página*/



.container {
    width: 80%;
    margin: 0 auto;
}

.hero {
    background-image: url('https://png.pngtree.com/background/20240721/original/pngtree-golden-electronics-circuit-on-a-stylish-black-background-3d-render-and-picture-image_9797684.jpg'); /* Reemplaza con tu imagen */
    background-size: cover;
    background-position: center;
    color: rgb(255, 255, 255);
    text-align: center;
    padding: 100px 0;
}

/* Animacion de las letras */
.hero-content {
    position: relative;
}

.hero-title {
    animation: slideUpTitle 0.8s ease-out forwards;
    opacity: 0;
    transform: translateY(50px);
}

.hero-subtitle {
    animation: slideUpSubtitle 0.6s ease-out 0.1s forwards;
    opacity: 0;
    transform: translateY(90px);
}

@keyframes slideUpTitle {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideUpSubtitle {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.hero-content h1 {
    font-size: 5em;
    margin-bottom: 10px;
    font-weight: 700;
    text-align: center;
}

.hero-content p {
    font-size: 1.5em;
    margin-right:100px;
    text-align: right;
    font-weight: 900;
    
}

.vision, .mission, .stats {
    padding: 50px 0;
}

.vision .container, .mission .container, .stats .container {
    display: flex;
    justify-content: space-between;
    align-items: left;
    text-align: left;
}

.vision-icon img, .mission-icon img {
    width: 100px; /* Ajusta el tamaño del icono */
}

.stats .stat {
    text-align: center;
}

.stats .stat h2 {
    font-size: 3em;
    margin-bottom: 5px;
    font-weight: 700;
}

.mission-icon {
    order: 1;
    margin-right: 70px; /* Añade o ajusta este margen */
}

.mission-text {
    order: 2;
    
}

.vision-icon {
    margin-left: -90px; /* Ajusta este valor para mover el icono más o menos a la izquierda */
  }

.vision-text {
    text-align: left;
    margin-left: -300px; /* Ajusta este valor para mover el texto más o menos a la izquierda */
  }

.vision-text h2, .mission-text h2 {
    color: rgb(198, 12, 12); /* Añade esta línea para cambiar el color a rojo */
  }

.vision, .mission {
    background-color: #f1f5f7; /* Azul claro para Visión y Misión */
  }
  
.stats {
    background-color: #06355e; /* Azul oscuro para las estadísticas */
    color: white; /* Para que el texto se vea bien sobre el fondo oscuro */
}

.vision-icon img, .mission-icon img {
    width: 150px; /* Aumenta el ancho de los iconos */
    height: auto; /* Mantiene la proporción de aspecto */
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

</style>