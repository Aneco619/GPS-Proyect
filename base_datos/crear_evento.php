<?php

include '../servidor.php';

if (isset($_POST)) {

    $titulo = $_POST['titulo'];
    $fechaEvento = $_POST['fechaEvento'];
    $descripcion = $_POST['descripcion'];

    global $conn;
    extract($_POST);

    // Verificar si se ha seleccionado un archivo
    if (isset($_FILES['imagenEvento']) && $_FILES['imagenEvento']['error'] === UPLOAD_ERR_OK) {
        // Obtener información del archivo
        $nombreArchivo = $_FILES['imagenEvento']['name'];
        $tamanoArchivo = $_FILES['imagenEvento']['size'];
        $tmpArchivo = $_FILES['imagenEvento']['tmp_name'];

        // Leer el contenido del archivo
        $imagenSubida = fopen($tmpArchivo, 'rb');
        $binariosImagen = fread($imagenSubida, $tamanoArchivo);
        fclose($imagenSubida);

        // Escapar los datos para evitar inyección de SQL
        $titulo = mysqli_real_escape_string($conn, $titulo);
        $fechaEvento = mysqli_real_escape_string($conn, $fechaEvento);
        $descripcion = mysqli_real_escape_string($conn, $descripcion);
        $imagenFin = mysqli_real_escape_string($conn, $binariosImagen);

        $insertQuery = "INSERT INTO `eventos`(`titulo`, `fechaEvento`, `descripcion`, `imagenEvento`) 
        VALUES ('$titulo','$fechaEvento','$descripcion','$imagenFin')";

        $respuestaDelQuery = mysqli_query($conn, $insertQuery) or die('query failed');

        if (!$respuestaDelQuery) {
            echo 'no se registró';
        }

        header('location:../panel_control/template/gestor_cursos/gestionar_eventos.php');

        $url = '../index.php';
        echo "<script>window.open('$url', '_blank');</script>";
    } else {
        echo 'No se seleccionó ningún archivo';
    }
}
?>
