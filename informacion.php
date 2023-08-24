<?php
session_start();
$_SESSION['theatre_n'] = null;
$_SESSION['timer'] = null;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Nuevo Cine</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/styleInfo.css">
    <link rel="stylesheet" type="text/css" href="CSS/StyleIndex.css">
</head>

<body>
    <div id="menuContainer"></div>
    <div id="contenedor">


        <div id="contenido">

            <div id="quienes-somos">
                <h2>¿Quiénes somos?</h2>
                <p>Somos una empresa de entretenimiento fundada en Costa Rica en 2022. Ofrecemos una experiencia
                    cinematográfica de primer nivel en nuestras modernas salas equipadas con tecnología de punta.
                    Nuestro equipo de expertos está comprometido a brindar el mejor servicio a nuestros clientes. Como
                    empresa costarricense, estamos orgullosos de poder contribuir a la industria del entretenimiento en
                    nuestro país.</p>

                <div id="historia">
                    <h3>Nuestra historia</h3>
                    <p>Fuimos fundados en 2022 por un grupo de emprendedores apasionados por el cine, la tecnología y la
                        innovación. Todos con amplia experiencia en la industria del entretenimiento, unimos nuestras
                        habilidades y conocimientos para crear una nueva propuesta de cine en Costa Rica. Invertimos en
                        la más avanzada tecnología para proyectores, sonido envolvente y butacas de última generación
                        para ofrecer la mejor experiencia cinematográfica. Abrimos nuestras puertas en octubre del 2022
                        recibiendo una gran aceptación del público desde el inicio.</p>
                </div>
            </div>
        </div>

        <div id="pie-pagina">
            Derechos reservados &copy; Nuevo Cine 2023
        </div>

    </div>
    <div id="footerContainer"></div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="JS/menu.js"></script>
    <script src="JS/footer.js"></script>
</body>

</html>