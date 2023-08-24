<?php
session_start();
include 'dbcon.php';
date_default_timezone_set('America/Costa_Rica');

if (isset($_SESSION['seatings']) && isset($_SESSION['theatre_n']) && isset($_SESSION['timer'])) {
	$theatre1 = $_SESSION['theatre_n'];
	$time1 = $_SESSION['timer'];
	$name = $_SESSION['name'];
	$date1 = date("d-m-Y");
	$mname = $_SESSION['movie_n'];
	$seat = implode(" ", $_SESSION['seatings']);
	$loc = $_SESSION['location'];
	$amt = $_SESSION['amt'];

	$qry_duplicate = "select username,movie,theatre,seats,date,movie_time,location,amount from bookings where 
	username='$name'AND movie='$mname' AND theatre='$theatre1' AND seats='$seat'AND date='$date1'AND movie_time='$time1'AND
	location='$loc' AND amount='$amt'";
	$duplicate_result = mysqli_query($con, $qry_duplicate);
	$duplicate_count = mysqli_num_rows($duplicate_result);
	if ($duplicate_count > 0) {
		echo " ";
	} else {

		$seat_updated = $_SESSION['seats'] - count($_SESSION['seatings']);
		$qry = "UPDATE timings SET seats=$seat_updated WHERE Theatre_Name='$theatre1' AND showtime='$time1'";
		mysqli_query($con, $qry);
		$qry_insert_booking = "INSERT INTO bookings(username,movie,theatre,seats,date,movie_time,location,amount)
	VALUES ('$name','$mname','$theatre1','$seat','$date1','$time1','$loc','$amt')";
		mysqli_query($con, $qry_insert_booking);
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Página de facturación</title>
	<link rel="stylesheet" href="css/swiper.min.css">

	<link rel="stylesheet" type="text/css" href="css/receiptstyle.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/StyleIndex.css">
</head>

<body onload="myFunction()">



	<div class='navbar'></div>
	<div id="menuContainer"></div>

	<div id="loader"></div>

	<div style="display:none;" id="myDiv" class="animate-bottom">
		<br>
		<h2 style="color:#886D2C;">Felicidades, compra realizada con éxito!</h2>
		<br>
		<h2 style="color:#886D2C;">Hemos enviado a su correo los códigos.</h2>

		<img src="images/reservado.png" class='booked'>

		<center class="receipt-holder">


			<table border="1">

				<tr>
					<td>
						<b>Fecha:</b>
					</td>
					<td>
						<?php echo date("d-m-Y"); ?>
					</td>
				</tr>

				<tr>
					<td>
						<b>Horario:</b>
					</td>
					<td>
						<?php echo $_SESSION['timer']; ?>
					</td>
				</tr>

				<tr>
					<td>
						<b>Película:</b>
					</td>
					<td>
						<?php echo $_SESSION['movie_n']; ?>
					</td>
				</tr>
				<tr>
					<td>
						<b>Cine:</b>
					</td>
					<td>
						<?php echo $_SESSION['theatre_n']; ?>
					</td>
				</tr>

				<tr>
					<td>
						<b>Lugar:</b>
					</td>
					<td>
						<?php echo $_SESSION['location']; ?>
					</td>
				</tr>

				<tr>
					<td>
						<b>Asientos:</b>
					</td>
					<td>
						<?php

						foreach ($_SESSION['seatings'] as $selected) {
							echo $selected . " ";
						}
						?>
					</td>

				</tr>

			</table>
			<button class="book" onclick="location.href='booking.php'">Reservar más asientos?</button>
		</center>

	</div>


	<script>
		var myVar;

		function myFunction() {
			myVar = setTimeout(showPage, 4000);
		}

		function showPage() {
			document.getElementById("loader").style.display = "none";
			document.getElementById("myDiv").style.display = "block";
		}
	</script>

</body>
<div id="footerContainer"></div>
<script src="JS/menu.js"></script>
<script src="JS/footer.js"></script>

</html>