<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/Imagenes/Logo del proyecto en grande.png">
    <link rel="stylesheet" href="./Css/Style.css">
    <title>Implementos</title>
</head>

<body>

    <header class="cabeza">
        <div class="logo-titulo">
            <img src="/Imagenes/Logo del proyecto en grande.png" alt="logo">
            <h1>SPORT-RH</h1>
        </div>
        <nav>
            <a href="./indextwo.php" class="btn-regresar">← Regresar</a>
        </nav>
    </header>

    <main>
        <section class="bienvenida">
            <h2>Implementos</h2>
            <p>Explora nuestros implementos deportivos disponibles en la institución. Haz clic en cada tarjeta para ver más información.</p>
        </section>

        <div class="menu-implementos">
            <a href="#Balones">Balones</a>
            <a href="#Aros">Aros</a>
            <a href="#Colchonetas">Colchonetas</a>
            <a href="#Bastones">Bastones</a>
        </div>

        <div id="Balones" class="seccion-implementos">

            <div class="implemento" onclick="voltearImplemento(this)">
                <div class="tarjeta-implemento">
                    <div class="cara frente">
                        <img src="/Imagenes/Balon_Futbol.jpg" alt="Futbol">
                        <div class="info">
                            <h3>Balón de Fútbol</h3>
                            <p>Cantidad: 10</p>
                            <p>Estado: Bueno</p>
                            <p>Disponibilidad: True</p>
                        </div>
                    </div>
                    <div class="cara trasera">
                        <h3>Balón de Fútbol</h3>
                        <p>Es un implemento deportivo usado para entrenamientos y partidos. Sirve para mejorar el control, pase y precisión.</p>
                    </div>
                </div>
            </div>

            <div class="implemento" onclick="voltearImplemento(this)">
                <div class="tarjeta-implemento">
                    <div class="cara frente">
                        <img src="/Imagenes/basquetbol.jpg" alt="Basquetbol">
                        <div class="info">
                            <h3>Balón de Basquetbol</h3>
                            <p>Cantidad: 8</p>
                            <p>Estado: Bueno</p>
                            <p>Disponibilidad: True</p>
                        </div>
                    </div>
                    <div class="cara trasera">
                        <h3>Balón de Basquetbol</h3>
                        <p>Se utiliza en juegos y prácticas de baloncesto. Ayuda en coordinación, bote y lanzamientos.</p>
                    </div>
                </div>
            </div>

            <div class="implemento" onclick="voltearImplemento(this)">
                <div class="tarjeta-implemento">
                    <div class="cara frente">
                        <img src="/Imagenes/Balon_Voleibol.jpg" alt="Voleibol">
                        <div class="info">
                            <h3>Balón de Voleibol</h3>
                            <p>Cantidad: 6</p>
                            <p>Estado: Regular</p>
                            <p>Disponibilidad: False</p>
                        </div>
                    </div>
                    <div class="cara trasera">
                        <h3>Balón de Voleibol</h3>
                        <p>Es ideal para practicar voleibol en equipos. Se usa para saques, pases y remates.</p>
                    </div>
                </div>
            </div>

        </div>

        <div id="Aros" class="seccion-implementos">

            <div class="implemento" onclick="voltearImplemento(this)">
                <div class="tarjeta-implemento">
                    <div class="cara frente">
                        <img src="/Imagenes/Aro N.jpg" alt="Aros">
                        <div class="info">
                            <h3>Aros</h3>
                            <p>Cantidad: 12</p>
                            <p>Estado: Bueno</p>
                            <p>Disponibilidad: True</p>
                        </div>
                    </div>
                    <div class="cara trasera">
                        <h3>Aros Negros</h3>
                        <p>Se usan en ejercicios de coordinación, agilidad y motricidad. Son útiles en actividades físicas y recreativas.</p>
                    </div>
                </div>
            </div>

        </div>

        <div id="Colchonetas" class="seccion-implementos">

            <div class="implemento" onclick="voltearImplemento(this)">
                <div class="tarjeta-implemento">
                    <div class="cara frente">
                        <img src="/Imagenes/colchoneta.jpg" alt="Colchoneta">
                        <div class="info">
                            <h3>Colchonetas</h3>
                            <p>Cantidad: 5</p>
                            <p>Estado: Bueno</p>
                            <p>Disponibilidad: False</p>
                        </div>
                    </div>
                    <div class="cara trasera">
                        <h3>Colchonetas</h3>
                        <p>Sirven para ejercicios de suelo, estiramientos y apoyo corporal. Aportan comodidad y seguridad en prácticas deportivas.</p>
                    </div>
                </div>
            </div>

        </div>

        <div id="Bastones" class="seccion-implementos">

            <div class="implemento" onclick="voltearImplemento(this)">
                <div class="tarjeta-implemento">
                    <div class="cara frente">
                        <img src="/Imagenes/bastones.jpg" alt="Bastones">
                        <div class="info">
                            <h3>Bastones</h3>
                            <p>Cantidad: 9</p>
                            <p>Estado: Regular</p>
                            <p>Disponibilidad: True</p>
                        </div>
                    </div>
                    <div class="cara trasera">
                        <h3>Bastones</h3>
                        <p>Se usan en ejercicios de coordinación, movilidad y postura. Son comunes en rutinas físicas y de entrenamiento.</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="perfil-mensaje">
            <a href="./Prestamos.php">Pedir un préstamo</a>
        </div>

    </main>

    <footer>
        <h6>© SPORT RH 2026</h6>
        <h6>Cra. 50B #97a-30, Santa Cruz, Medellín, Antioquia</h6>
    </footer>

    <script>
        function voltearImplemento(elemento) {
            const tarjeta = elemento.querySelector('.tarjeta-implemento');
            tarjeta.classList.toggle('girado');
        }
    </script>

</body>

</html>