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

<main id="main">
  <section id="contact" class="contact mb-5">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-12 text-center mb-5" >
          <h1>Contacta con nosotros</h1>
            <hr class="linea-encabezado">
        </div>
      </div>
      <div class="row gy-4">
        <div class="col-md-6">
          <!-- formulario -->
          <div class="contact-form" style="margin-top: 50px; border-right: 500px;">
            <h3>Envíanos un mensaje</h3>
            <form action="assets/form/form_contacto.php" method="post">
               <div class="mb-3">
                <input type="text" name="nombre" class="form-control" placeholder="Tu Nombre" required>
              </div>
              <div class="mb-3">
                <input type="email" name=  "email" class="form-control" placeholder="Tu Correo Electrónico" required>
              </div>
              <div class="mb-3">
                <textarea name="mensaje" class="form-control" rows="4" placeholder="Tu Mensaje" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
            </form>
          </div>
        </div>
        <div class="col-md-6 ml-auto">
          <!-- Contenedor de soporte -->
          <div class="support-container">
            <i class="fas fa-headset fa-5x" style="margin-top: 50px;"></i>
            <br>
            <h2>¿Tienes problemas con el servicio?</h2>
            <br>
            <p>Revisa nuestro apartado de soporte.</p>
            <br>
            <br>
            <br>
            <a class="support-button" href="soporte.php">Ir al Soporte</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="intro" class="intro">
    <div class="col-md-6">
      <!-- mapa -->
      <p style="margin-left: 40px">Morelia:</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d886.2417839524394!2d-101.18619324039814!3d19.722769524691934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e40be8f4d3b%3A0xf001c256ae856856!2sInstituto%20Tecnol%C3%B3gico%20de%20Morelia!5e0!3m2!1ses-419!2smx!4v1698485013911!5m2!1ses-419!2smx" width="600" height="450" style="border:0; margin-left: 40px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <p style="margin-left: 40px">Avenida Tecnológico #1500, Col. Lomas de Santiaguito. Morelia, Mich.</p>
    </div>
  </section>
</main>

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
