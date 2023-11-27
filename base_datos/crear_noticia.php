<?php

include '../servidor.php';

if (isset($_POST)) {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
    $fecha = $_POST['fecha'];

    global $conn;
    extract($_POST);

    // Variables donde se almacenan los valores de nuestra imagen
    $tamanoArchvio = $_FILES['imagen']['size'];
    $tamanoArchvio1 = $_FILES['imagen_mentor']['size'];

    // Se realiza la lectura de la imagen
    $imagenSubida = fopen($_FILES['imagen']['tmp_name'], 'r');
    $binariosImagen = fread($imagenSubida, $tamanoArchvio);

    $imagenSubida1 = fopen($_FILES['imagen_mentor']['tmp_name'], 'r');
    $binariosImagen1 = fread($imagenSubida1, $tamanoArchvio1);

    // Se realiza la consulta correspondiente para guardar los datos
    $imagenFin = mysqli_escape_string($conn, $binariosImagen);
    $imagenFin1 = mysqli_escape_string($conn, $binariosImagen1);
    $nombre_mentor = $_POST['nombre_mentor'];

    $insertQuery = "INSERT INTO `noticias`(`titulo`, `descripcion`, `categoria`, `fecha`, `imagen_mentor`, `nombre_mentor`, `imagen`) 
    VALUES ('$titulo','$descripcion','$categoria','$fecha','$imagenFin1','$nombre_mentor','$imagenFin')";

    $respuestaDelQuery = mysqli_query($conn, $insertQuery) or die('query failed');

    if (!$respuestaDelQuery) {
        echo 'no se registro';
    }

    header('location:../panel_control/template/gestor_cursos/gestionar_noticias.php');

    $url = '../index.php';
    echo "<script>window.open('$url', '_blank');</script>";
}
