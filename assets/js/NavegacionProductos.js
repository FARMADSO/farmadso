// Función para mostrar el contenido de la opción seleccionada y ocultar los demás
function mostrarContenido(categoria) {
    // Ocultar todos los elementos de contenido
    document.getElementById('medicamentos').style.display = 'none';
    document.getElementById('bienestar').style.display = 'none';
    document.getElementById('belleza').style.display = 'none';
    document.getElementById('cuidado').style.display = 'none';

    // Mostrar solo el contenido de la categoría seleccionada
    document.getElementById(categoria).style.display = 'block';
}

// Mostrar inicialmente la vista de "Medicamentos"
mostrarContenido('medicamentos');





function toggleMobileMenu() {
    var mobileMenu = document.getElementById("mobile-menu");
    if (mobileMenu.style.display === "block") {
        mobileMenu.style.display = "none";
    } else {
        mobileMenu.style.display = "block";
    }
}