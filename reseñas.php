<?php
session_start();
$_SESSION['theatre_n'] = null;
$_SESSION['timer'] = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/reseñas.css">
    <link rel="stylesheet" type="text/css" href="css/StyleIndex.css">

    <title>Reseñas</title>
</head>
<body>
    <div id="menuContainer"></div>

<h1>¡Bienvenido al menú de reseñas para los usuarios!</h1>

<p>A continuación los usuarios podran dejar sugerencias para la mejora continua de nuestra pagina web.</p>

<div id="seccion-reseñas">
    <h3>Commentarios:</h3>
    <div id="Commentarios-container"></div>
</div>

<div class="reseñas-box">
    <h3>Escriba su commentario a continuación:</h3>
    <form id="reviewForm">
        <textarea id="reviewText" cols="30" rows="10" placeholder="Escriba su reseña aqui..."></textarea>
        <div class="grupo-btns">
            <button type="submit" class="btn-publicar">Publicar</button>
            <button class="btn-borrar">Borrar</button>
        </div>
    </form>
    <div id="reviewContainer"></div>    
</div>

<div id="footerContainer"></div>

<script src="JS/reseñas.js"></script>
<script src="JS/menu.js"></script>
<script src="JS/footer.js"></script>

</body>
</html>