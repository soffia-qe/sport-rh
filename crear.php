<?php

include "conexion.php";

if(isset($_POST["crear"])){

    $modelo = $_POST["modelo"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $kilometraje = $_POST["kilometraje"];
    $marca = $_POST["marca"];

    $consulta = "INSERT INTO cars (ID, MODELO, DESCRIPCION, PRECIO, KILOMETRAJE, BRANDID) VALUES (NULL, '$modelo', '$descripcion', '$precio', '$kilometraje', '$marca');";

    if($con->query($consulta)){

        echo "datos creados correctamente";
    
    }else{

        echo "los datos no fueron creados";
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
    <title>Registrar carros</title>
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

    <center>
        <br><br>

        <h1>Ingresar carros</h1>

        <br><br><br>

        <form action="crear.php" method="post" id="registrar">
            
            <label for="modelo"><h2>Modelo</h2></label>
            <input type="text" name="modelo" id="modelo" required>
            <br><br>

            <label for="descripcion"><h2>Descripcion</h2></label>
            <input type="text" name="descripcion" id="descripcion" required>
            <br><br>

            <label for="precio"><h2>Precio</h2></label>
            <input type="text" name="precio" id="precio" required>
            <br><br>

            <label for="kilometraje"><h2>Kilometraje</h2></label>
            <input type="text" name="kilometraje" id="kilometraje" required>
            <br><br>

            <label for="IDmarca"><h2>ID marca</h2></label>
            <input type="number" name="marca" id="marca" required>
            <br><br>

            <input type="submit" value="Registrar carro" name="crear">

        </form>
    </center>
</body>
</html>