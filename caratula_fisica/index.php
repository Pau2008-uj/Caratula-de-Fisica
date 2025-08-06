<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Carátula Física - Interstellar & Newton</title>

  <!-- Tipografías elegantes -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Orbitron:wght@500&family=Roboto:wght@400;500&display=swap" rel="stylesheet" />
  <!-- Font Awesome para iconos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 20px;
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(135deg, #0a0a2a, #1a1a40, #121a35);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: start;
      color: #e0e7ff;
      overflow-y: auto;
      padding-bottom: 80px;
      position: relative;
    }

    /* Fondo de estrellas sutiles */
    body::before {
      content: "";
      position: fixed;
      top: 0; left: 0; right: 0; bottom: 0;
      background: 
        radial-gradient(circle at 10% 20%, rgba(138, 43, 226, 0.1), transparent 20%),
        radial-gradient(circle at 90% 80%, rgba(74, 144, 226, 0.1), transparent 20%);
      z-index: -2;
    }

    body::after {
      content: "";
      position: fixed;
      top: 0; left: 0; right: 0; bottom: 0;
      background-image: 
        radial-gradient(1px 1px #8a2be2, transparent 1px),
        radial-gradient(1px 1px #4a90e2, transparent 1px);
      background-size: 50px 50px;
      opacity: 0.08;
      z-index: -1;
    }

    .container {
      width: 100%;
      max-width: 620px;
      display: flex;
      flex-direction: column;
      gap: 35px;
    }

    .caratula {
      background: rgba(20, 25, 50, 0.92);
      backdrop-filter: blur(12px);
      border-radius: 26px;
      padding: 60px 40px;
      box-shadow: 
        0 25px 50px rgba(0, 0, 0, 0.7),
        0 0 30px rgba(100, 149, 237, 0.25);
      text-align: center;
      border: 1px solid rgba(100, 149, 237, 0.3);
      position: relative;
      transition: transform 0.3s ease;
    }

    .caratula:hover {
      transform: translateY(-5px);
    }

    .caratula::before {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; height: 6px;
      background: linear-gradient(90deg, #4a90e2, #8a2be2, #4a90e2);
      border-radius: 26px 26px 0 0;
      box-shadow: 0 0 10px rgba(74, 144, 226, 0.6);
    }

    .titulo-principal {
      font-family: 'Orbitron', sans-serif;
      font-size: 4rem;
      color: #a7c7ff;
      text-shadow: 0 0 15px rgba(167, 199, 255, 0.6);
      margin: 15px 0 10px;
      letter-spacing: 2px;
    }

    .subtitulo {
      font-family: 'Montserrat', sans-serif;
      font-size: 1.6rem;
      color: #8ab4f8;
      margin-bottom: 35px;
      font-weight: 500;
    }

    .detalle-label {
      font-family: 'Montserrat', sans-serif;
      font-size: 1.15rem;
      color: #6ab7ff;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      margin: 24px 0 6px 0;
      font-weight: 600;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
    }

    .detalle {
      font-size: 1.25rem;
      color: #ffffff;
      margin-bottom: 14px;
    }

    .frase {
      margin: 35px 0;
      padding: 25px;
      font-style: italic;
      font-size: 1.3rem;
      color: #d8b4fe;
      border-left: 5px solid #8a2be2;
      background: rgba(138, 43, 226, 0.1);
      border-radius: 0 16px 16px 0;
      line-height: 1.7;
    }

    .frase strong {
      color: #a7c7ff;
    }

    .video {
      margin-top: 30px;
      border-radius: 18px;
      overflow: hidden;
      box-shadow: 0 15px 35px rgba(0, 100, 255, 0.35);
      border: 2px solid rgba(100, 149, 237, 0.4);
    }

    iframe {
      width: 100%;
      height: 280px;
      border: none;
      background: #000;
      border-radius: 16px;
    }

    .botones {
      display: flex;
      gap: 16px;
      justify-content: center;
      flex-wrap: wrap;
      margin-top: 25px;
    }

    .btn {
      padding: 15px 24px;
      font-family: 'Montserrat', sans-serif;
      font-size: 1.05rem;
      font-weight: 600;
      border: none;
      border-radius: 50px;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 10px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease;
    }

    .btn-primary {
      background: #4a90e2;
      color: white;
    }

    .btn-secondary {
      background: #8a2be2;
      color: white;
    }

    .btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }

    .info-section {
      display: none;
      padding: 40px 35px;
      background: rgba(30, 40, 70, 0.95);
      border-radius: 22px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
      border: 1px solid rgba(100, 149, 237, 0.4);
    }

    .info-section h2 {
      font-family: 'Orbitron', sans-serif;
      color: #a7c7ff;
      text-align: center;
      margin-bottom: 25px;
      font-size: 2.2rem;
    }

    .info-section blockquote {
      font-style: italic;
      color: #d8b4fe;
      border-left: 5px solid #8a2be2;
      padding: 0 0 0 22px;
      background: rgba(138, 43, 226, 0.08);
      border-radius: 0 12px 12px 0;
      line-height: 1.7;
    }

    .close-info {
      display: block;
      margin: 30px auto 0;
      padding: 14px 28px;
      background: #e74c3c;
      color: white;
      border: none;
      border-radius: 35px;
      cursor: pointer;
      font-family: 'Montserrat', sans-serif;
      font-size: 1.1rem;
      font-weight: 600;
    }

    @media (max-width: 520px) {
      .caratula {
        padding: 50px 25px;
      }
      .titulo-principal {
        font-size: 3.2rem;
      }
      iframe {
        height: 200px;
      }
      .btn {
        font-size: 0.95rem;
        padding: 12px 20px;
      }
      .frase {
        font-size: 1.15rem;
        padding: 20px;
      }
    }
  </style>
</head>
<body>

  <div class="container">

    <!-- Carátula principal -->
    <div class="caratula">
      <div class="subtitulo"><i class="fas fa-school"></i> Unidad Educativa Manuel J. Calle</div>
      <div class="titulo-principal">FÍSICA</div>

      <div class="detalle-label"><i class="fas fa-calendar-alt"></i> Trimestre</div>
      <div class="detalle">Segundo</div>

      <div class="detalle-label"><i class="fas fa-user-graduate"></i> Estudiante</div>
      <div class="detalle">Amy Urgiles</div>

      <div class="detalle-label"><i class="fas fa-chalkboard-teacher"></i> Docente</div>
      <div class="detalle">Lic. José David Conza</div>

      <div class="detalle-label"><i class="fas fa-building"></i> Curso</div>
      <div class="detalle">3ro de Bachillerato</div>

      <div class="detalle-label"><i class="fas fa-laptop-code"></i> Especialidad</div>
      <div class="detalle">Informática</div>

      <div class="detalle-label"><i class="fas fa-calendar-year"></i> Año Lectivo</div>
      <div class="detalle">2025 - 2026</div>

      <!-- Frases poderosas -->
      <div class="frase">
        “La única manera de que los humanos descubran cómo llegar a alguna parte es dejando algo atrás.” 
        <br>
        <strong>— Interstellar</strong>
      </div>

      <div class="frase">
        “Por cada acción hay una reacción igual y contraria.” 
        <br>
        <strong>— Tercera Ley de Newton</strong>
      </div>

      <!-- Video CORRECTO y FUNCIONAL -->
      <div class="video">
        <iframe 
          src="https://www.youtube.com/embed/T5tUwQVW3vw" 
          title="Tercera Ley de Newton - Física | Carátula" 
          allowfullscreen
          loading="lazy">
        </iframe>
      </div>

      <!-- Botones -->
      <div class="botones">
        <button class="btn btn-primary" onclick="document.getElementById('infoSection').style.display='block'">
          <i class="fas fa-book-open"></i> Conecta con el Universo
        </button>
        <button class="btn btn-secondary" onclick="window.open('https://www.youtube.com/watch?v=T5tUwQVW3vw', '_blank')">
          <i class="fas fa-play-circle"></i> Ver en YouTube
        </button>
      </div>
    </div>

    <!-- Sección adicional -->
    <div class="info-section" id="infoSection">
      <h2><i class="fas fa-atom"></i> Física: Acción, Reacción y Emoción</h2>
      <p>
        La Tercera Ley de Newton no solo explica cómo se mueven los cohetes, 
        también nos recuerda que cada decisión tiene una consecuencia.
      </p>
      <blockquote>
        “No estamos solos en el universo. No lo estamos. Y no lo hemos estado nunca.” 
        <br>
        <strong>— Dr. Brand, Interstellar</strong>
      </blockquote>
      <p>
        Así como el progreso requiere dejar algo atrás, 
        el conocimiento requiere curiosidad, valentía y corazón.
      </p>
      <button class="close-info" onclick="document.getElementById('infoSection').style.display='none'">
        <i class="fas fa-times"></i> Cerrar
      </button>
    </div>

  </div>

</body>
</html>