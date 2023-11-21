<?php
include 'config.php';
$selectQuery = "SELECT * FROM eventos";
$result_eventos = mysqli_query($conn, $selectQuery);
