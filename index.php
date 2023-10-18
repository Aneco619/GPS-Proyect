<?php 
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_datos = 'sueños_esperanzas_y_risas';

$conexion = mysqli_connect($host, $usuario, $contrasena, $base_datos);

if (!$conexion) {
    die('Error al conectar con la base de datos: ' . mysqli_connect_error());
}

?>

<?php
  include 'servidor.php';
  include 'base_datos/listar_evento.php';
  include 'base_datos/listar_noticia.php';
  include 'base_datos/buscar_noticia.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sueños, Esperanzas y Risas. A.C. / Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo/Logo3.png" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@200;500&family=IBM+Plex+Sans:ital,wght@0,300;0,500;0,700;1,300;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styleslider.css">
  <link rel="stylesheet" href="assets/css/colaboradore.css">

</head>
<body>
  <?php
    require_once 'header.php';
  ?>

  <main id="main">
    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/utilesninos.jpg');">
                    <div class="img-bg-inner">
                      <h2>Entrega de útiles escolares para los niños</h2>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/arbolitos1.jpg');">
                    <div class="img-bg-inner">
                      <h2>Sembrando Oxígeno</h2>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/ninospaseo.jpg');">
                    <div class="img-bg-inner">
                      <h2>Un paseo con los niños del Orfanato "Ciudad de los niños Morelia"</h2>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('assets/img/estatal.jpg');">
                    <div class="img-bg-inner">
                    <h2>"Encuentro estatal en pro de la juventud "</h2>
                    </div>
                  </a>
                </div>
              </div>
              <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
              </div>
              <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
              </div>

              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Hero Slider Section -->
    <hr>
    <br>
    <!-- ======= Categoría ======= -->
<section id="popular-courses" class="courses">
  <div class="container" data-aos="fade-up">

  <div class="section-header d-flex justify-content-between align-items-center mb-5">
      <h2 id=segundP>Servicio Social</h2>
      <div class="more"></div>
    </div>
    <div class="row" data-aos="zoom-in" data-aos-delay="100">

      <!-- Mostrar noticias de la categoría "Interés Público" -->
      <?php
        $query_servicioSocial = "SELECT * FROM noticias WHERE categoria = 'SERVICIO SOCIAL'";
        $result_servicioSocial = mysqli_query($conexion, $query_servicioSocial);

        while ($row_servicioSocial = mysqli_fetch_array($result_servicioSocial)) {
      ?>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="course-item">
            <a href="noticia_detalle.php?id=<?php echo $row_servicioSocial['noticia_id'] ?>">
              <img src="data:image;base64,<?php echo base64_encode($row_servicioSocial['imagen']); ?>" class="img-fluid">
              <div class="course-content">
                <br>
                <div class="post-meta"><span class="date"><?php echo $row_servicioSocial['categoria'] ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $row_servicioSocial['fecha'] ?></span></div>
                <h3><?php echo $row_servicioSocial['titulo'] ?></h3>
                <p><?php echo $row_servicioSocial['descripcion'] ?></p>
              </a>
              <div class="trainer d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center author">
                  <div class="photo"><img src="data:image;base64,<?php echo base64_encode($row_servicioSocial['imagen_mentor']); ?>" style="border-radius: 50%; width: 100px; height: auto;"></div>
                  <div class="name"><span><?php echo $row_servicioSocial['nombre_mentor'] ?></span></div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->
      <?php
        }
      ?>

    <div class="section-header d-flex justify-content-between align-items-center mb-5">
      <h2 id=primerp>Interés Público</h2>
      <div class="more"></div>
    </div>
    <div class="row" data-aos="zoom-in" data-aos-delay="100">

      <!-- Mostrar noticias de la categoría "Interés Público" -->
      <?php
        $query_interesPublico = "SELECT * FROM noticias WHERE categoria = 'INTERÉS PÚBLICO'";
        $result_interesPublico = mysqli_query($conexion, $query_interesPublico);

        while ($row_interesPublico = mysqli_fetch_array($result_interesPublico)) {
      ?>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="course-item">
            <a href="noticia_detalle.php?id=<?php echo $row_interesPublico['noticia_id'] ?>">
              <img src="data:image;base64,<?php echo base64_encode($row_interesPublico['imagen']); ?>" class="img-fluid">
              <div class="course-content">
                <br>
                <div class="post-meta"><span class="date"><?php echo $row_interesPublico['categoria'] ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $row_interesPublico['fecha'] ?></span></div>
                <h3><?php echo $row_interesPublico['titulo'] ?></h3>
                <p><?php echo $row_interesPublico['descripcion'] ?></p>
              </a>
              <div class="trainer d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center author">
                  <div class="photo"><img src="data:image;base64,<?php echo base64_encode($row_interesPublico['imagen_mentor']); ?>" style="border-radius: 50%; width: 100px; height: auto;"></div>
                  <div class="name"><span><?php echo $row_interesPublico['nombre_mentor'] ?></span></div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->
      <?php
        }
      ?>
      
      <div class="section-header d-flex justify-content-between align-items-center mb-5">
      <h2 id=ser>S E R</h2>
      <div class="more"></div>
    </div>
      <!-- Mostrar noticias de la categoría "S E R" -->
      <?php
        $query_ser = "SELECT * FROM noticias WHERE categoria = 'S E R'";
        $result_ser = mysqli_query($conexion, $query_ser);

        while ($row_ser = mysqli_fetch_array($result_ser)) {
      ?>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="course-item">
            <a href="noticia_detalle.php?id=<?php echo $row_ser['noticia_id'] ?>">
              <img src="data:image;base64,<?php echo base64_encode($row_ser['imagen']); ?>" class="img-fluid">
              <div class="course-content">
                <br>
                <div class="post-meta"><span class="date"><?php echo $row_ser['categoria'] ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $row_ser['fecha'] ?></span></div>
                <h3><?php echo $row_ser['titulo'] ?></h3>
                <p><?php echo $row_ser['descripcion'] ?></p>
              </a>
              <div class="trainer d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center author">
                  <div class="photo"><img src="data:image;base64,<?php echo base64_encode($row_ser['imagen_mentor']); ?>" style="border-radius: 50%; width: 100px; height: auto;"></div>
                  <div class="name"><span><?php echo $row_ser['nombre_mentor'] ?></span></div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->
      <?php
        }
      ?>
      <div class="section-header d-flex justify-content-between align-items-center mb-5">
      <h2 id=otross>Otros</h2>
      <div class="more"></div>
    </div>
      <!-- Mostrar noticias de la categoría "Servicio Social" -->
      <?php
        $query_otros = "SELECT * FROM noticias WHERE categoria = 'OTROS'";
        $result_otros = mysqli_query($conexion, $query_otros);

        while ($row_otros = mysqli_fetch_array($result_otros)) {
      ?>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="course-item">
            <a href="noticia_detalle.php?id=<?php echo $row_otros['noticia_id'] ?>">
              <img src="data:image;base64,<?php echo base64_encode($row_otros['imagen']); ?>" class="img-fluid">
              <div class="course-content">
                <br>
                <div class="post-meta"><span class="date"><?php echo $row_otros['categoria'] ?></span> <span class="mx-1">&bullet;</span> <span><?php echo $row_otros['fecha'] ?></span></div>
                <h3><?php echo $row_otros['titulo'] ?></h3>
                <p><?php echo $row_otros['descripcion'] ?></p>
              </a>
              <div class="trainer d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center author">
                  <div class="photo"><img src="data:image;base64,<?php echo base64_encode($row_otros['imagen_mentor']); ?>" style="border-radius: 50%; width: 100px; height: auto;"></div>
                  <div class="name"><span><?php echo $row_otros['nombre_mentor'] ?></span></div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->
      <?php
        }
      ?>

    </div>
  </div>
</section><!-- End Categoría -->


  </main><!-- End #main -->
</div>
</div>
</section><!-- End Contact Section -->

<?php
  require_once 'footer.php';
?>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<script src="assets/js/slider2.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</body>
</html>
