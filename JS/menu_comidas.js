// Insertar comida
const insertForm = document.getElementById('insertForm');
insertForm.addEventListener('submit', e => {
  e.preventDefault();
  
  const nombre = document.getElementById('nombre').value;
  const descripcion = document.getElementById('descripcion').value;
  const precio = document.getElementById('precio').value;

  fetch('../PHP/menu_comidas.php', {
    method: 'POST',
    body: new FormData(insertForm)
  })
  .then(res => res.text())
  .then(data => {
    console.log(data);
    insertForm.reset();
    // Manejar respuesta...
  })
  .catch(err => console.error(err));

});

/*async function obtenerProductos() {
    const response = await fetch('/api/menu_comidas.php');
    return await response.json();
  }
  
  // Poblar selects
  async function populardSelects() {
    const productos = await obtenerProductos(); 
  
    const updateSelect = document.getElementById('productoUpdate');
    const deleteSelect = document.getElementById('productoDelete');
  
    productos.forEach(p => {
      const option1 = document.createElement('option');
      option1.value = p.id;
      option1.textContent = p.nombre;
      updateSelect.appendChild(option1);
  
      // Crear opciones para deleteSelect también
    });
  }

// Actualizar comida
const updateForm = document.getElementById('updateForm');
insertForm.addEventListener('submit', e => {
  e.preventDefault();
  
  const nombre = document.getElementById('nombre').value;
  const precio = document.getElementById('precio').value;

  fetch('../PHP/menu_comidas.php', {
    method: 'POST',
    body: new FormData(insertForm)
  })
  .then(res => res.text())
  .then(data => {
    console.log(data);
    insertForm.reset();
    // Manejar respuesta...
  })
  .catch(err => console.error(err));

});
// Eliminar comida*/