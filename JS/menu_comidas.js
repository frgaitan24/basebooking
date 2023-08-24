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
