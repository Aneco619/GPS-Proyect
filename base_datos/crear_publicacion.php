<?php
include '../servidor.php';
include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Acceder a los datos del formulario

    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
    $fecha = $_POST['fechapub'];

    // Acceder y procesar los archivos cargados
    $imagenpub = $_FILES['imagenpub']['name'];
    $imagenprev = $_FILES['imagenprev']['name'];

    // Ruta de destino para las imágenes
    $rutaImagenPub = '../assets/img/' . $imagenpub;
    $rutaImagenPrev = '../assets/img/' . $imagenprev;

    // Mover los archivos a la ruta de destino
    move_uploaded_file($_FILES['imagenpub']['tmp_name'], $rutaImagenPub);
    move_uploaded_file($_FILES['imagenprev']['tmp_name'], $rutaImagenPrev);


    $insertQuery = "INSERT INTO nasnation.publicaciones (titulo, descripcion, categoria, fecha, imagenpub, imagenprev) 
    VALUES ('$titulo', '$descripcion', '$categoria', '$fecha', '$imagenpub', '$imagenprev')";

    $respuestaDelQuery = mysqli_query($conn, $insertQuery);

    if ($respuestaDelQuery) {
        // Inserción exitosa, puedes redirigir al usuario a una página de éxito o realizar otras acciones
        header('Location:../panel_control/template/gestor_cursos/gestionar_noticias.php');
    } else {
        // Error en la inserción, muestra un mensaje de error o realiza acciones apropiadas
        echo 'Error en la inserción de datos.';
    }
}
