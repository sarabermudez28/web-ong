<?php include("includes/header.php"); ?>

<body>

    <div class="hero">

        <img src="asociacion/logo.jpeg" alt="Logo ONG" class="hero-logo">

        <div class="texto-hero">
            <h1>Asociación Civil <br>
                Caminando y Misionando <br>
                con la Vida</h1>
            <p>Construyendo oportunidades para todos.</p>
            <a href="#introduccion" class="btn-nosotros">Nosotros</a>
        </div>

    </div>

    <div class="redes">
        <p>Construyendo oportunidades para todos. </p>
        <div class="redes-iconos">
            <!-- Instagram -->
            <a href="https://www.instagram.com/asocivcaminandoconlavida" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                <i class="fa-brands fa-instagram"></i>
            </a>

            <!-- WhatsApp con mensaje predeterminado -->
            <a href="https://wa.me/5493764224017?text=Hola,%20quisiera%20recibir%20más%20información%20sobre%20la%20asociación%20Caminando%20y%20Misionando%20con%20la%20Vida." target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
                <i class="fa-brands fa-whatsapp"></i>
            </a>

            <!-- Tu código actual -->
            <a href="mailto:acivilcaminandoconlavida@gmail.com">
                <i class="fa-regular fa-envelope"></i>
            </a>

        </div>
    </div>



    <section id="introduccion" class="introduccion">

        <div class="foto">
            <img src="asociacion/nosotros.jpg" alt="Nosotros">
        </div>

        <div class="contenido-introduccion">

            <h1>¿Quiénes somos?</h1>

            <p>
                Somos una asociación sin fines de lucro que se dedica a promover <br>
                la salud integral y a ayudar a las personas
                que estan en situaciones de vulnerabilidad.
            </p>

        </div>

    </section>

    <section id="testimonios" class="testimonios">

        <button class="btn-testimonio anterior">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="contenedor-testimonios">

            <div class="testimonio activo">

                <h2>
                    "Es más que solo dar el almuerzo, es un puente para conocer a las personas."
                </h2>

                <p>
                    <strong>Sonia Fioravanti</strong><br>
                    Licenciada en Psicología Social<br>
                    Presidenta de la Asociación Caminando con la Vida.
                </p>

            </div>

            <div class="testimonio">

                <h2>
                    "Cada acción solidaria transforma una vida y fortalece a toda la comunidad."
                </h2>

                <p>
                    <strong>Nombre Apellido</strong><br>
                    Voluntario de la asociación.
                </p>

            </div>

        </div>

        <button class="btn-testimonio siguiente">
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </section>



    <section id="actividades" class="actividades">
        <!-- Dibujos decorativos flotantes en las esquinas -->
        <img src="asociacion/actividad-1.jpg" class="decoracion deco-top-left" alt="">
        <img src="asociacion/actividad-2.jpg" class="decoracion deco-top-right" alt="">



        <div class="titulo-seccion">
            <h2>Nuestras actividades</h2>
            <p>Conocé algunas de las acciones que realizamos para acompañar a la comunidad.</p>
        </div>

        <div class="contenedor-actividad">

            <div class="actividad">
                <div class="icono">
                    <i class="fa-solid fa-book-open"></i>
                </div>
                <h3>Apoyo Escolar</h3>
                <p>Acompañamos a niños y jóvenes en su proceso de aprendizaje.</p>
            </div>

            <div class="actividad">
                <div class="icono">
                    <i class="fa-solid fa-hand-holding-heart"></i>
                </div>
                <h3>Asistencia Social</h3>
                <p>Brindamos ayuda a familias en situación de vulnerabilidad.</p>
            </div>

            <div class="actividad">
                <div class="icono">
                    <i class="fa-solid fa-utensils"></i>
                </div>
                <h3>Comedor</h3>
                <p>Ofrecemos alimentos a quienes más lo necesitan.</p>
            </div>

            <div class="actividad">
                <div class="icono">
                    <i class="fa-solid fa-briefcase"></i>
                </div>
                <h3>Pasantía</h3>
                <p>Promovemos el cuidado del ambiente y la producción sustentable.</p>
            </div>

        </div>

        <img src="asociacion/actividad-3.jpg" class="decoracion deco-bottom-left" alt="">
        <img src="asociacion/actividad-4.jpg" class="decoracion deco-bottom-center" alt="">
        <img src="asociacion/actividad-5.jpg" class="decoracion deco-bottom-right" alt="">

    </section>

    <section id="encuentro-con-jesus" class="encuentro-con-jesus">
        <div class="contenido-texto">
            <h1>Encuentro con Jesús</h1>
            <p>Caminando con la VIDA hace referencia a un camino con Cristo.
                Guíamos a las personas a conocer a Dios mediante el acompañamiento de nuestros pastores y la comunidad de la iglesia.</p>
            <blockquote class="versiculo">
                "Nosotros le amamos a él, porque él nos amó primero."
                <cite>1 Juan 4:19 RVR1960</cite>
            </blockquote>
        </div>

        <div class="contenedor-imagen">
            <img src="asociacion/jesus.jpg" alt="Encuentro con Jesús">
        </div>
    </section>


    <section id="impacto" class="impacto">
        <h2>Nuestro impacto en la comunidad</h2>
        <p>Cada acción nos acerca a construir una sociedad más solidaria.</p>
        <div class="contenedor-cards-impacto">

            <div class="card-impacto">
                <h1>+<span class="contador" data-target="80">0</span></h1>
                <p>Familias acompañadas</p>
            </div>

            <div class="card-impacto">
                <h1>+<span class="contador" data-target="100">0</span></h1>
                <p>Niños asisten al merendero</p>
            </div>

            <div class="card-impacto">
                <h1>+<span class="contador" data-target="60">0</span></h1>
                <p>Niños volvieron al colegio</p>
            </div>


            <div class="card-impacto">
                <h1>+<span class="contador" data-target="40">0</span></h1>
                <p>Actividades solidarias realizadas</p>
            </div>

        </div>
        <a href="impacto.php">Ver más</a>
    </section>


    <section id="donar" class="donar">

        <div>

            <h1>Quiero ser parte</h1>

            <p>
                Todos podemos aportar nuestro granito de arena.
                Con tu colaboración ayudamos a más familias y seguimos construyendo esperanza.
            </p>

            <a href="contacto.php" class="btn-donar">
                Quiero colaborar
            </a>

        </div>

        <img src="asociacion/donar.png" alt="Ilustración de voluntariado">

    </section>

    <section id="sponsors" class="sponsors">
        <div class="titulo-sponsors">
            <h2>Nuestros Patrocinadores</h2>
            <p>
                Gracias a las empresas y organizaciones que confían en nuestra misión y hacen posible
                cada proyecto solidario.
            </p>
        </div>

        <div class="sponsors-grid">
            <img src="img/sponsor/logo-panaderia.jpg" alt="Panadería">
            <img src="img/sponsor/logo-proyecto-vida.jpeg" alt="Sponsor 1">
            <!-- Agrega los demás logos aquí directamente sin duplicar nada -->
        </div>
    </section>


    <?php include("includes/footer.php"); ?>
    <script src="js/script.js"></script>

</body>

</html>