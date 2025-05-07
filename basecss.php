
<style>

body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
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
}

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

.dropdown.dropdown-menu li a {
    padding: 10px 15px;
    display: block;
    text-decoration: none;
    color: #000 !important;
}

.dropdown-menu li a:hover {
    background-color: #f0f0f0;
}


/* Estilo para el cambio de color al pasar el ratón */
.main-nav ul li a:hover {
    background-color: #ddd;
    color: #333;
}

/* Estilos específicos para el menú de cuenta */
.account-menu {
    width: 180px;
    padding: 0;
}

.account-button {
    background-color: #c00;
    color: #fff;
    text-align: center;
    padding: 10px 15px;
    margin-bottom: 5px;
    display: block;
    text-decoration: none;
    border-radius: 5px;
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


/* Agregar css de las demás cosas antes del pie de página*/



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