<?php
// 1. Configuras los datos de esta página específica
$titulo_seccion = "Sobre nosotros";
$imagen_banner  = "asociacion/fondo-titulo.png";

?>

<?php include("includes/header.php"); ?>


<body>

    <?php include("includes/titulo.php"); ?>

    <section class="seccion-nosotros">
        <!-- SOBRE NOSOTROS -->
        <div class="contenedor-nosotros">
            <div class="contenido-nosotros">
                <span class="subtitulo">Quienes somos</span>
                <h2 class="titulo-nosotros">Asociación Civil
                    <br> Caminando y Misionando
                    <br> con la vida
                </h2>
                <p class="texto-nosotros">
                    Somos una Asociación Civil comprometida con el crecimiento integral de las personas, promoviendo el desarrollo comunitario, la educación y la inclusión social.
                </p>
            </div>
            <div class="imagen-nosotros">
                <img src="asociacion/pasantia.jpeg" alt="Foto del equipo de la asociación civil">
            </div>
        </div>


    </section>
    <!-- OBJETIVOS -->
    <div class="contenedor-objetivos">
        <h2 class="titulo-seccion">Nuestros objetivos</h2>

        <div class="grid-objetivos">
            <div class="card-objetivo">
                <div class="icono-objetivo"><i class="fa-solid fa-seedling"></i></div>
                <h3>Crecimiento Integral</h3>
                <p>Acompañamos el desarrollo social, emocional y profesional de cada individuo.</p>
            </div>

            <div class="card-objetivo">
                <div class="icono-objetivo"><i class="fa-solid fa-hand-holding-heart"></i></div>
                <h3>Inclusión Social</h3>
                <p>Creamos oportunidades equitativas para reducir brechas en nuestra comunidad.</p>
            </div>

            <div class="card-objetivo">
                <div class="icono-objetivo"><i class="fa-solid fa-book"></i></div>
                <h3>Educación & Talleres</h3>
                <p>Brindamos herramientas formativas para potenciar las habilidades locales.</p>
            </div>

            <div class="card-objetivo">
                <div class="icono-objetivo"><i class="fa-solid fa-cross"></i></div>
                <h3>Transformación</h3>
                <p>Fomentamos proyectos con un impacto duradero y positivo a largo plazo.</p>
            </div>
        </div>
    </div>

    <h2 class="titulo-seccion">Forma parte del cambio</h2>

    <!-- UNETE / LLAMADO A LA ACCIÓN -->
    <section class="seccion-unete">
        <!-- SVG del borde rasgado colocado en la parte inferior -->
        <div class="shape-divider">
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0 C150,90 350,-40 500,65 C650,170 900,10 1200,40 L1200,120 L0,120 Z" fill="#ffffff"></path>
            </svg>
        </div>

        <!-- CONTENEDOR INTERNO (Aplica el espacio a los lados y centra el contenido) -->
        <div class="contenedor-interno">


            <div class="grid-unete">
                <a href="contacto.php" class="card-unete sembrador">
                    <div class="unete-badge">Donaciones</div>
                    <h3>Ser sembrador</h3>
                    <p>Si quieres realizar aportes económicos o materiales para sostener nuestros proyectos.</p>
                    <span class="btn-link">Sumarme como sembrador &rarr;</span>
                </a>

                <a href="contacto.php" class="card-unete voluntario">
                    <div class="unete-badge">Voluntariado</div>
                    <h3>Ser voluntario</h3>
                    <p>Si quieres aportar tu tiempo, talento y habilidades para transformar realidades.</p>
                    <span class="btn-link">Sumarme como voluntario &rarr;</span>
                </a>
            </div>
        </div>

    </section>
    <?php include("includes/footer.php"); ?>
    <script src="js/script.js"></script>

</body>

</html>