<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="/Imagenes/Logo del proyecto en grande.png">
    <link rel="stylesheet" href="./Css/Style.css">
    <title>Partidos</title>
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
            <h2>Partidos 2026</h2>
            <p>Calendario de partidos programados para este año. Mantente al día con todos los encuentros deportivos.
            </p>
        </section>

        <div class="leyenda">
            <div class="leyenda-item">
                <div class="leyenda-dot"></div>
                Partido programado
            </div>
        </div>

        <div id="carouselMeses" class="carousel slide" data-bs-ride="false">

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselMeses" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselMeses" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

            <div class="carousel-inner" id="carouselContainer">
            </div>

        </div>
    </main>

    <footer>
        <h6>© SPORT RH 2026</h6>
        <h6>Cra. 50B #97a-30, Santa Cruz, Medellín, Antioquia</h6>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const year = 2026;
        const meses = [
            "Enero", "Febrero", "Marzo", "Abril",
            "Mayo", "Junio", "Julio", "Agosto",
            "Septiembre", "Octubre", "Noviembre", "Diciembre"
        ];
        const diasSemana = ["Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"];
        const carousel = document.getElementById("carouselContainer");

        for (let mes = 0; mes < 12; mes++) {
            let primerDia = new Date(year, mes, 1);
            let inicio = primerDia.getDay();
            inicio = inicio === 0 ? 6 : inicio - 1;
            let diasMes = new Date(year, mes + 1, 0).getDate();

            let html = `
                <div class="carousel-item ${mes === 0 ? "active" : ""}">
                    <div class="mes-bloque">
                        <div class="mes-titulo">${meses[mes]} ${year}</div>
                        <table class="cal-table">
                            <thead>
                                <tr>
                                    ${diasSemana.map(d => `<th>${d}</th>`).join("")}
                                </tr>
                            </thead>
                            <tbody>
                    `;

            let dia = 1;
            while (dia <= diasMes) {
                html += "<tr>";
                for (let i = 0; i < 7; i++) {
                    if ((dia === 1 && i < inicio) || dia > diasMes) {
                        html += "<td></td>";
                    } else {
                        let tienePartido = false;
                        if ((mes === 0 && (dia === 10 || dia === 20)) ||
                            (mes === 1 && (dia === 5 || dia === 15 || dia === 25)) ||
                            (mes === 2 && (dia === 8 || dia === 18)) ||
                            (mes === 3 && (dia === 12 || dia === 22)) ||
                            (mes === 4 && (dia === 3 || dia === 17 || dia === 27)) ||
                            (mes === 5 && (dia === 7 || dia === 21)) ||
                            (mes === 6 && (dia === 14 || dia === 28)) ||
                            (mes === 7 && (dia === 4 || dia === 18)) ||
                            (mes === 8 && (dia === 9 || dia === 23)) ||
                            (mes === 9 && (dia === 6 || dia === 16 || dia === 26)) ||
                            (mes === 10 && (dia === 11 || dia === 25)) ||
                            (mes === 11 && (dia === 2 || dia === 12 || dia === 22))) {
                            tienePartido = true;
                        }

                        html += `
                            <td>
                                <div class="day-num cur">${dia}</div>
                                ${tienePartido ? `<div class="partido-chip">⚽ Partido</div>` : ""}
                                ${tienePartido ? `<span class="chip-deporte">Fútbol</span>` : ""}
                            </td>
                        `;
                        dia++;
                    }
                }
                html += "</tr>";
            }

            html += `
                            </tbody>
                        </table>
                    </div>
                </div>
            `;
            carousel.innerHTML += html;
        }
    </script>

</body>

</html>