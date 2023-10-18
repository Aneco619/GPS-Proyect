<?php
include '../../../servidor.php';
include '../../../base_datos/listar_noticia.php';
include '../../../base_datos/buscar_noticia.php';
include '../includes/control_header.php';
?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-row justify-content-between">
              <h4 class="card-title mb-1">Gestión de Publicaciones</h4>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="preview-list">
                  <div class="preview-item border-bottom">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-primary">
                        <i class="mdi mdi-file-document"></i>
                      </div>
                    </div>
                    <div class="container">
                      <h3>Agregar Publicación</h3>
                      <form action="../../../base_datos/crear_noticia.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                          <div class="col">
                            <label for="">Titulo</label>
                            <input type="text" id="titulo" name="titulo" class="form-control">
                            <label for="">Descripcion</label>
                            <input type="text" name="descripcion" class="form-control">
                            <label for="">Imagen de la Publicación</label>
                            <input type="file" class="form-control-file" name="imagen" id="imagen" required>
                            <label for="">Categoria</label>
                            <input type="text" name="categoria" class="form-control">
                            <label for="">Imagen del editor</label>
                            <input type="file" class="form-control-file" name="imagen_mentor" id="imagen_mentor" required>
                            <label for="">Nombre del editor</label>
                            <input type="text" name="nombre_mentor" class="form-control">
                            <label for="">Fecha</label>
                            <input type="date" name="fecha" class="form-control">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="container">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#id</th>
                            <th scope="col">Nombre del editor</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Fecha</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php while ($row = mysqli_fetch_array($result_noticias)) { ?>
                            <tr>
                              <th scope="row"><?php echo $row['noticia_id'] ?></th>
                              <td><?php echo $row['nombre_mentor'] ?></td>
                              <td><?php echo $row['titulo'] ?></td>
                              <td><?php echo $row['fecha'] ?></td>
                              <td>
                                <form action="../../../base_datos/buscar_noticia.php" method="POST">
                                  <input type="text" value="<?php echo $row['noticia_id'] ?>" hidden name="noticia_id">
                                  <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</button> <br><br>
                                </form>
                                <form action="../../../base_datos/eliminar_noticia.php" method="POST">
                                  <input type="text" value="<?php echo $row['noticia_id'] ?>" hidden name="noticia_id">
                                  <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                              </td>
                            </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="footer-info">
          <center>
            <h3>© Derechos de autor Sueños, Esperanzas y Risas A.C. Todos los derechos reservados.</h3>
          </center>
          <div class="credits">
            Diseñado por <a href="https://www.linkedin.com/in/carlos-calder%C3%B3n-pi%C3%B1a-17a3b214a/">Carlos Calderón,</a>
            <a href="https://www.facebook.com/ninfaguadalupe.zamudioguerrero.7">Ninfa Zamudio,</a>
            <a href="https://www.facebook.com/aneco619">Andrés García,</a>
            <a href="https://www.facebook.com/jareth.calderoncornelio">Jareth Cornelio.</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
  <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- plugins:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="assets/vendors/chart.js/Chart.min.js"></script>
<script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/misc.js"></script>
<script src="assets/js/settings.js"></script>
<script src="assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="assets/js/dashboard.js"></script>
<!-- End custom js for this page -->
</body>

</html>
