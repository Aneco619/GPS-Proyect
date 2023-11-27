<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Conectarte a la base de datos y realizar la eliminación
    $conexion = mysqli_connect("localhost", "id21582411_nasadmin", "GuidoD890#", "id21582411_nasnation");

    // Verificar la conexión
    if (!$conexion) {
        die("Error al conectar: " . mysqli_connect_error());
    }

    // Preparar la consulta para eliminar el registro con el ID proporcionado
    $consulta = "DELETE FROM publicaciones WHERE id = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Si se elimina exitosamente, redirigir a CRUD.php con un mensaje de éxito
        header("Location: CRUD.php?mensaje=Registro eliminado exitosamente");
        exit();
    } else {
        // Si falla, redirigir a CRUD.php con un mensaje de error
        header("Location: CRUD.php?mensaje=Error al eliminar el registro");
        exit();
    }

    mysqli_close($conexion);
} else {
    // Si no se proporciona un ID válido, redirigir a CRUD.php con un mensaje de advertencia
    header("Location: CRUD.php?mensaje=No se proporcionó un ID válido para eliminar");
    exit();
}
