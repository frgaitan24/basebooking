<?php

// Obtenemos la reseña 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reviewText = $_POST["review"];

    $conn = new mysqli("localhost","root","Karaoke.10", "cinelitas");
    
    $sql = "INSERT INTO resenas (texto) VALUES ('$reviewText')";
    $conn->query($sql);

    echo "success";
}
?>
