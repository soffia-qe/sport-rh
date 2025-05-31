<?php

include "conexion.php";

session_start();

if (isset($_POST["login"])) {
    // Recibir datos
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Consultar usuario
    $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
    $resultado = $con->query($consulta);

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();

        // Guardar datos de sesión
        $_SESSION['usuario'] = $fila['usuario'];
        $_SESSION['nombre'] = $fila['nombre'];

        // Redirigir al inicio o panel
        header("location: indextwo.php");
    } else {
        echo "❌ Usuario o contraseña incorrectos.";
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
    <title>Login</title>
</head>
<body>

<nav>
    <a href="index.php">Inicio</a>
    <a href="crear.php">Login</a>
    <a href="registrer.php">Register</a>
    <a href="casa.php">Mi perfil</a>
</nav>

    <center>

        <h1>Iniciar sesión</h1>

        <form action="crear.php" method="post" id="registrar" class="container">

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

            <input type="submit" value="Inisiar sesión" name="login">

        </form>
    </center>
</body>
</html>