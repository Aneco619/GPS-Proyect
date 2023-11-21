<?php
session_start();

// Eliminar las variables de sesión
$_SESSION = array();

// Destruir la sesión
session_destroy();

// Redirigir a la página después de cerrar sesión
header("Location: login.php");
exit();
