<?php

include "conexion.php";

if(isset($_POST["crear"])){

    $nombre = $_POST["nombre"];
    $tipodoc = $_POST["tipodoc"];
    $numerodoc = $_POST["numerodoc"];
    $fechan = $_POST["fechan"];
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    $consulta = "INSERT INTO usuarios (id, nombre, tipodoc, numerodoc, fechan, usuario, contrasena) VALUES (NULL, '$nombre', '$tipodoc', '$numerodoc', '$fechan', '$usuario', '$contrasena');";

    if($con->query($consulta)){

        header("location: indextwo.php");
    
    }else{

        echo "❌ El usuario no pudo ser creado";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>

<nav>
    <a href="index.php">Inicio</a>
    <a href="crear.php">Login</a>
    <a href="registrer.php">Register</a>
    <a href="casa.php">Mi perfil</a>
</nav>

    <center>

        <h1>Registrate</h1>

        <form action="registrer.php" method="post" id="registrar" class="container">

            <div class="form-group">
            <label for="nombre"><h2>Nombre</h2></label>
            <input type="text" name="nombre" id="nombre" required>
            <br><br>
            </div>

            <div class="form-group">
            <label for="tipodoc"><h2>Tipo documento</h2></label>
            <input type="text" name="tipodoc" id="tipodoc" required>
            <br><br>
            </div>

            <div class="form-group">
            <label for="numerodoc"><h2>Numero de documento</h2></label>
            <input type="text" name="numerodoc" id="numerodoc" required>
            <br><br>
            </div>

            <div class="form-group">
            <label for="fechan"><h2>Fecha de nacimiento</h2></label>
            <input type="date" name="fechan" id="fechan" required>
            <br><br>
            </div>
            
            <div class="form-group">
            <label for="usuario"><h2>Usuario</h2></label>
            <input type="text" name="usuario" id="usuario" required>
            <br><br>
            </div>
            
            <div class="form-group">
            <label for="contrasena"><h2>Contraseña</h2></label>
            <input type="password" name="contrasena" id="contrasena" required>
            <br><br>
            </div>

            <input type="submit" value="Registrarme" name="crear">

        </form>
    </center>
</body>
</html>