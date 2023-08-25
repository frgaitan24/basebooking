<?php

$enlace = mysqli_connect("localhost", "root", "Karaoke.10", "cinelitas");
//$enlace = mysqli_connect($servidor, $usuario, $clave, $basedatos);

//Verificar conexion
if (!$enlace) {
  echo "error con la conexion". mysqli_connect_error();
}

$query = "insert into formulario_pago (nombre, correo, direccion, ciudad, nombretarjeta, numerotarjeta, mesexpiracion, fechaexpiracion, cvv) values 
('$_POST[nombre]', '$_POST[correo]', '$_POST[direccion]', '$_POST[ciudad]', '$_POST[nombretarjeta]', '$_POST[numerotarjeta]', '$_POST[mesexpiracion]', '$_POST[fechaexpiracion]', '$_POST[cvv]')";


  $ejecutarInsertarDatos = mysqli_query($enlace, $query);

  if (!$ejecutarInsertarDatos) {
    echo "error insertando datos". mysqli_error($enlace);
  }
  else {
    echo "datos insertados correctamente";
    header("Location:home.php");
  }
?>