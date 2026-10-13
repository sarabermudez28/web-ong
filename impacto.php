<?php
// Configuración de la página
$titulo_seccion    = "Nuestro Impacto Social";
$subtitulo_seccion = "Transparencia y resultados reales en el acompañamiento a nuestra comunidad";
$imagen_banner     = "asociacion/fondo-titulo.png";

// Métricas principales (Tarjetas de contadores)
$metricas_principales = [
    ["meta" => 80,  "simbolo" => "+", "etiqueta" => "Familias acompañadas"],
    ["meta" => 100, "simbolo" => "+", "etiqueta" => "Niños en el merendero"],
    ["meta" => 60,  "simbolo" => "+", "etiqueta" => "Niños revinculados a la escuela"],
    ["meta" => 40,  "simbolo" => "+", "etiqueta" => "Jornadas y talleres realizados"],
];
?>

<?php include("includes/header.php"); ?>

<body>
  <?php include("includes/titulo.php"); ?>

  <main class="impacto-container">

    <!-- Introducción Institucional -->
    <section class="impacto-intro">
      <span class="badge-tag">Compromiso Social</span>
      <h2>Acompañamiento integral para la comunidad</h2>
      <p>
        Trabajamos día a día en el territorio para brindar contención, alimentación y herramientas educativas 
        que permitan transformar la realidad de los niños y familias de nuestro barrio.
      </p>
    </section>

    <!-- 1. Tarjetas de Estadísticas Principales -->
    <section class="contenedor-c-impacto" aria-label="Métricas principales">
      <?php foreach ($metricas_principales as $m): ?>
        <article class="c-impacto">
          <h1>
            <?= $m['simbolo']; ?><span class="contador" data-target="<?= $m['meta']; ?>">0</span>
          </h1>
          <p><?= htmlspecialchars($m['etiqueta']); ?></p>
        </article>
      <?php endforeach; ?>
    </section>

    <!-- 2. Ejes de Acción Social (Círculos Zig-Zag) -->
    <section class="pillars-section">
      <h2>Ejes de Acción Institucional</h2>
      <p>Nuestras prioridades para garantizar el desarrollo comunitario y la contención social.</p>

      <div class="pillars-grid">
        <!-- 1. Izquierda: Contención Alimentaria -->
        <article class="pillar-card pillar-card-r">
          <div class="pillar-icon">🍲</div>
          <h3>Asistencia Alimentaria</h3>
          <p>Garantizamos viandas y meriendas nutritivas semanales.</p>
        </article>

        <!-- 2. Centro (Abajo por Zig-Zag): Educación -->
        <article class="pillar-card pillar-card-y">
          <div class="pillar-icon">📚</div>
          <h3>Apoyo Escolar</h3>
          <p>Tutorías y reinserción al sistema educativo formal.</p>
        </article>

              <!-- 3. Centro (Abajo por Zig-Zag): Educación -->
        <article class="pillar-card pillar-card-o">
          <div class="pillar-icon">📚</div>
          <h3>Contención espiritual</h3>
          <p>Consejería e integración en la comunidad de fe.</p>
        </article>

        <!-- 4. Derecha: Desarrollo Familiar -->
        <article class="pillar-card pillar-card-g">
          <div class="pillar-icon">🏡</div>
          <h3>Acompañamiento Familiar</h3>
          <p>Asesoramiento, talleres e integración comunitaria.</p>
        </article>
      </div>
    </section>

    <!-- 3. Indicadores de Efectividad Institucional -->
    <section class="metas-section">
      <h2>Efectividad de Nuestros Programas</h2>
      <div class="contenedor-barras">

        <div class="barra-item">
          <div class="barra-info">
            <span>Permanencia y Asistencia Escolar</span>
            <span>85% de asistencia regular</span>
          </div>
          <div class="barra-fondo">
            <div class="barra-progreso" style="width: 85%;"></div>
          </div>
        </div>

        <div class="barra-item">
          <div class="barra-info">
            <span>Cobertura Nutricional Diaria</span>
            <span>100% de raciones entregadas</span>
          </div>
          <div class="barra-fondo">
            <div class="barra-progreso" style="width: 100%;"></div>
          </div>
        </div>

        <div class="barra-item">
          <div class="barra-info">
            <span>Talleres de Oficios y Capacitación</span>
            <span>70% de asistencia de adultos</span>
          </div>
          <div class="barra-fondo">
            <div class="barra-progreso" style="width: 70%;"></div>
          </div>
        </div>

      </div>
    </section>

    <!-- 4. Llamado a la Acción (CTA) -->
    <section class="cta-banner">
      <div class="cta-content">
        <h2>¿Quieres colaborar con nuestra Asociación Civil?</h2>
        <p>Tu donación o tiempo como voluntario ayuda a sostener estas iniciativas comunitarias.</p>
        <a href="contacto.php" class="btn-impacto">Sumarme como Voluntario / Donar</a>
      </div>
    </section>

  </main>

  <?php include("includes/footer.php"); ?>
  <script src="js/script.js" defer></script>
</body>
</html>