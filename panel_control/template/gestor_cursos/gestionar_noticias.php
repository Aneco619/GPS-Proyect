<?php
// include '../../../servidor.php';
// include '../../../base_datos/listar_noticia.php';
// include '../../../base_datos/buscar_noticia.php';

session_start();

if (!isset($_SESSION['id_usuario'])) {
  header("Location: login.php"); // Redirigir al formulario de inicio de sesión si no ha iniciado sesión
  exit();
}

// Resto del código de la página protegida
// ...
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrador</title>
  <!-- Plugin bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Plugins para una campo text area -->
  <script src="https://cdn.tiny.cloud/1/dubx098l7suxrq55o92odg5axpbe1z7ke2xa4tom5iw91b86/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: 'textarea', // Selector para todas las áreas de texto en la página
      plugins: 'textcolor code', // Plugins adicionales que desees
      toolbar: 'undo redo | styleselect | bold italic | forecolor backcolor | code', // Botones de la barra de herramientas
    });
  </script>
</head>

<body>
  <!-- Barra de navegación -->
  <nav class="navbar" style="background-color: #0070D2; height: 10vh;">
    <div class=" container-fluid">
      <a class="navbar-brand text-light" href="#">
        <img src="../assets/images/perfil-prueba.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        Administrador
      </a>
      <a class="btn btn-outline-light" href="cerrar_sesion.php">Cerrar sesión</a>
    </div>
  </nav>
  <!-- formularios -->
  <section style="margin-bottom:6rem;">
    <div class="container">
      <h1 class="pt-2">Gestión de Publicaciones</h1>
      <hr>
      <form action="../../../base_datos/crear_publicacion.php" method="POST" enctype="multipart/form-data">
        <h3 class="py-2">Agregar publicación</h3>
        <div class="mb-3">
          <label for="titulo" class="form-label">Titulo</label>
          <input type="text" class="form-control" id="titulo" name="titulo">
        </div>
        <div class="mb-3">
          <label for="descripcion" class="form-label">Descripción</label>
          <textarea id="descripcion" name="descripcion">Hello, World!</textarea>
        </div>
        <div class="mb-3">
          <label for="categoria" class="form-label">Categoria</label>
          <select class="form-select" id="categoria" name="categoria">
            <option value="Noticias">Noticias</option>
            <option value="Servicios">Servicios</option>
            <option value="Articulos">Articulos</option>
            <option value="Avisos">Avisos</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="imagenpub" class="form-label">Imagen de la publicación</label>
          <input type="file" class="form-control" id="imagenpub" name="imagenpub">
        </div>
        <div class="mb-3">
          <label for="imagenedit" class="form-label">Imagen previa</label>
          <input type="file" class="form-control" id="imagenprev" name="imagenprev">
        </div>
        <div class="mb-3">
          <label for="fechapub" class="form-label">Fecha de la publicación</label>
          <input type="date" class="form-control" id="fechapub" name="fechapub" value="<?= date('Y-m-d', strtotime('-1 day')); ?>" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </section>


  <!-- partial -->

  <footer id="footer" style="background-color: #F2FBFD; padding:4rem;">
    <div class="footer-top">
      <div class="container">
        <div class="footer-info">
          <center>
            <h3>© NasNation Todos los derechos reservados.</h3>
          </center>
          <div class="credits">
            <!-- Diseñado por <a href="https://www.linkedin.com/in/carlos-calder%C3%B3n-pi%C3%B1a-17a3b214a/">Carlos Calderón,</a>
            <a href="https://www.facebook.com/ninfaguadalupe.zamudioguerrero.7">Ninfa Zamudio,</a>
            <a href="https://www.facebook.com/aneco619">Andrés García,</a>
            <a href="https://www.facebook.com/jareth.calderoncornelio">Jareth Cornelio.</a> -->
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Custom js for this page -->
  <script src="assets/js/dashboard.js"></script>
  <!-- End custom js for this page -->

</body>

</html>