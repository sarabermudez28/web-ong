document.addEventListener("DOMContentLoaded", function () {

  // ==========================================
  // 1. EFECTO DEL LOGO Y HEADER EN SCROLL
  // ==========================================
  const header = document.querySelector(".header");

  if (header) {
    window.addEventListener("scroll", function () {
      if (window.scrollY > 20) {
        header.classList.add("scrolled");
      } else {
        header.classList.remove("scrolled");
      }
    });
  }

  // ==========================================
  // 1.1. MENÚ RESPONSIVE (TOGGLE MÓVIL)
  // ==========================================
  const menuToggle = document.querySelector(".menu-toggle");
  const navbar = document.querySelector(".navbar");

  if (menuToggle && navbar) {
    menuToggle.addEventListener("click", function () {
      navbar.classList.toggle("active");
    });
  }

  // ==========================================
  // 2. CARRUSEL DE TESTIMONIOS
  // ==========================================
  const testimonios = document.querySelectorAll(".testimonio");
  const btnSiguiente = document.querySelector(".siguiente");
  const btnAnterior = document.querySelector(".anterior");

  if (testimonios.length > 0) {
    let actual = 0;

    function mostrar(indice) {
      testimonios.forEach((t) => t.classList.remove("activo"));
      testimonios[indice].classList.add("activo");
    }

    if (btnSiguiente) {
      btnSiguiente.onclick = () => {
        actual++;
        if (actual >= testimonios.length) {
          actual = 0;
        }
        mostrar(actual);
      };
    }

    if (btnAnterior) {
      btnAnterior.onclick = () => {
        actual--;
        if (actual < 0) {
          actual = testimonios.length - 1;
        }
        mostrar(actual);
      };
    }
  }

  // ==========================================
  // 3. ANIMACIÓN DE CONTADORES (IMPACTO)
  // ==========================================
  const contadores = document.querySelectorAll(".contador");

  if (contadores.length > 0) {
    const animarContador = (el) => {
      const objetivo = +el.getAttribute("data-target");
      const duracion = 2000; // 2 segundos
      const paso = 16; // ~60 FPS
      const incremento = objetivo / (duracion / paso);
      let valorActual = 0;

      const timer = setInterval(() => {
        valorActual += incremento;
        if (valorActual >= objetivo) {
          el.textContent = objetivo;
          clearInterval(timer);
        } else {
          el.textContent = Math.ceil(valorActual);
        }
      }, paso);
    };

    const observerContadores = new IntersectionObserver(
      (entries, obs) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            animarContador(entry.target);
            obs.unobserve(entry.target); // Se desactiva para ejecutar solo una vez
          }
        });
      },
      { threshold: 0.4 }
    );

    contadores.forEach((contador) => observerContadores.observe(contador));
  }

  // ==========================================
  // 4. BARRAS DE PROGRESO (ANIMACIÓN EN SCROLL)
  // ==========================================
  const barras = document.querySelectorAll(".barra-progreso");

  if (barras.length > 0) {
    const observerBarras = new IntersectionObserver(
      (entries, obs) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const barra = entry.target;
            // Se restaura el ancho objetivo desde el dataset
            barra.style.width = barra.dataset.ancho || "100%";
            obs.unobserve(barra); // Solo se anima una vez
          }
        });
      },
      { threshold: 0.3 }
    );

    barras.forEach((barra) => {
      // Capturamos el ancho definido originalmente en el inline-style
      const anchoObjetivo = barra.style.width || "0%";
      barra.dataset.ancho = anchoObjetivo;
      barra.style.width = "0%"; // Inicializamos en 0% para preparar la animación CSS
      observerBarras.observe(barra);
    });
  }

});