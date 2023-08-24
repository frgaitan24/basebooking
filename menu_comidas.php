<?php
session_start();
$_SESSION['theatre_n'] = null;
$_SESSION['timer'] = null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Menú de Snacks</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/comidas.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
     <header id="header">
        <h1>Menú de Snacks Cinelitas</h1>
        <h3>Página aun en construcción</h3>
        <center><a href="home.php">Si deseas volver al menú principal has click aquí</a></center>
    </header>  

    <main>
        <div class="contenedor">
            <div class="añadir">
                <h2>Añadir</h2>
                <form id="insertForm" class="insertForm">
                    <input type="hidden" name="insert">

                    <label>Nombre del combo</label>
                    <input type="text" name="nombre" id="nombre" name="nombreDelCombo">

                    <label>Descripción</label>
                    <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
                    
                    <label>Costo</label>
                    <input type="number" name="precio" id="precio">

                    <button  class="btn-añadir" type="submit">Añadir</button>
                    <!--<input class="button" type="button" id="botonAñadir" value="Añadir">-->
                </form>
            </div>
            
            <div class="editar">
                <h2>Editar</h2>
                <form>
                    <label>Nombre del producto</label>
                    <select id="productoEditar">
                        <option value="">---</option>


                    </select>

                    <label>Nuevo valor</label>
                    <input type="text" id="nuevoAtributo">

                    <button class="button" type="submit">Update</button>

                    <!--<input class="button" type="button" id="botonEditar" value="Editar">-->
                </form>
            </div>

            <div class="eliminar">
                <h2>Eliminar</h2>
                <form>
                    <label>Nombre del producto</label>
                    <select id="productoEliminar">
                        <option value="">---</option>
                    </select>

                    <button class="button" type="submit">Update</button>
                    <!--<input class="button" type="button" id="botonEliminar" value="Eliminar">-->
                </form>
            </div>
        </div>

        <div class="contenedorMensaje">
            <div id="mensaje"></div>
        </div>

        <h2>Lista de productos disponibles</h2>
            
        <table class="zebra-table">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Costo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ejemplo</td>
                    <td>Ejemplo</td>
                    <td>Ejemplo</td>
                    <td>Ejemplo</td>
                </tr>
            </tbody>
        </table>

<!-- Scripts -->
<script src="JS/menu_comidas.js"></script>


    </main>

 
</body>
</html>