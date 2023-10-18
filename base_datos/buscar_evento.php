<?php
$eventoRow = null;
$dbconn = mysqli_connect('localhost','root','','sueños_esperanzas_y_risas') or die('Conexión fallida');

if ($_POST) {
    $evento_id = $_POST['evento_id'];
    $selectQuery = "SELECT * FROM eventos WHERE evento_id = '$evento_id'";
    $resultEvento = mysqli_query($dbconn, $selectQuery);

    if (mysqli_num_rows($resultEvento) == 1) {
        $eventoRow = mysqli_fetch_array($resultEvento);
    }
}
?>

<?php if ($eventoRow) { ?>
    <form action="editar_evento.php" method="POST">
        <div class="row">
            <div class="col">
                <input type="text" value="<?php echo $eventoRow['evento_id'] ?>" name="evento_id" hidden>

                <label for="">Titulo</label>
                <input type="text" id="titulo" name="titulo" class="form-control" value="<?php echo $eventoRow['titulo'] ?>">

                <label for="">Fecha</label>
                <input type="date" name="fechaEvento" class="form-control" value="<?php echo $eventoRow['fechaEvento'] ?>">

                <label for="">Descripcion</label>
                <input type="text" name="descripcion" class="form-control" value="<?php echo $eventoRow['descripcion'] ?>">

                <!-- <label for="">Imagen del evento</label>
                <input type="file" name="imagenEvento" class="form-control" value="<?php echo $eventoRow['imagenEvento'] ?>"> -->

                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
<?php } ?>
