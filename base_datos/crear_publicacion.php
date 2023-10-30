<?php
include '../servidor.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Acceder a los datos del formulario

    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $fecha = $_POST['fechapub'];

    // Acceder y procesar los archivos cargados
    $imagenpub = $_FILES['imagenpub']['name'];
    $imagenedit = $_FILES['imagenedit']['name'];

    // Ruta de destino para las imágenes
    $rutaImagenPub = 'ruta/donde/guardar/imagenpub/' . $imagenpub;
    $rutaImagenEdit = 'ruta/donde/guardar/imagenedit/' . $imagenedit;

    // Mover los archivos a la ruta de destino
    move_uploaded_file($_FILES['imagenpub']['tmp_name'], $rutaImagenPub);
    move_uploaded_file($_FILES['imagenedit']['tmp_name'], $rutaImagenEdit);

    // Realizar la inserción en la base de datos
    global $conn;

    $insertQuery = "INSERT INTO nasnation.publicaciones (titulo, descripcion, fecha, imagenpub, imagenedit) 
    VALUES ('$titulo', '$descripcion', '$fecha', '$rutaImagenPub', '$rutaImagenEdit')";

    $respuestaDelQuery = mysqli_query($conn, $insertQuery);

    if ($respuestaDelQuery) {
        // Inserción exitosa, puedes redirigir al usuario a una página de éxito o realizar otras acciones
        header('Location:../panel_control/template/gestor_cursos/gestionar_noticias.php');
    } else {
        // Error en la inserción, muestra un mensaje de error o realiza acciones apropiadas
        echo 'Error en la inserción de datos.';
    }
}
