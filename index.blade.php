<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>League of Legends - Bienvenido a Runaterra</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@300;400;700;900&display=swap"
    rel="stylesheet" />
</head>

<body>
  <!-- Preloader -->
  <div class="preloader" id="preloader">
    <div class="loader"></div>
  </div>

  <!-- Navegación -->
  <nav class="navbar">
    <div class="container nav-container">
      <div class="logo">
        <img
          src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/565197caf987af4e4da307df6e2b235a28714736-837x469.jpg?crop=center&fit=crop&fm=webp&h=630&w=1200"
          alt="League of Legends"
          class="logo-img" />
        <h1 data-text="LEAGUE OF LEGENDS">LEAGUE OF LEGENDS</h1>
      </div>
      <ul class="nav-menu">
        <li><a href="/" class="active">Inicio</a></li>
        <li><a href="/campeones">Campeones</a></li>
        <li><a href="/musica">Música</a></li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section con efecto de video -->
  <section class="hero">
    <div class="hero-overlay"></div>
    <div class="hero-image-container">
      <img
        src="https://images.contentstack.io/v3/assets/blt731acb42bb3d1659/blt9978b6a94e8bd984/6582d0dc1f7a7e1197047c54/LOL_KeyArt_jpg.jpg"
        alt="League of Legends"
        class="hero-bg" />
    </div>
    <div class="hero-content">
      <h2 class="hero-title" data-text="BIENVENIDO A RUNATERRA">
        BIENVENIDO A RUNATERRA
      </h2>
      <p class="hero-subtitle">
        Únete a más de 150 millones de jugadores en el juego más popular del
        mundo
      </p>
      <a
        href="https://signup.leagueoflegends.com/"
        target="_blank"
        class="btn-primary">DESCARGAR AHORA</a>
    </div>
  </section>

  <!-- Sobre League of Legends -->
  <section class="about">
    <div class="container">
      <h2 class="section-title">¿QUÉ ES LEAGUE OF LEGENDS?</h2>
      <div class="about-grid">
        <div class="about-card shine-effect">
          <div class="icon">⚔️</div>
          <h3>JUEGO COMPETITIVO</h3>
          <p>
            Enfrenta a jugadores de todo el mundo en batallas estratégicas 5v5
            llenas de acción y habilidad
          </p>
        </div>
        <div class="about-card shine-effect">
          <div class="icon">🏆</div>
          <h3>ESPORTS</h3>
          <p>
            Forma parte del ecosistema competitivo más grande del mundo con
            torneos profesionales
          </p>
        </div>
        <div class="about-card shine-effect">
          <div class="icon">🎮</div>
          <h3>+160 CAMPEONES</h3>
          <p>
            Descubre tu estilo de juego con una amplia variedad de campeones
            únicos y habilidades
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- El Lore de Runaterra -->
  <section class="lore">
    <div class="container">
      <h2 class="section-title">EL MUNDO DE RUNATERRA</h2>
      <div class="lore-content">
        <div class="lore-text">
          <p>
            Runaterra es un vasto mundo lleno de magia, historia y conflicto.
            Desde las brillantes ciudades de Demacia y Piltover hasta las
            oscuras profundidades de las Islas de la Sombra y el reino helado
            de Freljord, cada región tiene su propia cultura, historia y
            habitantes únicos.
          </p>
          <p>
            En este mundo, la magia antigua fluye a través de las runas del
            mundo, otorgando poder a aquellos lo suficientemente valientes o
            tontos como para reclamarlo. Los campeones de cada región luchan
            no solo por gloria personal, sino por el destino de sus tierras
            natales y el equilibrio del mundo mismo.
          </p>
          <p>
            Las guerras rúnicas han dado forma a la historia de Runaterra,
            dejando cicatrices profundas y creando leyendas que trascienden el
            tiempo. Desde los antiguos Ascendidos de Shurima hasta los
            guardianes estelares que protegen el cosmos, cada campeón tiene su
            propia historia que contar.
          </p>
        </div>
        <div class="lore-image">
          <img
            id="championRotator"
            src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Jinx_0.jpg"
            alt="Campeón de Runaterra"
            class="shine-effect champion-rotator" />
        </div>
      </div>
    </div>
  </section>

  <!-- Datos Interesantes -->
  <section class="fun-facts">
    <div class="container">
      <h2 class="section-title">DATOS INTERESANTES</h2>
      <div class="facts-grid">
        <div class="fact-card shine-effect">
          <div class="fact-number" data-count="180">180M+</div>
          <div class="fact-label">Jugadores Mensuales</div>
        </div>
        <div class="fact-card shine-effect">
          <div class="fact-number" data-count="13">13</div>
          <div class="fact-label">Años de Historia</div>
        </div>
        <div class="fact-card shine-effect">
          <div class="fact-number" data-count="160">160+</div>
          <div class="fact-label">Campeones Únicos</div>
        </div>
        <div class="fact-card shine-effect">
          <div class="fact-number" data-count="12">12</div>
          <div class="fact-label">Regiones de Runaterra</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Logros del Juego -->
  <section class="achievements">
    <div class="container">
      <h2 class="section-title">MAYORES LOGROS</h2>
      <div class="achievements-grid">
        <div class="achievement-card shine-effect">
          <h3>🏆 Juego Más Jugado del Mundo</h3>
          <p>
            League of Legends mantiene el récord como el juego de PC más
            jugado del mundo durante más de una década
          </p>
        </div>
        <div class="achievement-card shine-effect">
          <h3>📺 Worlds 2023 - 6.4M Espectadores</h3>
          <p>
            El Campeonato Mundial 2023 alcanzó un pico de audiencia de 6.4
            millones de espectadores simultáneos
          </p>
        </div>
        <div class="achievement-card shine-effect">
          <h3>💰 Premio Pool de $2.25M</h3>
          <p>
            Los torneos de League of Legends ofrecen algunos de los premios
            más grandes en la historia de los esports
          </p>
        </div>
        <div class="achievement-card shine-effect">
          <h3>🌍 Presencia Global</h3>
          <p>
            Servidores en más de 20 regiones con comunidades activas en todos
            los continentes
          </p>
        </div>
        <div class="achievement-card shine-effect">
          <h3>🎬 Serie Animada: Arcane</h3>
          <p>
            La serie Arcane de Netflix ganó múltiples premios Emmy y se
            convirtió en un fenómeno cultural
          </p>
        </div>
        <div class="achievement-card shine-effect">
          <h3>🎮 Universo Expandido</h3>
          <p>
            Múltiples juegos spin-off incluyendo Teamfight Tactics, Wild Rift,
            Legends of Runeterra y más
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Galería de Imágenes -->
  <section class="gallery">
    <div class="container">
      <h2 class="section-title">GALERÍA ÉPICA</h2>
      <div class="gallery-grid">
        <div class="gallery-item shine-effect">
          <img
            src="https://wiki.leagueoflegends.com/en-us/images/thumb/Demacia_The_Grand_Plaza.jpg/1200px-Demacia_The_Grand_Plaza.jpg?23b56="
            alt="Demacia" />
          <div class="gallery-overlay">
            <h3>DEMACIA</h3>
          </div>
        </div>
        <div class="gallery-item shine-effect">
          <img
            src="https://wiki.leagueoflegends.com/en-us/images/thumb/Noxus_LoR_Background.jpg/800px-Noxus_LoR_Background.jpg?18f05="
            alt="Noxus" />
          <div class="gallery-overlay">
            <h3>NOXUS</h3>
          </div>
        </div>
        <div class="gallery-item shine-effect">
          <img
            src="https://wiki.leagueoflegends.com/en-us/images/Ionia_The_Placidium.jpg?d2405="
            alt="Jonia" />
          <div class="gallery-overlay">
            <h3>IONIA</h3>
          </div>
        </div>
        <div class="gallery-item shine-effect">
          <img
            src="https://wiki.leagueoflegends.com/en-us/images/Piltover_Arcane_02.jpg?d7915="
            alt="Piltover" />
          <div class="gallery-overlay">
            <h3>PILTOVER</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Formulario de Contacto -->
  <section class="contact-form-section">
    <div class="container">
      <h2 class="section-title">ÚNETE A LA BATALLA</h2>
      <p class="form-subtitle">
        Regístrate y recibe noticias exclusivas de League of Legends
      </p>
      <div class="form-container">
        <form class="contact-form">
          <div class="form-row">
            <div class="form-group">
              <label for="nombre">Nombre de Invocador</label>
              <input
                type="text"
                id="nombre"
                name="nombre"
                required
                placeholder="Ingresa tu nombre" />
            </div>
            <div class="form-group">
              <label for="email">Correo Electrónico</label>
              <input
                type="email"
                id="email"
                name="email"
                required
                placeholder="tu@email.com" />
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="region">Región</label>
              <select id="region" name="region" required>
                <option value="">Selecciona tu región</option>
                <option value="LAN">LAN - Latinoamérica Norte</option>
                <option value="LAS">LAS - Latinoamérica Sur</option>
                <option value="NA">NA - Norteamérica</option>
                <option value="EUW">EUW - Europa Oeste</option>
                <option value="EUNE">EUNE - Europa Nórdica y Este</option>
                <option value="BR">BR - Brasil</option>
                <option value="KR">KR - Corea</option>
                <option value="JP">JP - Japón</option>
              </select>
            </div>
            <div class="form-group">
              <label for="rol">Rol Favorito</label>
              <select id="rol" name="rol" required>
                <option value="">Selecciona tu rol</option>
                <option value="Top">Top</option>
                <option value="Jungle">Jungla</option>
                <option value="Mid">Mid</option>
                <option value="ADC">ADC</option>
                <option value="Support">Soporte</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="mensaje">Mensaje</label>
            <textarea
              id="mensaje"
              name="mensaje"
              rows="5"
              placeholder="Cuéntanos sobre tu experiencia en Runaterra..."></textarea>
          </div>

          <div class="form-group checkbox-group">
            <input
              type="checkbox"
              id="newsletter"
              name="newsletter"
              checked />
            <label for="newsletter">Quiero recibir noticias y actualizaciones de League of
              Legends</label>
          </div>

          <button type="submit" class="btn-primary btn-submit">
            ENVIAR INFORMACIÓN
          </button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-section">
          <h3>LEAGUE OF LEGENDS</h3>
          <p>
            El MOBA más jugado del mundo. Únete a millones de jugadores en la
            Grieta del Invocador.
          </p>
        </div>
        <div class="footer-section">
          <h3>ENLACES RÁPIDOS</h3>
          <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="/campeones">Campeones</a></li>
            <li><a href="/musica">Música</a></li>
          </ul>
        </div>
        <div class="footer-section">
          <h3>COMUNIDAD</h3>
          <ul>
            <li>
              <a
                href="https://www.facebook.com/leagueoflegends"
                target="_blank">Facebook</a>
            </li>
            <li>
              <a href="https://twitter.com/leagueoflegends" target="_blank">Twitter</a>
            </li>
            <li>
              <a
                href="https://www.youtube.com/leagueoflegends"
                target="_blank">YouTube</a>
            </li>
            <li>
              <a href="https://discord.gg/leagueoflegends" target="_blank">Discord</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>
          &copy; 2024 Riot Games, Inc. League of Legends y todos los logotipos
          relacionados son marcas comerciales de Riot Games, Inc.
        </p>
      </div>
    </div>
  </footer>

  <script>
    // Preloader
    window.addEventListener("load", function() {
      const preloader = document.getElementById("preloader");
      setTimeout(() => {
        preloader.classList.add("hidden");
      }, 1000);
    });

    // Rotador de campeones cada 5 segundos
    const champions = [
      "Jinx_0",
      "Yasuo_0",
      "Ahri_0",
      "Lux_0",
      "Ezreal_0",
      "Akali_0",
      "Zed_0",
      "Thresh_0",
      "Lee_Sin_0",
      "Katarina_0",
      "Vayne_0",
      "Ekko_0",
    ];

    let currentIndex = 0;
    const championImg = document.getElementById("championRotator");

    function rotateChampion() {
      currentIndex = (currentIndex + 1) % champions.length;
      championImg.style.opacity = "0";

      setTimeout(() => {
        championImg.src = `https://ddragon.leagueoflegends.com/cdn/img/champion/splash/${champions[currentIndex]}.jpg`;
        championImg.style.opacity = "1";
      }, 500);
    }

    setInterval(rotateChampion, 5000);

    // Manejo del formulario
    const contactForm = document.getElementById("contactForm");
    const formMessage = document.getElementById("formMessage");

    contactForm.addEventListener("submit", function(e) {
      e.preventDefault();

      // Obtener valores del formulario
      const nombre = document.getElementById("nombre").value;
      const email = document.getElementById("email").value;
      const region = document.getElementById("region").value;
      const rol = document.getElementById("rol").value;
      const mensaje = document.getElementById("mensaje").value;
      const newsletter = document.getElementById("newsletter").checked;

      // Simular envío exitoso
      formMessage.style.display = "block";
      formMessage.className = "form-message success";
      formMessage.innerHTML = `
          <strong>¡Bienvenido a la Grieta del Invocador, ${nombre}!</strong><br>
          Tu información ha sido registrada exitosamente.<br>
          Región: ${region} | Rol: ${rol}
        `;

      // Limpiar formulario
      contactForm.reset();

      // Ocultar mensaje después de 5 segundos
      setTimeout(() => {
        formMessage.style.display = "none";
      }, 5000);
    });

    // Animación de scroll suave para navegación
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener("click", function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute("href"));
        if (target) {
          target.scrollIntoView({
            behavior: "smooth",
            block: "start",
          });
        }
      });
    });
  </script>
</body>

</html>