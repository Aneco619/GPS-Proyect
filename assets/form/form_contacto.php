<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];

  $to = "nasnationcorporacion@gmail.com"; //Aquí hay q poner el correo jeje
  $subject = "Nuevo mensaje de $nombre";
  $message = "Nombre: $nombre\nCorreo Electrónico: $email\nMensaje:\n$mensaje";
  ini_set("SMTP", "smtp.gmail.com");
  ini_set("smtp_port", "587");


  mail($to, $subject, $message);

  echo "Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.";
} else {
  echo "Hubo un error al procesar tu solicitud. Por favor, inténtalo de nuevo más tarde.";
}
