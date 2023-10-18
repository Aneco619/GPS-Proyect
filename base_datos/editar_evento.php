<?php

include '../servidor.php';

if (isset($_POST)) {

    // Validar y sanitizar los datos recibidos
    $titulo = mysqli_real_escape_string($conn, $_POST['titulo']);
    $fechaEvento = mysqli_real_escape_string($conn, $_POST['fechaEvento']);
    $descripcion = mysqli_real_escape_string($conn, $_POST['descripcion']);
    $evento_id = mysqli_real_escape_string($conn, $_POST['evento_id']);

    $insertQuery = "UPDATE `eventos`
    SET `titulo` = '$titulo', `fechaEvento` = '$fechaEvento', `descripcion` = '$descripcion'
    WHERE `evento_id` = '$evento_id'";

    $respuestaDelQuery = mysqli_query($conn, $insertQuery) or die('query failed');

    if (!$respuestaDelQuery) {
        echo 'no se registró';
    }

    header('location: ../index.php');
}

?>
