
// Función para agregar eventos de hover en las tarjetas de películas
function agregarEventosHover() {
    const cards = document.querySelectorAll('.card');

    cards.forEach((card) => {
        card.addEventListener('mouseover', () => {
            card.style.transform = 'translateY(-10px)';
        });

        card.addEventListener('mouseout', () => {
            card.style.transform = 'translateY(0)';
        });
    });
}

// Función para manejar el envío del formulario de registro
function manejarEnvioFormulario() {
    const registrationForm = document.getElementById('registration-form');

    registrationForm.addEventListener('submit', function (event) {
        event.preventDefault();
        alert("Registro exitoso. Serás redirigido a la página de inicio");
        window.location.href = "home.html";
    });
}

// Función principal que se ejecuta al cargar la página
function main() {
    // Mostrar mensaje de bienvenida
    mostrarMensajeBienvenida();

    // Agregar eventos hover a las tarjetas de películas
    agregarEventosHover();

    // Manejar el envío del formulario de registro
    manejarEnvioFormulario();
}

// Ejecutar la función principal cuando se carga la página
document.addEventListener('DOMContentLoaded', main);
