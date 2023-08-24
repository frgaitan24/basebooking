// footer.js
document.addEventListener("DOMContentLoaded", function () {
    // Cargar el contenido del menú desde menu.html
    fetch("footer.php")
      .then(response => response.text())
      .then(html => {
        // Insertar el código HTML en el contenedor
        const menuContainer = document.getElementById("footerContainer");
        menuContainer.innerHTML = html;
      })
      .catch(error => console.error("Error al cargar el menú:", error));
  });