<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Campeones - League of Legends</title>
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
        <li><a href="/">Inicio</a></li>
        <li><a href="/campeones" class="active">Campeones</a></li>
        <li><a href="/musica">Música</a></li>
      </ul>
    </div>
  </nav>

  <!-- Hero de Campeones -->
  <section class="page-hero champions-hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <h2 class="hero-title" data-text="ELIGE TU CAMPEÓN">
        ELIGE TU CAMPEÓN
      </h2>
      <p class="hero-subtitle">
        Descubre a los legendarios guerreros de Runaterra
      </p>
    </div>
  </section>

  <!-- Grid de Campeones -->
  <section class="champions-section">
    <div class="container">
      <h2 class="section-title">CAMPEONES DESTACADOS</h2>
      <div class="champions-grid">
        <!-- Zed -->
        <div class="champion-card shine-effect">
          <div class="champion-image">
            <img
              src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Zed_0.jpg"
              alt="Zed" />
          </div>
          <div class="champion-info">
            <h3>ZED</h3>
            <p class="champion-title">El Maestro de las Sombras</p>
            <p class="champion-role">Asesino</p>
          </div>
        </div>

        <!-- Shaco -->
        <div class="champion-card shine-effect">
          <div class="champion-image">
            <img
              src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Shaco_0.jpg"
              alt="Shaco" />
          </div>
          <div class="champion-info">
            <h3>SHACO</h3>
            <p class="champion-title">El Bufón Siniestro</p>
            <p class="champion-role">Asesino</p>
          </div>
        </div>

        <!-- Malzahar -->
        <div class="champion-card shine-effect">
          <div class="champion-image">
            <img
              src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Malzahar_0.jpg"
              alt="Malzahar" />
          </div>
          <div class="champion-info">
            <h3>MALZAHAR</h3>
            <p class="champion-title">El Profeta del Vacío</p>
            <p class="champion-role">Mago</p>
          </div>
        </div>

        <!-- Teemo -->
        <div class="champion-card shine-effect">
          <div class="champion-image">
            <img
              src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Teemo_0.jpg"
              alt="Teemo" />
          </div>
          <div class="champion-info">
            <h3>TEEMO</h3>
            <p class="champion-title">El Explorador Veloz</p>
            <p class="champion-role">Tirador</p>
          </div>
        </div>

        <!-- Garen -->
        <div class="champion-card shine-effect">
          <div class="champion-image">
            <img
              src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Garen_0.jpg"
              alt="Garen" />
          </div>
          <div class="champion-info">
            <h3>GAREN</h3>
            <p class="champion-title">El Poder de Demacia</p>
            <p class="champion-role">Luchador</p>
          </div>
        </div>

        <!-- Pantheon -->
        <div class="champion-card shine-effect">
          <div class="champion-image">
            <img
              src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Pantheon_0.jpg"
              alt="Pantheon" />
          </div>
          <div class="champion-info">
            <h3>PANTHEON</h3>
            <p class="champion-title">La Lanza Inquebrantable</p>
            <p class="champion-role">Luchador</p>
          </div>
        </div>

        <!-- Annie -->
        <div class="champion-card shine-effect">
          <div class="champion-image">
            <img
              src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Annie_0.jpg"
              alt="Annie" />
          </div>
          <div class="champion-info">
            <h3>ANNIE</h3>
            <p class="champion-title">La Hija de la Oscuridad</p>
            <p class="champion-role">Mago</p>
          </div>
        </div>

        <!-- Pyke -->
        <div class="champion-card shine-effect">
          <div class="champion-image">
            <img
              src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Pyke_0.jpg"
              alt="Pyke" />
          </div>
          <div class="champion-info">
            <h3>PYKE</h3>
            <p class="champion-title">El Destripador de Aguas Sangrientas</p>
            <p class="champion-role">Soporte</p>
          </div>
        </div>

        <!-- Fizz -->
        <div class="champion-card shine-effect">
          <div class="champion-image">
            <img
              src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Fizz_0.jpg"
              alt="Fizz" />
          </div>
          <div class="champion-info">
            <h3>FIZZ</h3>
            <p class="champion-title">El Bromista de las Mareas</p>
            <p class="champion-role">Asesino</p>
          </div>
        </div>

        <!-- Vladimir -->
        <div class="champion-card shine-effect">
          <div class="champion-image">
            <img
              src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Vladimir_0.jpg"
              alt="Vladimir" />
          </div>
          <div class="champion-info">
            <h3>VLADIMIR</h3>
            <p class="champion-title">El Segador Carmesí</p>
            <p class="champion-role">Mago</p>
          </div>
        </div>

        <!-- Yorick -->
        <div class="champion-card shine-effect">
          <div class="champion-image">
            <img
              src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Yorick_0.jpg"
              alt="Yorick" />
          </div>
          <div class="champion-info">
            <h3>YORICK</h3>
            <p class="champion-title">El Pastor de Almas</p>
            <p class="champion-role">Luchador</p>
          </div>
        </div>

        <!-- Veigar -->
        <div class="champion-card shine-effect">
          <div class="champion-image">
            <img
              src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Veigar_0.jpg"
              alt="Veigar" />
          </div>
          <div class="champion-info">
            <h3>VEIGAR</h3>
            <p class="champion-title">El Pequeño Maestro del Mal</p>
            <p class="champion-role">Mago</p>
          </div>
        </div>

        <!-- Kled -->
        <div class="champion-card shine-effect">
          <div class="champion-image">
            <img
              src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Kled_0.jpg"
              alt="Kled" />
          </div>
          <div class="champion-info">
            <h3>KLED</h3>
            <p class="champion-title">El Cantabravo Reunificado</p>
            <p class="champion-role">Luchador</p>
          </div>
        </div>

        <!-- Lux -->
        <div class="champion-card shine-effect">
          <div class="champion-image">
            <img
              src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Lux_0.jpg"
              alt="Lux" />
          </div>
          <div class="champion-info">
            <h3>LUX</h3>
            <p class="champion-title">La Dama de la Luz</p>
            <p class="champion-role">Mago</p>
          </div>
        </div>

        <!-- Yuumi -->
        <div class="champion-card shine-effect">
          <div class="champion-image">
            <img
              src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Yuumi_0.jpg"
              alt="Yuumi" />
          </div>
          <div class="champion-info">
            <h3>YUUMI</h3>
            <p class="champion-title">La Gata Mágica</p>
            <p class="champion-role">Soporte</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Roles Section -->
  <section class="roles-section">
    <div class="container">
      <h2 class="section-title">ROLES EN LA GRIETA</h2>
      <div class="roles-grid">
        <div class="role-card shine-effect">
          <div class="role-icon">⚔️</div>
          <h3>ASESINOS</h3>
          <p>
            Eliminan objetivos clave con su alto daño explosivo y movilidad
          </p>
        </div>
        <div class="role-card shine-effect">
          <div class="role-icon">🛡️</div>
          <h3>TANQUES</h3>
          <p>
            Absorben daño y protegen a sus aliados en el frente de batalla
          </p>
        </div>
        <div class="role-card shine-effect">
          <div class="role-icon">✨</div>
          <h3>MAGOS</h3>
          <p>
            Infligen daño mágico masivo desde la distancia con sus hechizos
          </p>
        </div>
        <div class="role-card shine-effect">
          <div class="role-icon">🎯</div>
          <h3>TIRADORES</h3>
          <p>Causan daño sostenido a distancia con ataques básicos</p>
        </div>
        <div class="role-card shine-effect">
          <div class="role-icon">🤝</div>
          <h3>SOPORTES</h3>
          <p>Ayudan y protegen a sus aliados con curaciones y control</p>
        </div>
        <div class="role-card shine-effect">
          <div class="role-icon">💪</div>
          <h3>LUCHADORES</h3>
          <p>Equilibran daño y resistencia en combates prolongados</p>
        </div>
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
        </ul>
      </div>
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
  </script>
</body>

</html>