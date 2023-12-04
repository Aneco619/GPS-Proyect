<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
    $fecha = $_POST['fechapub'];

    // Acceder y procesar los archivos cargados (imágenes)
    $imagenpub = $_FILES['imagenpub']['name'];
    $imagenprev = $_FILES['imagenprev']['name'];

    // Ruta de destino para las imágenes
    $rutaImagenPub = '../../../assets/img/' . $imagenpub;
    $rutaImagenPrev = '../../../assets/img/' . $imagenprev;

    // Mover los archivos a la ruta de destino
    move_uploaded_file($_FILES['imagenpub']['tmp_name'], $rutaImagenPub);
    move_uploaded_file($_FILES['imagenprev']['tmp_name'], $rutaImagenPrev);

    // Conectar a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "nasnation");

    // Verificar la conexión
    if (!$conexion) {
        die("La conexión a la base de datos falló: " . mysqli_connect_error());
    }

    // Actualizar la publicación en la base de datos
    $sql = "UPDATE publicaciones SET titulo='$titulo', descripcion='$descripcion', categoria='$categoria', imagenpub='$imagenpub', imagenprev='$imagenprev', fecha='$fecha' WHERE id=$id";

    if (mysqli_query($conexion, $sql)) {
        // Mensaje de confirmación
        $mensaje = "La publicación se actualizó correctamente";

        // Redireccionamiento con el mensaje de confirmación
        header("Location: CRUD.php?mensaje=" . urlencode($mensaje));
        exit();
    } else {
        echo "Error al actualizar la publicación: " . mysqli_error($conexion);
    }

    // Cerrar la conexión
    mysqli_close($conexion);
}
