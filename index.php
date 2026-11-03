<?php

session_start();
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cargo = $_POST["nom"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["con"];

    // Buscar el usuario en la base de datos
    $consulta = "SELECT * FROM usuario WHERE correo = ? AND cargo = ?";

    $stmt = $conexion->prepare($consulta);
    $stmt->bind_param("ss", $correo, $cargo);
    $stmt->execute();

    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {

        $fila = $resultado->fetch_assoc();

        // Comprobar contraseña
        if ($contrasena === $fila["contrasena"]) {

            $_SESSION["usuario"] = $fila["correo"];
            $_SESSION["nombre"] = $fila["nombre"];
            $_SESSION["cargo"] = $fila["cargo"];

            header("Location: indextwo.php");
            exit();

        } else {
            echo "Contraseña incorrecta.";
        }

    } else {
        echo "No se encontró un usuario con ese correo y cargo.";
    }

    $stmt->close();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/Imagenes/Logo del proyecto en circulo.png">
    <link rel="stylesheet" href="./Css/Style.css">
    <title>Iniciar-Sesión</title>
</head>

<body>

    <header class="cabeza">
        <div class="logo-titulo">
            <img src="/Imagenes/Logo del proyecto en grande.png" alt="logo">
            <h1>SPORT-RH</h1>
        </div>
        <nav>
            <a href="/paginas/Contactanos.html">CONTACTANOS</a>
            <a href="/paginas/Acercadenosotros.html">ACERCA DE NOSOTROS</a>
        </nav>
    </header>

    <main>
        <section class="bienvenida">
            <h2>INICIAR SESIÓN</h2>
            <p>Ingresa tus credenciales para acceder al sistema de gestión de SportsRH.</p>
        </section>

        <section>
            <form id="IniciarSesion" class="formulario-container" method="POST" action="">
                <fieldset>
                    <div class="campo">
                        <label for="nom">Cargo:</label>
                        <select name="nom" id="nom">
                            <option value="">Seleccione una opción</option>
                            <option value="estudiante">Estudiante</option>
                            <option value="profesor">Profesor</option>
                            <option value="admin">Administrador</option>
                        </select>
                    </div>
                    <div class="campo">
                        <label for="correo">Correo IE:</label>
                        <input type="email" placeholder="Email..." name="correo" id="correo">
                    </div>
                    <div class="campo">
                        <label for="con">Contraseña:</label>
                        <input type="password" placeholder="Contraseña..." name="con" id="con">
                    </div>

                    <div class="botones">
                        <button type="submit" class="btn btn-ingresar">Iniciar Sesión</button>
                        <button type="button" class="btn btn-olvido"
                            onclick="window.location.href='/IniciarSesion/OlvidoContraseña.html'">
                            Olvidó su Contraseña
                        </button>
                    </div>
                </fieldset>
            </form>
        </section>
    </main>

    <footer>
        <h6>© SPORT RH 2026</h6>
        <h6>Cra. 50B #97a-30, Santa Cruz, Medellín, Antioquia</h6>
    </footer>

    <script src="/js/IniciarSesion.js"></script>
</body>

</html>