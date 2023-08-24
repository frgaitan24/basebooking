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
    <title>Localidades</title>
    <link rel="stylesheet" href="CSS/localidades.css">
    <link rel="stylesheet" type="text/css" href="CSS/StyleIndex.css">

</head>

<body>
    <div id="menuContainer"></div>

    <div class="container">
        <div class="localities">
            <div class="locality" onclick="toggleDetails('locality1')">
                <h2>Heredia</h2>
                <p>La ciudad de las flores</p>

            </div>
            <div class="details" id="locality1">
                <h3>Oxigeno</h3>
                <p>Información y cartelera del Cine 1.</p>
                <button class="btn-map" onclick="showMap('map', 9.9965955, -84.1261514, 'Cine 1')">Ver en el
                    mapa</button>
            </div>


            <div class="locality" onclick="toggleDetails('locality2')">
                <h2>San José</h2>
                <p>La capital de Costa Rica</p>
            </div>
            <div class="details" id="locality2">
                <h3>Lincon</h3>
                <p>Información y cartelera del Cine 2.</p>
                <button class="btn-map" onclick="showMap('map', 9.9623998, -84.0584719, 'Cine 2')">Ver en el
                    mapa</button>
            </div>
            <div class="locality" onclick="toggleDetails('locality3')">
                <h2>Cartago</h2>
                <p>Provincia caracteristica por sus montañas</p>
            </div>
            <div class="details" id="locality3">
                <h3>Paseo Metropoli</h3>
                <p>Información y cartelera del Cine 3.</p>
                <button class="btn-map" onclick="showMap('map',9.8542048, -83.9664751, 'Cine 3')">Ver en el
                    mapa</button>
            </div>
        </div>
        <div id="map-container">
            <div id="map"></div>
        </div>
    </div>

    <div id="footerContainer"></div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="JS/localidades.js"></script>
    <script src="JS/menu.js"></script>
    <script src="JS/footer.js"></script>


</body>

</html>