<?php

    include "conexion.php";

    if(isset($_GET["actualizar"])){

        $ID = $_GET["id"];

        $consulta = "UPDATE brands SET NOMBRE = '$nombre' WHERE brands.ID = '$ID';";

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
    <form action="actualizarm|.php" method="get">
    <?php

        include"conexion.php";

        $nombre = $_GET["modelo"];

        echo '
            <label for="modelo"><h2>ID</h2></label>
            <input type="number" name="id" id="id" '.$ID.' required>
            <br><br>

            <label for="modelo"><h2>Nombre</h2></label>
            <input type="text" name="nombre" id="nombre" '.$nombre.' required>
            <br><br>

            <input type="submit" value="Actualizar marca" name="actualizar">
        ';
    
    ?>
    </form>
</body>
</html>