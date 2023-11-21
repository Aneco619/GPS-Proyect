<?php
session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'nasnation'
) or die('Conexión Fallida');

// Obtener datos del formulario de inicio de sesión
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Consulta para buscar al usuario en la base de datos
$query = "SELECT id, usuario FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
$resultado = mysqli_query($conn, $query);

if (mysqli_num_rows($resultado) == 1) {
    // Inicio de sesión exitoso
    $usuario_data = mysqli_fetch_assoc($resultado);

    // Almacenar información del usuario en la sesión
    $_SESSION['id_usuario'] = $usuario_data['id'];
    $_SESSION['nombre_usuario'] = $usuario_data['nombre_usuario'];

    header("Location: ./gestionar_noticias.php"); // Redirigir a la página protegida
    exit();
} else {
    // Inicio de sesión fallido
    header("Location: login.php?error=1"); // Redirigir al formulario de inicio de sesión con un mensaje de error
    exit();
}
?>.