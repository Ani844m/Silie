<style>
<?php
header("Content-type: text/css");
?>
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


/* Main navigation styles */
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


/* catalogo de novedades*/
.novedades {
    text-align: left;
    padding: 20px;
  }
  
  .productos {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
  }
  
  .producto {
    width: 250px;
    border: 1px solid #ddd;
    padding: 10px;
    margin-bottom: 20px;
    position: relative; /* Para posicionar el título de novedad */
  }
  
  .producto img {
    max-width: 100%;
    height: auto;
    margin-bottom: 10px;
    margin-top: 50px;
  }
  
  .producto h3 {
    font-size: 16px;
    margin-bottom: 8px;
    
  }
  
  .producto p {
    font-weight: bold;
    margin-bottom: 25px;
    color: #d52710;
  }
  
  .producto a {
    background-color: #911414;
    color: white;
    text-decoration: none;
    padding: 8px 50px;
    border-radius: 5px;
  }
  
  .titulo-novedad {
    position: absolute;
    top: 10px;
    left: 85px;
    color: rgb(189, 24, 24);
    font-size: 20px; /* Texto más grande */
    font-weight: bold; /* Texto en negrita */
  }

/* catalogo de mas vendido */
.mas-vendido {
            padding: 20px 90px 10px;
            margin-bottom: 0;
        }

        /* Estilo general del header con flex para separar título y flechas */
        .header-vendido {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        /* Estilo del título */
        .header-vendido h2 {
            color: rgb(180, 49, 49);
            font-weight: 900;
            font-size: 25px;
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }

        /* Contenedor de las flechas */
        .nav-vendido {
            display: flex;
            gap: 10px; /* Espacio entre botones */
        }

        /* Estilo de los botones */
        .nav-vendido button {
            background-color: transparent;
            border: none;
            cursor: pointer;
            font-size: 24px;
            color: rgb(85, 85, 213);
            position: relative;
            z-index: 10;
        }

        .nav-vendido button:hover {
            color: darkblue;
        }

        .nav-vendido button span {
            font-size: 20px;
            color: blue;
        }

        .productos-vendido {
            display: flex;
            overflow-x: auto;
            scroll-behavior: smooth;
            -ms-overflow-style: none;
            scrollbar-width: none;
            position: relative;
        }

        .productos-vendido::-webkit-scrollbar {
            display: none;
        }

        .producto-vendido {
            width: 250px;
            border: 1px solid #ddd;
            padding: 16px;
            margin-bottom: 20px;
            text-align: center;
            flex-shrink: 0;
            margin-right: 20px; /* Espacio entre productos */
        }

        .producto-vendido img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .producto-vendido h3 {
            font-size: 14px;
            margin-bottom: 5px;
        }

        .producto-vendido p {
            font-weight: bold;
            color: #800000;
        }

/* catalogo de mas visto */
.mas-visto {
    padding: 10px 90px 20px;
    margin-top: 0;
  }
  
  /* Contenedor del título y las flechas */
  .header-visto {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
  }
  
  /* Título del catálogo */
  .header-visto h2 {
    color: rgb(172, 28, 28);
    font-weight: 900;
    font-size: 25px;
    margin: 0;
    font-family: 'Roboto', sans-serif;
  }
  
  /* Contenedor de flechas */
  .nav-visto {
    display: flex;
    gap: 10px; /* Espacio entre las flechas */
  }
  
  /* Botones de navegación */
  .nav-visto button {
    background-color: transparent;
    border: none;
    cursor: pointer;
    font-size: 24px;
    color: blue;
    position: relative;
    z-index: 10;
  }
  
  .nav-visto button:hover {
    color: darkblue;
  }
  
  .nav-visto button span {
    color: blue;
    font-size: 20px;
  }
  

.productos-visto {
    display: flex;
    overflow-x: auto;
    scroll-behavior: smooth;
    -ms-overflow-style: none;
    scrollbar-width: none;
    position: relative;
}

.productos-visto::-webkit-scrollbar {
    display: none;
}

.producto-visto {
    width: 250px;
    border: 1px solid #ddd;
    padding: 18px;
    margin-bottom: 20px;
    text-align: center;
    flex-shrink: 0;
    margin-right: 20px; /* Espacio entre productos */
}

.producto-visto img {
    max-width: 100%;
    height: auto;
    margin-bottom: 1px;
}

.producto-visto h3 {
    font-size: 14px;
    margin-bottom: 5px;
}

.producto-visto p {
    font-weight: bold;
    color: #800000;
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
    padding-top: 1%;
    margin-bottom: 10px;
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
    
    /* Base responsive styles */
    @media screen and (max-width: 1200px) {
        .container {
            width: 95%;
        }
    
        .productos-vendido,
        .productos-visto {
            padding: 0 20px;
        }
    }
    
    @media screen and (max-width: 992px) {
        .header {
            padding: 10px 0;
        }
    
        .phone-search-container {
            margin-top: 10px;
        }
    
        .main-nav ul {
            gap: 5px;
        }
    
        .main-nav ul li a {
            padding: 10px 15px;
            font-size: 12px;
        }
    
        .hero-slider {
            height: 400px;
        }
    
        .producto-vendido,
        .producto-visto {
            width: 200px;
        }
    }
    
    @media screen and (max-width: 768px) {
        .header {
            flex-wrap: wrap;
        }
    
        .logo img {
            height: 60px;
        }
    
        .phone-search-container {
            width: 100%;
            order: 3;
            margin-top: 15px;
        }
    
        .search-bar {
            width: 100%;
        }
    
        .main-nav ul {
            flex-wrap: wrap;
        }
    
        .dropdown .dropdown-menu {
            width: 100%;
            position: static;
        }
    
        .dropdown-submenu .submenu {
            left: 0;
            top: 100%;
        }
    
        .footer-middle {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
    
        .footer-column {
            width: 100%;
            margin-bottom: 30px;
        }
    
        .footer-column .email-input {
            justify-content: center;
        }
    }
    
    @media screen and (max-width: 576px) {
        .header .cart,
        .header .currency {
            margin-top: 15px;
        }
    
        .productos {
            justify-content: center;
        }
    
        .producto {
            width: 100%;
            max-width: 300px;
        }
    
        .hero-slider {
            height: 300px;
        }
    
        .hero-content h2 {
            font-size: 1.8em;
        }
    
        .footer-top img {
            height: 20px;
            margin: 5px;
        }
    
        .payment-icons img {
            height: 30px;
        }
    }
    
    /* Fix for dropdown menus on touch devices */
    @media (hover: none) {
        .dropdown:hover .dropdown-menu {
            display: none;
        }
    
        .dropdown.active .dropdown-menu {
            display: block;
        }
    }
}

.footer-column {
    margin-bottom: 20px;
    
}

.footer-column h3 {
    margin-bottom: 10px;
}

.footer-column a, .footer-column input, .footerstylemn button {
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


/* Hero Slider */
.hero-slider {
    position: relative;
    height: 500px;
    overflow: hidden;
    margin-bottom: 40px;
}

.hero-slide {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    padding: 0 10%;
    background-size: cover;
    background-position: center;
    color: #fff;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
}

.hero-content {
    max-width: 600px;
}

.hero-content h2 {
    font-size: 2.5em;
    margin-bottom: 20px;
}

.hero-content .cta-button {
    display: inline-block;
    padding: 12px 30px;
    background-color: #c00;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.hero-content .cta-button:hover {
    background-color: #a00;
}
</style>