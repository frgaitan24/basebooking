<?php
/*//Base datos
$servidor = "localhost";
$usuario = "root";
$clave = "";
$basedatos = "cine";
*/
$enlace = mysqli_connect("localhost", "root", "", "cinelitas");
//$enlace = mysqli_connect($servidor, $usuario, $clave, $basedatos);

//Verificar conexion
if (!$enlace) {
  echo "error con la conexion". mysqli_connect_error();
}

$query = "insert into formulario_pago (nombre, correo, direccion, ciudad, nombretarjeta, numerotarjeta, mesexpiracion, fechaexpiracion, cvv) values 
('$_POST[nombre]', '$_POST[correo]', '$_POST[direccion]', '$_POST[ciudad]', '$_POST[nombretarjeta]', '$_POST[numerotarjeta]', '$_POST[mesexpiracion]', '$_POST[fechaexpiracion]', '$_POST[cvv]')";
/*//Recuperacion de variables
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $direccion = $_POST['direccion'];
  $ciudad = $_POST['ciudad'];
  $nombretarjeta = $_POST['nombretarjeta'];
  $numerotarjeta = $_POST['numerotarjeta'];
  $mesexpiracion = $_POST['mesexpiracion'];
  $fechaexpiracion = $_POST['fechaexpiracion'];
  $cvv = $_POST['cvv'];

  //ingresando valores a la BD
  $sqlInsertarDatos = "INSERT INTO  formulario_pago (nombre, correo, direccion, ciudad, nombretarjeta, numerotarjeta, mesexpiracion, fechaexpiracion,
  ) values ('$nombre',
            '$correo',
            '$direccion',
            '$ciudad', 
            '$nombretarjeta',
            '$numerotarjeta',
            '$mesexpiracion',
            '$fechaexpiracion',
            '$cvv')";*/

  $ejecutarInsertarDatos = mysqli_query($enlace, $query);

  if (!$ejecutarInsertarDatos) {
    echo "error insertando datos". mysqli_error($enlace);
  }
  else {
    echo "datos insertados correctamente";
    header("Location: ../HTML/menu.html");
  }
?>