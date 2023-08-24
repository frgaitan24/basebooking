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
</head>
<body>
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-3">
                    <a href="#" class="logo-link">
                        <img src="IMG/LOGO.jpg" alt="Logo del cine" class="logo-img">
                    </a>
                </div>
                <div class="col-9">
                    <nav class="navbar navbar-expand-lg navbar-light justify-content-end">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="home.php">Home</a>
                            </li>
                            <!--  
                            <li class="nav-item">
                                <a class="nav-link" href="registro.html">Registrate</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.html">Iniciar Sesion</a>
                            </li>
                            <li class="nav-item"> -->
                                <a class="nav-link" href="booking.php">Boletos y asientos</a>
                            </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="localidades.php">Localidades</a>
                                </li>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="menu_Comidas.php">Comidas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="reseñas.php">Reseñas</a>
                                </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="informacion.php">Información</a>
                            </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#ayuda">Ayuda</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</body>
</html>