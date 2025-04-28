<?php

    include "conexion.php";

    if(isset($_GET["actualizar"])){

        $modelo = $_GET["modelo"];
        $descripcion = $_GET["descripcion"];
        $precio = $_GET["precio"];
        $kilometraje = $_GET["kilometraje"];
        $marca = $_GET["marca"];

        $consulta = "UPDATE cars SET MODELO = '$modelo', DESCRIPCION = '$descripcion', PRECIO = '$precio', KILOMETRAJE = '$kilometraje', BRANDID = '$marca' WHERE cars.MODELO = '$modelo';";

        if($con->query($consulta)){
            echo "Datos actualizados correctamente";
        }else{
            echo "Los datos no fueron actualizados"; 
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_b.css">
    <title>Update</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="casa.php">Carros</a>
                <a class="nav-link" href="marcas.php">marcas</a>
                <a class="nav-link active" aria-current="page" href="crear.php">Ingresar carros</a>
            </div>
            </div>
        </div>
    </nav>

    <h1>Actualizar producto</h1>
    <br>
    <form action="actualizar.php" method="get">
    <?php

        include"conexion.php";

        $modelo = $_GET["modelo"];
        $descripcion = $_GET["descripcion"];
        $precio = $_GET["precio"];
        $kilometraje = $_GET["kilometraje"];
        $marca = $_GET["marca"];

        echo '
            <label for="modelo"><h2>Modelo</h2></label>
            <input type="text" name="modelo" id="modelo" '.$modelo.' required>
            <br><br>

            <label for="descripcion"><h2>Descripcion</h2></label>
            <input type="text" name="descripcion" id="descripcion" '.$descripcion.' required>
            <br><br>

            <label for="precio"><h2>Precio</h2></label>
            <input type="text" name="precio" id="precio" '.$precio.' required>
            <br><br>

            <label for="kilometraje"><h2>Kilometraje</h2></label>
            <input type="text" name="kilometraje" id="kilometraje" '.$kilometraje.' required>
            <br><br>

            <label for="IDmarca"><h2>ID marca</h2></label>
            <input type="number" name="marca" id="marca" '.$marca.' required>
            <br><br>

            <input type="submit" value="Actualizar carro" name="actualizar">
        ';
    
    ?>
    </form>
</body>
</html>