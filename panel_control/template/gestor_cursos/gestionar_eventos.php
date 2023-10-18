<?php
include '../../../servidor.php';
include '../../../base_datos/listar_evento.php';
include '../../../base_datos/buscar_evento.php';
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
              <h4 class="card-title mb-1">Gestión de Eventos</h4>
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
                      <h3>Agregar Evento</h3>
                      <form action="../../../base_datos/crear_evento.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                          <div class="col">
                            <label for="">Titulo</label>
                            <input type="text" id="titulo" name="titulo" class="form-control">
                            <label for="">Fecha del Evento</label>
                            <input type="date" name="fechaEvento" class="form-control">
                            <label for="">Descripcion</label>
                            <input type="text" name="descripcion" class="form-control">
                            <label for="">Imagen del Evento</label>
                            <input type="file" class="form-control-file" name="imagenEvento" id="imagenEvento" required>
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
                            <th scope="col">Titulo</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Descripcion</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php while ($row = mysqli_fetch_array($result_eventos)) { ?>
                            <tr>
                              <th scope="row"><?php echo $row['evento_id'] ?></th>
                              <td><?php echo $row['titulo'] ?></td>
                              <td><?php echo $row['fechaEvento'] ?></td>
                              <td>
                                <div class="description-container"><?php echo $row['descripcion'] ?></div>
                              </td>
                              <td>
                                <form action="../../../base_datos/buscar_evento.php" method="POST">
                                  <input type="text" value="<?php echo $row['evento_id'] ?>" hidden name="evento_id">
                                  <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</button><br><br>
                                </form>
                                <form action="../../../base_datos/eliminar_evento.php" method="POST">
                                  <input type="text" value="<?php echo $row['evento_id'] ?>" hidden name="evento_id">
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
            <h3>© Copyright Sueños, Esperanzas, y Risas. A.C.
              All Rights Reserved.</h3>
          </center>
          <div class="credits">
            Designed by <a href="https://www.linkedin.com/in/carlos-calder%C3%B3n-pi%C3%B1a-17a3b214a/">Carlos Calderón, </a>
            <a href="https://www.facebook.com/ninfaguadalupe.zamudioguerrero.7"> Ninfa Zamudio, </a>
            <a href="https://www.facebook.com/aneco619"> Andres Garcia, </a>
            <a href="https://www.facebook.com/jareth.calderoncornelio"> Jareth Cornelio.</a>
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
