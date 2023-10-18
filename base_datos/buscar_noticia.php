<?php
$noticiaRow = null;
$dbconn = mysqli_connect('localhost','root','','sueños_esperanzas_y_risas') or die('Conexión fallida');

if ($_POST) {
    $noticia_id = $_POST['noticia_id'];
    $selectQuery = "SELECT * FROM noticias WHERE noticia_id = '$noticia_id'";
    $resultNoticia = mysqli_query($dbconn, $selectQuery);

    if (mysqli_num_rows($resultNoticia) == 1) {
        $noticiaRow = mysqli_fetch_array($resultNoticia);
    }
}
?>

<?php if ($noticiaRow) { ?>
    <form action="editar_noticia.php" method="POST">
        <div class="row">
            <div class="col">
                <input type="text" value="<?php echo $noticiaRow['noticia_id'] ?>" name="noticia_id" hidden>

                <label for="">Titulo</label>
                <input type="text" id="titulo" name="titulo" class="form-control" value="<?php echo $noticiaRow['titulo'] ?>">

                <label for="">Descripcion</label>
                <input type="text" name="descripcion" class="form-control" value="<?php echo $noticiaRow['descripcion'] ?>">

                <label for="">Categoria</label>
                <input type="text" name="categoria" class="form-control" value="<?php echo $noticiaRow['categoria'] ?>">

                <label for="">Fecha</label>
                <input type="date" name="fecha" class="form-control" value="<?php echo $noticiaRow['fecha'] ?>">

                <!-- <label for="">Imagen mentor</label>
                <input type="file" name="imagen_mentor" class="form-control" value="<?php echo $noticiaRow['imagen_mentor'] ?>"> -->

                <label for="">Nombre mentor</label>
                <input type="text" name="nombre_mentor" class="form-control" value="<?php echo $noticiaRow['nombre_mentor'] ?>">

                <!-- <label for="">Imagen de la Publicación</label>
                <input type="file" name="imagen" class="form-control" value="<?php echo $noticiaRow['imagen'] ?>"> -->

                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
<?php } ?>
