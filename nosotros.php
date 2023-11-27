<?php
include 'servidor.php';
?>

<!DOCTYPE html>
<html lang="es">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@200;500&family=IBM+Plex+Sans:ital,wght@0,300;0,500;0,700;1,300;1,700&display=swap" rel="stylesheet">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NASNation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Logo moderno de tecnología Minimalista azul.png" rel="icon">

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

  <!-- mi estilo -->
  <link rel="stylesheet" type="text/css" href="assets\css\estiloo.css">

</head>

<body>
  container
  <?php
  require_once 'header.php';
  ?>
  <!-- pinche tilin  -->
  <main id="main">
    <section>

      <div class="" data-aos="fade-up">

        <div class="row justify-content-between align-items-lg-center">
          <div class="col-lg-12 text-center mb-5">
            <h1 class="sobre-noaotros">Sobre nosotros</h1>
          </div>
        </div>

        <div class="row mb-5">
          <div class="d-md-flex post-entry-2 half">
            <a href="#" class="me-4 thumbnail">
              <img src="assets/img/equipo.jpg" alt="" class="img-fluid">
            </a>
            <div class="ps-md-5 mt-4 mt-md-0">
              <div class="letrapeq">Quiénes somos</div>
              <h2 class="mb-4 display-4"> NASNATION</h2>
              <p>Somos un equipo apasionado por la tecnología de servidores NAS y comprometidos con la sostenibilidad.
                Unidos en nuestra misión de maximizar el valor de los recursos existentes, nuestra estrategia se centra en dar nueva vida a equipos reutilizados.
                Impulsados por la eficiencia energética y la optimización de recursos, aprovechamos la potencia de servidores NAS reacondicionados para brindar soluciones de almacenamiento fiables y respetuosas con el medio ambiente.
                Nuestro compromiso inquebrantable con la reutilización, la reducción de residuos electrónicos y la eficiencia nos impulsa a ofrecer opciones eco-amigables sin comprometer el rendimiento.</p>
            </div>
          </div>
          <div class="me-4 area-con-fondo">
            <div class="d-md-flex post-entry-2 half mt-5">
              <a href="#" class="me-4 thumbnail order-2">
                <img src="assets/img/vision.png" alt="" class="img-fluid">
              </a>
              <div class="pe-md-5 mt-4 mt-md-0">
                <div class="letrapeq"> Nuestra Misión &amp; Visión</div>
                <h2 class="mi-clase-personalizada">OFRECEMOS UN MAÑANA SUSTENTABLE</h2>
                <p class="letrat"> Es convertirnos en líderes reconocidos en la industria de almacenamiento NAS sostenible, impulsando un cambio significativo en la forma en que las organizaciones gestionan sus datos.
                  Visualizamos un mundo donde la reutilización de equipos electrónicos sea una práctica común y donde nuestras soluciones de almacenamiento, basadas en servidores NAS reacondicionados,
                  sean la elección preferida por su eficiencia, rendimiento y, sobre todo, su impacto positivo en el medio ambiente. A través de nuestra dedicación a la sostenibilidad,
                  aspiramos a contribuir a un planeta más limpio y próspero para las generaciones futuras.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="mb-5 bg-light py-5">
      <div class="me-4 area-con-fondo1">
        <div class="container" data-aos="fade-up">
          <div class="row justify-content-between align-items-lg-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
              <h2 class="valores">NUESTRO CÓDIGO</h2>
              <p>Nuestros valores y nuestra cultura nos diferencian.</p>
              <p>Estamos firmemente comprometidos con la sostenibilidad, creyendo que un cambio positivo en el mundo se logra a través de prácticas sostenibles. Nos esforzamos por reducir la huella de carbono y el desperdicio electrónico mediante la reutilización de equipos y la eficiencia energética. Abrazamos la innovación como medio para abordar desafíos ambientales y tecnológicos, buscando soluciones creativas que promuevan la sostenibilidad. Defendemos la igualdad y la diversidad, valorando las perspectivas únicas de nuestro equipo en un entorno inclusivo. Fomentamos la confianza y transparencia en nuestras relaciones, tanto internas como con clientes, garantizando nuestro compromiso con la sostenibilidad y calidad.</p>
            </div>
            <div class="col-lg-6">
              <div class="row">

                <img src="assets/img/sus.jpeg" alt="" class="img-fluid">

                <div class="col-6 mt-4">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


  </main><!-- End #main -->

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