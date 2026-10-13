<?php
// Valores por defecto en caso de que la página no defina las variables
$titulo_seccion = isset($titulo_seccion) ? $titulo_seccion : "Bienvenidos";
$imagen_banner  = isset($imagen_banner) ? $imagen_banner : "asociacion/fondo-banner.png";
?>

<header class="header-dinamico" style="background-image: url('<?php echo $imagen_banner; ?>');">
  <div class="contenedor-header-dinamico">
    <h1 class="section-title"><?php echo $titulo_seccion; ?></h1>
  </div>

  <!-- SVG del borde rasgado colocado en la parte inferior -->
  <div class="shape-divider">
    <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M0,0 C150,90 350,-40 500,65 C650,170 900,10 1200,40 L1200,120 L0,120 Z" fill="#ffffff"></path>
    </svg>
  </div>
</header>