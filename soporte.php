<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Sueños, Esperanzas y Risas. A.C.</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Logo 3.png" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/estilo.css" rel="stylesheet">
</head>

<body>
  <?php
  require_once 'header.php';
  ?>

<div class="faq-and-form-container">
<div class="faq-container">
    <h2>Preguntas frecuentes</h2>
    <div class="faq-question">
      <input type="checkbox" class="faq-toggle" id="faq1">
      <label for="faq1">+ Pregunta 1</label>
      <div class="faq-answer">
        <p>Respuesta a la Pregunta 1.</p>
      </div>
    </div>
    <div class="faq-question">
      <input type="checkbox" class="faq-toggle" id="faq2"> 
      <label for="faq2">+ Pregunta 2</label>
      <div class="faq-answer">
        <p>Respuesta a la Pregunta 2.</p>
      </div>
    </div>
    <div class="faq-question">
      <input type="checkbox" class="faq-toggle" id="faq3"> 
      <label for="faq3">+ Pregunta 3</label>
      <div class="faq-answer">
        <p>Respuesta a la Pregunta 3.</p>
      </div>
    </div>
    <!-- para añadir otro apartado nomás hay q copiar y pegar y sustituir el id y el label for :) -->
  </div>

  <div class="support-form-container">
    <h2>Contacto de Soporte</h2>
    <form  action="assets/form/form_supp.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="consulta">Mensaje o Consulta:</label>
        <textarea id="consulta" name="consulta" rows="4" required></textarea>
      </div>
      <div class="form-group">
        <label for="categoria">Categoría de Soporte:</label>
        <select id="categoria" name="categoria">
          <option value="Problemas Técnicos">Problemas Técnicos</option>
          <option value="Sugerencias">Sugerencias</option>
          <option value="Otro">Otro</option>
        </select>
      </div>
      <div class="form-group">
        <label for="adjuntos">Adjuntar Archivos (opcional):</label>
        <input type="file" id="adjuntos" name="adjuntos">
        <small>Adjunta capturas de pantalla u otros archivos relacionados (opcional).</small>
      </div>
      <div class="form-group">
        <label for="telefono">Número de Teléfono (opcional):</label>
        <input type="tel" id="telefono" name="telefono">
      </div>
      <button type="submit" class="btn btn-primary">Enviar Consulta</button>
    </form>
  </div>
  </div>


  <?php
  require_once 'footer.php';
  ?>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>
