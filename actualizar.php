<?php
include "conexion.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $resultado = $con->query($sql);
    $fila = $resultado->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Perfiles</title>
</head>
<body>

    <nav>
        <a href="index.php">Inicio</a>
        <a href="crear.php">Login</a>
        <a href="registrer.php">Register</a>
        <a href="casa.php">Mi perfil</a>
    </nav>

    <form action="actualizar.php" method="post" class="container">
        <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

        <div class="form-group">
            <label>Nombre:</label>
            <input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>" required>
            <br><br>
        </div>

        <div class="form-group">
            <label>Tipo de documento:</label>
            <input type="text" name="tipodoc" value="<?php echo $fila['tipodoc']; ?>" required>
            <br><br>
        </div>

        <div class="form-group">
            <label>Número de documento:</label>
            <input type="text" name="numerodoc" value="<?php echo $fila['numerodoc']; ?>" required>
            <br><br>
        </div>

        <div class="form-group">
            <label>Fecha de nacimiento:</label>
            <input type="date" name="fechan" value="<?php echo $fila['fechan']; ?>" required>
            <br><br>
        </div>

        <div class="form-group">
            <label>Usuario:</label>
            <input type="text" name="usuario" value="<?php echo $fila['usuario']; ?>" required>
            <br><br>
        </div>

        <div class="form-group">
            <label>Contraseña:</label>
            <input type="password" name="contrasena" value="<?php echo $fila['contrasena']; ?>" required><br><br>
        </div>

        <input type="submit" name="actualizar" value="Actualizar">
    </form>

</body>
</html>

<?php

if (isset($_POST['actualizar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $tipodoc = $_POST['tipodoc'];
    $numerodoc = $_POST['numerodoc'];
    $fechan = $_POST['fechan'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $consulta = "UPDATE usuarios SET 
        nombre = '$nombre',
        tipodoc = '$tipodoc',
        numerodoc = '$numerodoc',
        fechan = '$fechan',
        usuario = '$usuario',
        contrasena = '$contrasena'
        WHERE id = '$id'";

    if ($con->query($consulta)) {
        header("location: indextwo.php");
    } else {
        echo "❌ Error al actualizar: " . $con->error;
    }
}
?>