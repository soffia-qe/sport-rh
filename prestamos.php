<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/Imagenes/Logo del proyecto en grande.png">
    <link rel="stylesheet" href="./Css/Style.css">
    <title>Préstamos</title>
</head>

<body>

    <header class="cabeza">
        <div class="logo-titulo">
            <img src="/Imagenes/Logo del proyecto en grande.png" alt="logo">
            <h1>SPORT-RH</h1>
        </div>
        <nav>
            <a href="./indextwo.php">INICIO</a>
            <a href="./perfil.php">PERFIL</a>
        </nav>
    </header>

    <main>
        <section class="contenedor-formulario">
            <h2>Solicitud de Préstamos</h2>
            <p class="descripcion">
                Complete el siguiente formulario para solicitar el préstamo de implementos deportivos.
                La solicitud será revisada por el administrador del sistema antes de su aprobación.
            </p>

            <form id="formPrestamo">
                <div class="grupo">
                    <label for="nombre">Nombre completo</label>
                    <input type="text" id="nombre" required placeholder="Ej: Juan Pérez">
                </div>

                <div class="grupo">
                    <label for="idUsuario">ID de Usuario</label>
                    <input type="text" id="idUsuario" required placeholder="Ej: 123456">
                </div>

                <div class="grupo">
                    <label for="cargo">Cargo</label>
                    <select id="cargo" required>
                        <option value="">Seleccione</option>
                        <option value="administrador">Administrador</option>
                        <option value="docente">Docente</option>
                        <option value="estudiante">Estudiante</option>
                    </select>
                </div>

                <div class="grupo">
                    <label for="implemento">Implemento solicitado</label>
                    <select id="implemento" required>
                        <option value="">Seleccione</option>
                        <option value="balon_futbol">Balón de Fútbol</option>
                        <option value="balon_basquetbol">Balón de Baloncesto</option>
                        <option value="balon_voleibol">Balón de Voleibol</option>
                        <option value="aros">Aros</option>
                        <option value="colchonetas">Colchonetas</option>
                        <option value="bastones">Bastones</option>
                    </select>
                </div>

                <div class="grupo">
                    <label for="cantidad">Cantidad solicitada</label>
                    <input type="number" id="cantidad" min="1" required placeholder="1">
                </div>

                <div class="grupo">
                    <label for="fechaPrestamo">Fecha de préstamo</label>
                    <input type="date" id="fechaPrestamo" required>
                </div>

                <div class="grupo">
                    <label for="fechaDevolucion">Fecha de devolución</label>
                    <input type="date" id="fechaDevolucion" required>
                </div>

                <div class="grupo">
                    <label for="motivo">Motivo de la solicitud</label>
                    <textarea id="motivo" rows="4" required placeholder="Describe el motivo de tu solicitud..."></textarea>
                </div>

                <div class="grupo-check">
                    <input type="checkbox" id="compromiso" required>
                    <label for="compromiso">
                        Me comprometo a cuidar y devolver los implementos en las mismas condiciones en las que fueron entregados.
                    </label>
                </div>

                <button type="submit" class="btn-enviar">Enviar Solicitud</button>
            </form>
        </section>
    </main>

    <footer>
        <h6>© SPORT RH 2026</h6>
        <h6>Cra. 50B #97a-30, Santa Cruz, Medellín, Antioquia</h6>
    </footer>

    <script>
        document.getElementById('formPrestamo').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('¡Solicitud enviada correctamente!');
            this.reset();
        });
    </script>

</body>

</html>