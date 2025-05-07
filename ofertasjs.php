
<script>
    
document.addEventListener('DOMContentLoaded', function() {
    const productosContainer = document.querySelector('.productos-container');
    const productos = document.querySelectorAll('.producto');
    const prevButton = document.querySelector('.fa-chevron-left');
    const nextButton = document.querySelector('.fa-chevron-right');
    let currentIndex = 0;
    const productosPorVista = 4;
    const productoAncho = 200; // Ancho fijo de 200px

    function actualizarVista() {
        const desplazamiento = -currentIndex * productoAncho;
        productosContainer.style.transform = `translateX(${desplazamiento}px)`;
    }

    nextButton.addEventListener('click', () => {
        if (currentIndex < productos.length - productosPorVista) {
            currentIndex++;
            actualizarVista();
        }
    });

    prevButton.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            actualizarVista();
        }
    });

    // Mostrar solo los primeros cuatro productos al cargar la página
    productosContainer.style.transform = `translateX(0px)`;
});

</script>