<?php
session_start();
$_SESSION['theatre_n'] = null;
$_SESSION['timer'] = null;
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/pasarela_pagos.css">
    <link rel="stylesheet" href="CSS/botonSubmit.css">
    <title>Pasarela de pagos</title>
</head>

<body>

    <div class="container">
        <h1 class="title_paso2" id="title_paso2">Último paso</h1>

        <form action="pagos.php" method="POST">

            <div class="row">

                <div class="col">

                    <h3 class="title">Datos personales</h3>

                    <div class="inputBox">
                        <span>Nombre completo :</span>
                        <input type="text" placeholder="ingrese su nombre aquí..." name="nombre" required>
                    </div>
                    <div class="inputBox">
                        <span>Correo :</span>
                        <input type="email" placeholder="ejemplo@ejemplo.com" name="correo" required>
                    </div>
                    <div class="inputBox">
                        <span>Dirección :</span>
                        <input type="text" placeholder="ciudad - calle - señas" name="direccion" required>
                    </div>
                    <div class="inputBox">
                        <span>Ciudad :</span>
                        <input type="text" placeholder="ingrese su localidad aquí..." name="ciudad" required>
                    </div>

                </div>

                <div class="col">

                    <h3 class="title">Método de Pago</h3>

                    <div class="inputBox">
                        <span>Tarjetas aceptadas :</span>
                        <img src="IMG/card_img.png" alt="">
                    </div>
                    <div class="inputBox">
                        <span>Nombre de Tarjeta :</span>
                        <input type="text" placeholder="dueño de la tarjeta aquí..." name="nombretarjeta" required>
                    </div>
                    <div class="inputBox">
                        <span>Número de tarjeta :</span>
                        <input type="number" placeholder="0000-0000-0000-0000" name="numerotarjeta" required>
                    </div>
                    <div class="inputBox">
                        <span>Mes exp :</span>
                        <input type="text" placeholder="ejemplo: Enero" name="mesexpiracion" required>
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>Año exp :</span>
                            <input type="text" placeholder="ejemplo: 2022" name="fechaexpiracion" required>
                        </div>
                        <div class="inputBox">
                            <span>CVV :</span>
                            <input type="number" placeholder="000" name="cvv" required>
                        </div>
                    </div>

                </div>

            </div>
            <a href="booking.php" name="regresar" value="regresar" class="regresar">Regresar</a>
            <button type="submit" name="pagar" value="pagar" id="pagar" class="pagar">Pagar</button>

        </form>

    </div>
    <script src="JS/pasarela_pagos.js"></script>
    <script src="JS/functions_asientos.js"></script>
</body>

</html>