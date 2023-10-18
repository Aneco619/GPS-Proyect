<?php

include '../servidor.php';
$evento_id = $_POST['evento_id'];

$query = "DELETE FROM eventos WHERE evento_id = '$evento_id'";
$respuestaQuery = mysqli_query($conn, $query);

header('location:../panel_control/template/gestor_cursos/gestionar_eventos.php');
?>
