<?php
// 1. Configuras los datos de esta página específica
$titulo_seccion = "Contáctanos";
$imagen_banner  = "asociacion/fondo-titulo.png";

?>

<?php include("includes/header.php"); ?>

<body>
    <?php include("includes/titulo.php"); ?>


    <!-- SECCIÓN DE CONTACTO PRINCIPAL -->
    <section class="contact-section">
        <!-- Mapa y Redes -->
        <div class="info-container">
            <!-- Tarjetas de información rápida -->
            <div class="contact-cards">
                <div class="card">
                    <h3> <i class="fa-solid fa-square-phone"></i> +54 3764 22-4017</h3>
                    <p>Llámanos para cualquier consulta o soporte.</p>
                </div>
                <div class="card">
                    <h3><i class="fa-solid fa-square-envelope"></i> acivilcaminandoconlavida@gmail.com</h3>
                    <p>Escríbenos en cualquier momento.</p>
                </div>
                <div class="card">
                    <h3><i class="fa-solid fa-location-dot"></i> Av. Pueyrredon 3727</h3>
                    <h3>Posadas Misiones, Argentina</h3>
                    <p>Visita nuestra ubicación principal.</p>
                </div>

                <div class="card">
                    <h3><i class="fa-solid fa-bus"></i> Líneas de transporte público (colectivo)</h3>
                    <p>Línea 80 y 81 (Desde terminal Quaranta)</p>
                </div>
            </div>


            <div class="map-box">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3541.588627444925!2d-55.92397026766878!3d-27.419760535552527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9457bf9acca235c5%3A0x62b3d63222ddbefc!2sCentro%20Familiar%20Vida%20Nueva!5e0!3m2!1ses-419!2sar!4v1788915110007!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
            </div>


        </div>




        <!-- Formulario -->

        <div class="form-container">
            <h3>Completa el formulario para escribirnos por WhatsApp</h3>
            <br>
            <form id="whatsappForm">

                <div class="form-group">
                    <label for="name">Nombre y Apellido</label>
                    <input type="text" id="name" placeholder="Tu nombre" required>
                </div>

                <div class="form-group">
                    <label for="email">Email de contacto</label>
                    <input type="email" id="email" placeholder="tucorreo@email.com" required>
                </div>

                <div class="form-group">
                    <label for="subject">Motivo de consulta</label>
                    <select name="subject" id="subject">
                        <option value="Solicitar Ayuda">Solicitar Ayuda</option>
                        <option value="Voluntariado">Voluntariado</option>
                        <option value="Donaciones">Donaciones</option>
                        <option value="Información">Información</option>
                        <option value="Talleres">Talleres</option>

                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Escribe tu mensaje aquí</label>
                    <textarea id="message" rows="4" placeholder="Hola! me gustaria colaborar..., mi sueño es..., me gustaría saber..." required></textarea>
                </div>

                <button type="submit" class="btn-submit">
                    Enviar mensaje por WhatsApp
                </button>
            </form>
        </div>

    </section>

    <script>
        document.getElementById('whatsappForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // 1. Capturar los valores ingresados
            const nombre = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const asunto = document.getElementById('subject').value.trim() || 'Consulta desde la web';
            const mensaje = document.getElementById('message').value.trim();

            // 2. Número de la asociación (Código de país 54 + 9 + característica local + número sin 0 ni 15)
            // Ejemplo para Misiones (Posadas): 5493764XXXXXX
            const telefono = "3764603358";

            // 3. Estructurar el mensaje con saltos de línea e íconos/formato
            const textoMensaje =
                `*Nuevo mensaje desde la página web*%0A%0A` +
                `*Nombre:* ${encodeURIComponent(nombre)}%0A` +
                `*Email:* ${encodeURIComponent(email)}%0A` +
                `*Motivo:* ${encodeURIComponent(asunto)}%0A%0A` +
                `*Mensaje:*%0A${encodeURIComponent(mensaje)}`;

            // 4. Crear el enlace a la API de WhatsApp
            const whatsappUrl = `https://wa.me/${telefono}?text=${textoMensaje}`;

            // 5. Abrir WhatsApp en una nueva pestaña (o la app en celulares)
            window.open(whatsappUrl, '_blank');
        });
    </script>

    <?php include("includes/footer.php"); ?>
    <script src="js/script.js"></script>
</body>

</html>