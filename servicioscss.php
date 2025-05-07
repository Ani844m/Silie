
<?php
header("Content-type: text/css");
?>
/* Remove the <style> tags and start CSS directly */
body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

header {
    text-align: center;
    padding: 100px 20px;
    width: 100%;
    position: relative; /* Necesario para el pseudo-elemento */
    overflow: hidden; /* Evita que la imagen sobresalga */
}


.texto-header {
    margin-top: -70px; /* Ajusta según sea necesario */
}



/* Imagen de fondo personalizable */
header::before {
    content: "";
    background-image: url('https://bksite.ujmd.edu.sv/wp-content/uploads/2019/02/wsi-imageoptim-dispositivosnota.jpg'); /* Reemplaza con la URL de tu imagen */
    background-size: cover; /* Ajusta la imagen para cubrir el área */
    background-position: center; /* Centra la imagen */
    background-repeat: no-repeat; /* Evita que la imagen se repita */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0.7; /* Ajusta la opacidad */
    z-index: -1; /* Envía la imagen detrás del texto */
}

/* Inicialmente oculto */
header h1, 
header h2 {
    position: relative;
    color: #333;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    
    opacity: 0; /* Oculto inicialmente */
}

/* Animación para H1 (baja desde arriba) */
header h1 {
    animation: fallFromTop 1s ease-out forwards;
    animation-delay: 0.5s;
}

/* Animación para P (sube desde abajo) */
header h2 {
    animation: riseFromBottom 1s ease-out forwards;
    animation-delay: 1s;
}

/* Definición de la animación de caída */
@keyframes fallFromTop {
    from {
        opacity: 0;
        transform: translateY(-50px); /* Baja desde arriba */
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Definición de la animación de subida */
@keyframes riseFromBottom {
    from {
        opacity: 0;
        transform: translateY(50px); /* Sube desde abajo */
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}



.solutions {
    padding: 40px 20px;
    width: 80%;
    max-width: 1200px;
    margin: 0 auto;
}

.solutions h2 {
    text-align: left;
    margin-bottom: 30px;
    color: #a70707;
    font-family: 'Montserrat', sans-serif;
    font-weight: 1; /* Aplica el estilo "Bold" que seleccionaste */
}

.solution-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

.solution-item {
    background-color: #fff;
    padding: 19px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-top: 4px solid rgb(156, 156, 156); /* Agrega un borde gris en la parte superior */
    text-align: center;

}

.solution-item h3 {
    font-size: 1.5em;
    margin-bottom: 10px;
    color: #333;
    text-align: center; /* Centra el texto horizontalmente */
    white-space: nowrap; /* Evita que el texto se divida en varias líneas */
    font-size: 16px;
}

/* Agrega estas reglas para cambiar los colores */
.solution-item:nth-child(1) h3 {
    color: rgb(14, 172, 245); /* Cambia el color a azul*/
    text-align: center;
    font-family: 'Montserrat', sans-serif;
    font-weight: 2; /* Aplica el estilo "Bold" que seleccionaste */
}

/* Agrega estas reglas para cambiar los colores */
.solution-item:nth-child(2) h3 {
    color: rgb(175, 9, 9); /* Cambia el color a rojo */
    text-align: center;
    font-family: 'Montserrat', sans-serif;
    font-weight: 2; /* Aplica el estilo "Bold" que seleccionaste */
}

.solution-item:nth-child(3) h3 {
    color: darkgreen; /* Cambia el color a verde oscuro */
    text-align: center;
    font-family: 'Montserrat', sans-serif;
    font-weight: 2; /* Aplica el estilo "Bold" que seleccionaste */
}

.solution-item p {
    line-height: 1.6;
    color: #555;
}




.container { /* no se cambia */
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

.register-button {
    background-color: #c00;
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

/*hasta aqui*/

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

.ofertas-container {
    padding: 20px;
    background-color: #f9f9f9;
}

.ofertas-title {
    text-align: left;
    margin-bottom: 20px;
    color: #c00; /* Texto en rojo */
}

.novedades-container {
    margin-bottom: 20px;
}

.novedades-title {
    text-align: left;
    margin-bottom: 10px;
    color: #c00; /* Texto en rojo */
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-arrows {
    font-size: 1.2em;
    color: #c00;
}

.gray-background {
    background-color: #f9f9f9; /* Fondo gris para la sección */
    padding-top: 10px; /* Espacio superior para separar del menú */
}


.productos-container {
    display: flex;
    overflow: hidden;
    width: 2730px; /* Ancho de tu pantalla */
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

</style>
