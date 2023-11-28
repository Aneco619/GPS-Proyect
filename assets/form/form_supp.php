<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $consulta = $_POST["consulta"];
    $categoria = $_POST["categoria"];
    $telefono = $_POST["telefono"];

    $destinatario = "nasnationcorporacion@gmail.com"; // Aquí hay q poner el correo jeje
    $asunto = "Nueva consulta de SOPORTE de $nombre";

    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Email: $email\n";
    $mensaje .= "Consulta: $consulta\n";
    $mensaje .= "Categoría: $categoria\n";
    $mensaje .= "Teléfono: $telefono\n";

    $headers = "From: $email";

    if (mail($destinatario, $asunto, $mensaje)) {
        echo "Tu consulta se ha enviado con éxito.";
    } else {
        echo "Hubo un problema al enviar la consulta. Por favor, inténtalo de nuevo.";
    }
}
