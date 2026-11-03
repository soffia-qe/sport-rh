<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="/Imagenes/Logo del proyecto en grande.png">
  <link rel="stylesheet" href="./Css/Style.css">
  <title>Actividades</title>
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
      <h2>Actividades</h2>
      <p>Descubre nuestras actividades deportivas según nuestros implementos deportivos.</p>
    </section>

    <section>
      <div id="carouselEjercicios" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">

        <div class="carousel-indicators">
          <button data-bs-target="#carouselEjercicios" data-bs-slide-to="0" class="active"></button>
          <button data-bs-target="#carouselEjercicios" data-bs-slide-to="1"></button>
          <button data-bs-target="#carouselEjercicios" data-bs-slide-to="2"></button>
          <button data-bs-target="#carouselEjercicios" data-bs-slide-to="3"></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/Imagenes/Balon_Futbol.jpg" class="img-carousel" data-bs-toggle="modal"
              data-bs-target="#modalBalon">
            <div class="carousel-caption">
              <h4>Ejercicios con balón</h4>
              <br>
            </div>
          </div>

          <div class="carousel-item">
            <img src="/Imagenes/aro N.jpg" class="img-carousel" data-bs-toggle="modal" data-bs-target="#modalAro">
            <div class="carousel-caption">
              <h4>Ejercicios con aro</h4>
              <br>
            </div>
          </div>

          <div class="carousel-item">
            <img src="/Imagenes/Bastones.jpg" class="img-carousel" data-bs-toggle="modal"
              data-bs-target="#modalBastones">
            <div class="carousel-caption">
              <h4>Ejercicios con bastones</h4>
              <br>
            </div>
          </div>

          <div class="carousel-item">
            <img src="/Imagenes/Colchoneta.jpg" class="img-carousel" data-bs-toggle="modal"
              data-bs-target="#modalColchonetas">
            <div class="carousel-caption">
              <h4>Ejercicios con colchonetas</h4>
              <br>
            </div>
          </div>
        </div>

        <button class="carousel-control-prev" data-bs-target="#carouselEjercicios" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" data-bs-target="#carouselEjercicios" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </section>
  </main>

  <div class="modal fade" id="modalBalon" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3">
        <div class="modal-header">
          <h4>Ejercicios con balón</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <ul>
          <li>Pases en pareja: Mejora la coordinación y la precisión pasando el balón entre dos personas a diferentes
            distancias.</li>
          <li>Sentadillas con balón: Sostén el balón frente al pecho mientras realizas sentadillas para trabajar piernas
            y core.</li>
          <li>Lanzamiento contra pared: Lanza y recibe el balón rápidamente para desarrollar reflejos y fuerza en
            brazos.</li>
          <li>Abdominales con balón: Sujeta el balón durante los abdominales para aumentar la activación del core.</li>
          <li>Zigzag con balón: Conduce el balón entre conos u obstáculos para mejorar agilidad y control corporal.</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalAro" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3">
        <div class="modal-header">
          <h4>Ejercicios con aro</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <ul>
          <li>Saltos dentro del aro: Mejora la coordinación y la agilidad realizando saltos rápidos dentro y fuera del
            aro.</li>
          <li>Carrera de precisión: Corre pasando por varios aros colocados en el suelo para trabajar velocidad y
            equilibrio.</li>
          <li>Lanzamiento al aro: Practica puntería lanzando pelotas dentro de un aro a diferentes distancias.</li>
          <li>Equilibrio con aro: Mantén el aro en movimiento alrededor de la cintura o brazos para desarrollar
            coordinación motriz.</li>
          <li>Circuito de aros: Combina saltos, desplazamientos y cambios de dirección usando varios aros en secuencia.
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalBastones" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3">
        <div class="modal-header">
          <h4>Ejercicios con bastones</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <ul>
          <li>Saltos sobre bastones: Coloca bastones en el suelo y realiza saltos laterales o frontales para mejorar
            agilidad.</li>
          <li>Carrera en zigzag: Usa bastones como obstáculos para trabajar coordinación y cambios de dirección.</li>
          <li>Equilibrio con bastón: Camina sosteniendo un bastón para desarrollar estabilidad y control corporal.</li>
          <li>Relevos con bastón: Ejercicio en equipo donde se pasa el bastón mientras se realizan recorridos cortos.
          </li>
          <li>Movilidad de hombros: Utiliza el bastón para ejercicios de estiramiento y movilidad articular.</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalColchonetas" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3">
        <div class="modal-header">
          <h4>Ejercicios con colchonetas</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <ul>
          <li>Estiramientos en colchoneta: Realiza estiramientos suaves sobre la colchoneta para mejorar la
            flexibilidad.</li>
          <li>Posiciones de yoga: Utiliza la colchoneta para realizar posiciones de yoga y mejorar la movilidad.</li>
          <li>Ejercicios de recuperación: Colócate sobre la colchoneta para realizar ejercicios de recuperación y
            aliviar el estrés muscular.</li>
          <li>Entrenamiento funcional: Usa la colchoneta para realizar ejercicios funcionales que mejoren la estabilidad
            y el control corporal.</li>
          <li>Trabajo del core: Realiza ejercicios en la colchoneta para trabajar el core y mejorar la postura.</li>
        </ul>
      </div>
    </div>
  </div>

  <footer>
    <h6>© SPORT RH 2026</h6>
    <h6>Cra. 50B #97a-30, Santa Cruz, Medellín, Antioquia</h6>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>