
const pintarTabla = productos => {

  // Limpiar tabla
  document.getElementById('productos').innerHTML = '';

  // Recorrer y crear filas
  productos.forEach(p => {
    
    // Crear fila
    const row = document.createElement('tr');
    row.innerHTML = `
      <td>${p.id}</td>
      <td>${p.nombre}</td>
      <td>${p.descripcion}</td>
      <td>${p.costo}</td>
    `;

    // Agregar fila a tabla
    document.getElementById('productos').appendChild(row);

  });

}

// Obtener comidas
// Al cargar el DOM
document.addEventListener('DOMContentLoaded', async () => {

  const productos = await obtenerProductos();
  
  pintarTabla(productos);

});

const obtenerProductos = async () => {

  const resp = await fetch('../PHP/menu_comidas.php');
  return await resp.json();

}
              

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
  .then(async data => {
    console.log(data);
    const productos = await obtenerProductos();
  
  // Pintar tabla
    pintarTabla(productos);
    insertForm.reset();
    
    // Manejar respuesta...
  })
  .catch(err => console.error(err));

});

// Actualizar comida
const updateForm = document.getElementById('updateForm');
updateForm.addEventListener('submit', e => {
  e.preventDefault();
// Obtener valor del input
const productoId = document.getElementById('productoId').value;
const precioUpdate = document.getElementById('precioUpdate').value;

fetch('../PHP/menu_comidas.php', {
  method: 'POST',
  body: new FormData(updateForm)
})
.then(res => res.text())
.then(async data => {
  console.log(data);
  const productos = await obtenerProductos();
  
  // Pintar tabla
  pintarTabla(productos);
  updateForm.reset();
  // Manejar respuesta...

})
.catch(err => console.error(err));
});


// Eliminar comida
const deleteForm = document.getElementById('deleteForm');
deleteForm.addEventListener('submit', e => {
  e.preventDefault();
// Obtener valor del input
const productoId = document.getElementById('productoId').value;

fetch('../PHP/menu_comidas.php', {
  method: 'POST',
  body: new FormData(deleteForm)
})
.then(res => res.text())
.then(async data => {
  console.log(data);
  const productos = await obtenerProductos();
  
  // Pintar tabla
  pintarTabla(productos);
  deleteForm.reset();
  // Manejar respuesta...
})
.catch(err => console.error(err));
});

