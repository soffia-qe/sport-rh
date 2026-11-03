<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/Imagenes/Logo del proyecto en grande.png">
    <link rel="stylesheet" href="./Css/Style.css">
    <title>Perfil</title>
</head>

<body>

    <header class="cabeza">
        <div class="logo-titulo">
            <img src="/Imagenes/Logo del proyecto en grande.png" alt="logo">
            <h1>SPORT-RH</h1>
        </div>
        <nav>
            <a href="./indextwo.php">CONTÁCTANOS</a>
            <a href="./indextwo.php">ACERCA DE NOSOTROS</a>
            <a href="./indextwo.php">INICIO</a>
        </nav>
    </header>

    <main>
        <section class="perfil">

            <div class="perfil-header">
                <div>
                    <h2 id="nombrePerfil">Estudiante</h2>
                    <span class="rol">Estudiante</span>
                </div>
                <div class="botones-header">
                    <button onclick="alert('Función de edición de perfil')">Editar perfil</button>
                    <button class="cerrar-btn" onclick="window.location.href='/Index.html'">Cerrar sesión</button>
                </div>
            </div>

            <div class="perfil-info resumen">
                <h3>Resumen de Cuenta</h3>
                <div class="resumen-items">
                    <div class="item-resumen">
                        <span>Inventario</span>
                        <strong>Activo</strong>
                    </div>
                    <div class="item-resumen">
                        <span>Permisos</span>
                        <strong>Estudiante</strong>
                    </div>
                    <div class="item-resumen">
                        <span>Estado</span>
                        <strong class="activo">Activo</strong>
                    </div>
                </div>
            </div>

            <div class="perfil-info">
                <h3>Información Personal</h3>
                <p><strong>Correo:</strong> estudiante.SportsRH@gmail.com</p>
                <p><strong>Teléfono:</strong> 3000000</p>
                <p><strong>ID Usuario:</strong> 12345</p>
            </div>

            <div class="perfil-info">
                <h3>Seguridad</h3>
                <p><strong>Usuario:</strong> estudiante</p>
                <p><strong>Contraseña:</strong> ********</p>
                <div class="botones-seguridad">
                    <button class="btn-sec" onclick="alert('Función de cambio de contraseña')">Cambiar contraseña</button>
                    <button class="btn-ver" onclick="alert('Contraseña: ********')">Ver contraseña</button>
                </div>
            </div>

            <div class="perfil-info">
                <h3>Permisos (Estudiante)</h3>
                <ul>
                    <li class="ok">✅ Ver inventario</li>
                    <li class="no">❌ Registrar inventario</li>
                    <li class="no">❌ Eliminar inventario</li>
                    <li class="no">❌ Gestionar implementos</li>
                    <li class="ok">✅ Ver Partidos</li>
                </ul>
            </div>

            <div class="perfil-mensaje">
                <a href="/Mensaje/Mensaje-U.html">Mensaje al equipo de soporte</a>
            </div>

        </section>
    </main>

    <footer>
        <h6>© SPORT RH 2026</h6>
        <h6>Cra. 50B #97a-30, Santa Cruz, Medellín, Antioquia</h6>
    </footer>

</body>

</html>