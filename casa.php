<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mi perfil</title>
</head>
<body>
    
<nav>
    <a href="index.php">Inicio</a>
    <a href="crear.php">Login</a>
    <a href="registrer.php">Register</a>
    <a href="casa.php">Mi perfil</a>
</nav>

<Center>

    <h1>Usuarios</h1>

    <table class="table-container">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo de documento</th>
            <th>Nuero de documento</th>
            <th>Fecha de nacimiento</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>Tareas</th>
        </tr>
        
        <?php
            include "conexion.php";

            $consulta = "SELECT * FROM usuarios";
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
                    <th>".$fila[6]."</th>
                    <th>
                        <a href='actualizar.php?id=".$fila[0]."&nombre=".$fila[1]."&tipodoc=".$fila[2]."&numerodoc=".$fila[3]."&fechan=".$fila[4]."&usuario=".$fila[5]."&contrasena=".$fila[6]."'>Actualizar</a>
                        <a href='eliminar.php?id=".$fila[0]."'>Eliminar</a>
                    </th>
                ";
            };
        ?>
    </table>
</Center>
</body>
</html>