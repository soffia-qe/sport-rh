<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_b.css">
    <title>House</title>
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

    <h1>Listado de productos</h1>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Modelo</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Kilometraje</th>
            <th>Marca ID</th>
            <th>Tareas</th>
        </tr>
        
        <?php
            include "conexion.php";

            $consulta = "SELECT * FROM cars";
            $resultado = $con->query($consulta);
            while($fila = $resultado->fetch_array()){
                echo"
                <tr>
                    <th>".$fila[0]."</th>
                    <th>".$fila[1]."</th>
                    <th>".$fila[2]."</th>
                    <th>".$fila[3]."</th>
                    <th>".$fila[4]."</th>
                    <th>".$fila[5]."</th>
                    <th>
                        <a href='actualizar.php?ID=".$fila[0]."&modelo=".$fila[1]."&descripcion=".$fila[2]."&precio=".$fila[3]."&kilometraje=".$fila[4]."&brandid".$fila[5]."'>Actualizar</a>
                        <a href='eliminar.php?modelo=".$fila[1]."'>Eliminar</a>
                    </th>
                ";
            };
        ?>
</table>
</body>
</html>