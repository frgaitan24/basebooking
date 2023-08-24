
<?php
$conn = mysqli_connect("localhost", "root", "", "cinelitas");



// Insert 
if(isset($_POST['insert'])) {

  $name = $_POST['nombre'];
  $description = $_POST['descripcion']; 
  $price = $_POST['precio'];

  $sql = "INSERT INTO comidas (nombre, descripcion, costo) VALUES ('$name', '$description', $price)";

  if(mysqli_query($conn, $sql)){
    echo "Product inserted successfully";
  } else {
    echo "Error inserting product: " . mysqli_error($conn);
  }
}

// Update 
if(isset($_POST['update'])) {
  $id = $_POST['productoId'];
  $price = $_POST['precioUpdate'];

  $sql = "UPDATE comidas SET costo=$price WHERE id=$id";

  if(mysqli_query($conn, $sql)){
    echo "Product updated successfully";
  } else {
    echo "Error updating product: " . mysqli_error($conn);
  }
}

// Delete 
if(isset($_POST['delete'])) {
  $id = $_POST['productoId'];

  $sql = "DELETE FROM comidas WHERE id=$id";

  if(mysqli_query($conn, $sql)){
    echo "Product deleted successfully";
  } else {
    echo "Error deleting product: " . mysqli_error($conn);
  }
}

// Get 
$sql = "SELECT * FROM comidas";
$result = mysqli_query($conn, $sql);

$productos = [];
while($row = mysqli_fetch_assoc($result)) {
  $productos[] = $row; 
}

echo json_encode($productos);

