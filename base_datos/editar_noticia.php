<?php

include '../servidor.php';

if (isset($_POST)) {

    // Validar y sanitizar los datos recibidos
    $titulo = mysqli_real_escape_string($conn, $_POST['titulo']);
    $descripcion = mysqli_real_escape_string($conn, $_POST['descripcion']);
    $categoria = mysqli_real_escape_string($conn, $_POST['categoria']);
    $fecha = mysqli_real_escape_string($conn, $_POST['fecha']);
    $nombre_mentor = mysqli_real_escape_string($conn, $_POST['nombre_mentor']);
    $noticia_id = mysqli_real_escape_string($conn, $_POST['noticia_id']);

    $insertQuery = "UPDATE `noticias`
    SET `titulo` = '$titulo', `descripcion` = '$descripcion',
    `categoria` = '$categoria', `fecha` = '$fecha', `nombre_mentor` = '$nombre_mentor'
    WHERE `noticia_id` = '$noticia_id'";

    $respuestaDelQuery = mysqli_query($conn, $insertQuery) or die('query failed');

    if (!$respuestaDelQuery) {
        echo 'no se registró';
    }

    header('location: ../index.php');
}

?>
