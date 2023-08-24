<?php
session_start();
?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Boletos y Asientos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<!--styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/StyleIndex.css">
	<style>
		* {
			margin: 0px;
			padding: 0px;
			font-family: comic sans;
		}

		select:required:invalid {
			color: gray;
		}

		option[value=""][disabled] {
			display: none;
		}

		option {
			color: black;
		}

		.locat {
			height: 40px;
			width: 100%px;
			background: #0b243d;
			color: white;
			display: block;

		}


		.locat1 {
			width: 100%;
			height: auto;
			margin-top: 10px;
			display: block;

		}

		.locat2 {
			height: 40px;
			width: 100%;
			background: #0b243d;
			color: white;
			display: block;
			margin-top: 10px;

		}


		.swiper-container {
			width: 100%;
			height: 300px;
		}

		.swiper-slide {
			text-align: center;
			font-size: 18px;
			background: #fff;

			/* Center slide text vertically */
			display: -webkit-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			-webkit-justify-content: center;
			justify-content: center;
			-webkit-box-align: center;
			-ms-flex-align: center;
			-webkit-align-items: center;
			align-items: center;
		}

		input[type="submit"] {
			border: 1px;
			background: #fb2525;
			outline: none;
			width: 120px;
			height: 30px;
			color: #fff;
			border-radius: 15px;

		}

		input[type="button"] {
			border: 1px;
			background: #fb2525;
			outline: none;
			width: 120px;
			height: 30px;
			color: #fff;
			border-radius: 15px;

		}

		.title2 {
			width: 100%;
			height: 70px;
			background: black;
			color: white;
		}


		.h1 {
			margin-left: 0px;
			background: #151719;
			color: white;
			height: 50px;

		}




		.h5 a {
			text-decoration: none;
			color: white;
		}

		.sign {

			border-radius: 6px;
			background-color: #1976D2;
			border: none;
			color: white;
			padding: 8px 10px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			cursor: pointer;
			float: right;

		}

		.sign:hover {
			background-color: #ECEFF1;
			color: black;
		}

		.navbar li a:hover {
			background-color: black;
			color: white;

		}

		.navbar ul {
			height: 50px;
			list-style-type: none;
			overflow: hidden;
			background-color: #0b243d;
		}

		.navbar li a {
			float: left;
			display: block;
			color: white;
			text-align: center;
			padding: 12px 16px;
			text-decoration: none;
			font-size: 22px;
		}
	</style>
</head>

<body class="animated fadeIn">


	<?php
	include('dbcon.php');
	$count = 0;
	$loc = "null";
	$mov = "null";


	if (isset($_POST['loc']) && isset($_POST['mov'])) {
		$loc = $_POST['loc'];
		$mov = $_POST['mov'];
		$_SESSION['movie_n'] = $mov;
		$_SESSION['location'] = $loc;

	} else {
		echo "";
	}

	$qry = "select * from movies";
	$run = mysqli_query($con, $qry);


	$qry1 = "SELECT DISTINCT Location FROM theatres;";
	$run1 = mysqli_query($con, $qry1);

	$qry2 = "SELECT Theatre_name, time1, time2, time3, time4, time5 FROM theatres where Location='$loc' and Movie_Name='$mov';";
	$run2 = mysqli_query($con, $qry2);


	?>


	<div class='navbar'></div>
	<div id="menuContainer"></div>

	<?php
	include('dbcon.php');

	$qry1 = "SELECT * from movies";

	$result = mysqli_query($con, $qry1);


	$row_count = mysqli_num_rows($result);
	?>

	<center>
		<form method="post">

			<table width="700px" style="margin-top: 20px; margin-bottom: 20px" height="50px">
				<tr>

					<td width="50%">

						<select required style="width:100%; height:30px " name="mov">
							<option value="" disabled selected>Seleccione una película</option>
							<?php
							while ($data = mysqli_fetch_array($run)) {
								if ($data['Release_date'] <= "2018-10-15") {
									?>
									<option value="<?php echo $data['Movie_Name']; ?>"> <?php echo $data['Movie_Name']; ?>
									</option>
									<?php
								}
							}
							?>
						</select>

					</td>

					<td width="50%">
						<select required style="width:100%; height:30px " name="loc">
							<option value="" disabled selected>Seleccione un lugar</option>

							<?php

							while ($data1 = mysqli_fetch_array($run1)) {
								?>
								<option value="<?php echo $data1["Location"]; ?>"> <?php echo $data1["Location"]; ?>
								</option>
								<?php
							}
							?>
						</select>

					</td>

				</tr>
			</table>
			<input type="submit" name="search_show" value="Buscar" />
		</form>
	</center>
	<br>
	<hr>


	<?php
	if (isset($_POST['search_show'])) {

		?>
		<br>
		<div id="lo" class="locat">
			<center>
				<h4 style="padding-top:10px;">
					<center>
						<?php echo "Lugar : " . $_POST["loc"]; ?>
					</center>
				</h4>
		</div>

		<div id="lo2" class="locat2">
			<center>
				<h4 style="padding-top:10px;">
					<center>
						<?php echo "Pelicula : " . $_POST["mov"]; ?>
					</center>
				</h4>
		</div>
		<center>

			<div id="lo1" class="locat1">
				<form method="post">
					<table width="100%" border="1" height="200px">
						<?php

						while ($data2 = mysqli_fetch_array($run2)) {
							?>
							<tr>
								<td>
									<input type="radio" name="theatre" value="<?php echo $data2["Theatre_name"]; ?>" /> <?php echo $data2["Theatre_name"]; ?>
								</td>
								<?php
								if (!empty($data2["time1"])) {
									?>
									<td>
										<input type="radio" name="time" value="<?php echo $data2["time1"]; ?>" /> <?php echo $data2["time1"]; ?>
									</td>
									<?php
								}
								if (!empty($data2["time2"])) {
									?>

									<td>
										<input type="radio" name="time" value="<?php echo $data2["time2"]; ?>" /> <?php echo $data2["time2"]; ?>
									</td>
									<?php
								}
								if (!empty($data2["time3"])) {
									?>
									<td>
										<input type="radio" name="time" value="<?php echo $data2["time3"]; ?>" /> <?php echo $data2["time3"]; ?>
									</td>
									<?php
								}
								if (!empty($data2["time4"])) {
									?>
									<td>
										<input type="radio" name="time" value="<?php echo $data2["time4"]; ?>" /> <?php echo $data2["time4"]; ?>
									</td>
									<?php
								}
								if (!empty($data2["time5"])) {
									?>
									<td>
										<input type="radio" name="time" value="<?php echo $data2["time5"]; ?>" /> <?php echo $data2["time5"]; ?>
									</td>
									<?php
								}
								?>
							</tr>
							<?php
						}
						?>

					</table>

					<input type="submit" name="submit3" value="Siguiente" style="margin-top: 10px;margin-bottom:30px;" />

		</center>
		</div>
		</form>

	<?php } ?>
	<div id="footerContainer"></div>
    <script src="JS/menu.js"></script>
    <script src="JS/footer.js"></script>
</body>

</html>

<?php
$_SESSION['theatre_n'] = null;
$_SESSION['timer'] = null;
$thea = null;
$tim = null;
if (isset($_POST['submit3'])) {
	if (!isset($_SESSION['name'])) {
		?>
		<script>
			alert("Por favor, inicie sesión")
			window.open('index.php', '_self');
		</script>
		<?php
	} elseif (isset($_POST['theatre']) && isset($_POST['time'])) {
		include('dbcon.php');
		$thea = $_POST['theatre'];
		$tim = $_POST['time'];
		$_SESSION['theatre_n'] = $thea;
		$_SESSION['timer'] = $tim;
		?>
		<script>
			window.open('ticket.php', '_self');
		</script>
		<?php

	} else {
		?>
		<script>
			alert("Por favor, seleccione un cine y un horario");
		</script>
		<?php
	}



}


?>