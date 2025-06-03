<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="estilos2.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Noticias Deportivas</title>
  <link rel="stylesheet" href="estilos2.css" />
</head>
<body>
  <header>
    <nav class="navbar">
      <img src="logo.jpg" alt="logo" width="10%">
          <div class="logo">DeporteHoy</div>
      <ul class="nav-links">
        <li><a href="">Inicio</a></li>
        <li><a href="futbol.php">Fútbol</a></li
        <li><a href="contacto.php">Contacto</a></li>
      </ul>
    </nav>
    <section class="hero">
      <h1>La mejor cobertura deportiva</h1>
      <p>Últimas noticias, resultados y análisis en un solo lugar.</p>
    </section>
  </header>

  <main>
    <section class="highlights">
      <h2>Destacados</h2>
      <div id="carousel" class="carousel">
        <div class="carousel-item active">⚽ Messi marca un golazo en el último minuto</div>
        <div class="carousel-item">🏀 Lakers logran victoria crucial en los playoffs</div>
        <div class="carousel-item">🎾 Nadal regresa a Roland Garros con fuerza</div>
      </div>
    </section>

    <section class="news">
      <section class="acciones">
  <h2>Acciones rápidas</h2>
  <button class="boton-animado" onclick="cambiarFondo()">Cambiar fondo</button>
  <button class="boton-animado" onclick="suscribirse()">Suscribirse</button>
  <button class="boton-animado" onclick="toggleDestacados()">Ocultar/Mostrar Destacados</button>
</section>

      <h2>Últimas Noticias</h2>
      <article class="news-item">
        <h3>El Real Madrid avanza a la final de la Champions</h3>
        <p>Con una actuación estelar de Bellingham, el equipo blanco llega a otra final europea.</p>
      </article>
      <article class="news-item">
        <h3>Giannis vuelve con Milwaukee</h3>
        <p>Después de una lesión, Giannis Antetokounmpo regresa a las canchas con una gran actuación.</p>
      </article>
      <article class="news-item">
       <h3>Lo mejor en tienda de futbol, solo aqui con nosotros</h3>
       <p>Somos tu mejor opcion</p>
    </section>
  </main>
<script>
  function cambiarFondo() {
    document.body.style.backgroundColor =
      document.body.style.backgroundColor === "lightgray" ? "white" : "lightgray";
  }

  function suscribirse() {
    const nombre = prompt("¿Cuál es tu nombre?");
    if (nombre) {
      alert(`¡Gracias por suscribirte, ${nombre}! Te mantendremos informado.`);
    } else {
      alert("Suscripción cancelada.");
    }
  }

  function toggleDestacados() {
    const destacados = document.querySelector(".highlights");
    if (destacados.style.display === "none") {
      destacados.style.display = "block";
    } else {
      destacados.style.display = "none";
    }
  }
</script>

  <script src="script.js"></script>
</body>
<footer>Derechos reservados @2025 Edwin Alexander Vergara Viveros</footer>
</html>
