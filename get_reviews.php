<?php
// Conectar a la base de datos (como en los ejemplos anteriores)

$conn = new mysqli("localhost","root","", "cinelitas");
// Consultar las reseñas desde la base de datos
$query = "SELECT * FROM resenas";
$result = $conn->query($query);

$reviews = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $reviews[] = "<div>" . htmlspecialchars($row["texto"]) . "</div>";
    }
}
    else {
        $reviews = "<p>No hay reseñas disponibles.</p>";
    }

    echo implode("", $reviews);
?>

<!--CREATE TABLE resenas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  texto VARCHAR(500) NOT NULL,
  fecha DATE NOT NULL DEFAULT CURRENT_TIMESTAMP
);-->