<?php
session_start();
$_SESSION['theatre_n'] = null;
$_SESSION['timer'] = null;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Menú Principal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/StyleIndex.css">


</head>

<body>
<div class='navbar'>
		<ul>
			<?php if (isset($_SESSION['name'])) { ?>
				<li style="padding-left:50px;padding-right:20px;padding-top:6px;"><button class='sign'
						onclick="document.location.href='userlogout.php'">Salir</button></li>
			<?php } else { ?>
				<li style="padding-left:50px;padding-right:20px;padding-top:6px;"><button class='sign'
						onclick="document.location.href='index.php'">Loguearse</button></li>
			<?php } ?>

		</ul>
	</div>
    <div id="menuContainer"></div>

    <div class="container-fluid">
        <h1 class="text-center mt-5">¡Bienvenido a Cinelitas, las mejores salas de cine de la ciudad!</h1>

        <p class="text-center">A continuación se le presenta el menú de las películas disponibles <br>
            de las cuales usted podrá elegir, además de recomendaciones populares.</p>

        <h2 class="text-center">Cartelera Disponible</h2>
    </div>

    <section id="cartelera" class="c-1">
        <img src="IMG/Oppenheimerjpeg.jpeg" class="c-1" alt="Oppenheimer">
        <img src="IMG/John wick 4.jpg" class="c-1" alt="John Wick">
        <img src="IMG/Jurassic World.jpg" class="c-1" alt="Jurassic World">
        <img src="IMG/Rapido y furioso 9.jpg" class="c-1" alt="Rapido y Furioso">
        <img src="IMG/Transformers.jpg" class="c-1" alt="Transformers">
        <img src="IMG/Dragon Ball.jpg" class="c-1" alt="Dragon Ball">
        <img src="IMG/godzilla.jpg" class="c-1" alt="godzilla">
        <img src="IMG/Venom 2.jpg" class="c-1" alt="Venom">
    </section>
    </div>

    <section id="peliculas" class="py-5">
        <div class="container">
            <h2 class="text-center">Estrenos Populares</h2>
            <div class="row mt-4">
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="IMG/Barbie.jpg" class="card-img-top" alt="Barbie">
                        <div class="card-body">
                            <h6 class="card-title">Barbie</h6>
                            <p class="card-text">Barbie</p>
                            <a href="#" class="btn btn-primary">Ver Detalles</a>
                            <a href="booking.php" class="btn btn-primary">Comprar</a>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="IMG/Oppenheimerjpeg.jpeg" class="card-img-top" alt="Oppenheimer">
                        <div class="card-body">
                            <h6 class="card-title">Oppenheimer</h6>
                            <p class="card-text">Oppenheimer</p>
                            <a href="#" class="btn btn-primary">Ver Detalles</a>
                            <a href="booking.php" class="btn btn-primary">Comprar</a>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="IMG/Ritosdiabolicos.png" class="card-img-top" alt="Oppenheimer">
                        <div class="card-body">
                            <h6 class="card-title">Ritos diabólicos</h6>
                            <p class="card-text">Ritos diabólicos</p>
                            <a href="#" class="btn btn-primary">Ver Detalles</a>
                            <a href="booking.php" class="btn btn-primary">Comprar</a>

                        </div>
                    </div>
                </div>

                <!-- <h4>Estreno<h4><br> -->
                <!--<h6>Un detective al borde de la jubilaciónjunto con un profesor de estudios africanos<br>
                                   buscan localizar a un asesino en serie que está realizando la antigua práctica <br>
                                   de magia negra de Muti.</h6> <br><br>
                                 
                                   <h6>Créditos y reparto</h6><br>
                                   <h6>ActoresCole Hauser, Julie Lott, Morgan Freeman</h6><br>
                                   <h6>DirectoresGeorge Gallo</h6></p>
                                    <a href="#" class="btn btn-primary">Ver Detalles</a>-->
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>

    <!-- <section id="proximos-estrenos" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Próximos Estrenos</h2>
        </div>
    </section> -->

    <div id="footerContainer"></div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="JS/JSIndex.JS"></script>
    <script src="JS/menu.js"></script>
    <script src="JS/footer.js"></script>

</body>

</html>