<?php

include '../servidor.php';
$noticia_id = $_POST['noticia_id'];

$query = "DELETE FROM noticias WHERE noticia_id = '$noticia_id'";
$respuestaQuery = mysqli_query($conn, $query);

header('location:../panel_control/template/gestor_cursos/gestionar_noticias.php');
?>