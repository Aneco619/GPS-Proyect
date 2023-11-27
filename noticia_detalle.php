<?php
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$base_datos = 'nasnation';

$conn = mysqli_connect($host, $usuario, $contrasena, $base_datos);

if (!$conn) {
    die('Error al conectar con la base de datos: ' . mysqli_connect_error());
}


?>

<?php
include 'servidor.php';
// include 'base_datos/listar_evento.php';
// include 'base_datos/listar_noticia.php';
// include 'base_datos/buscar_noticia.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sueños, Esperanzas y Risas. A.C. / Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo/Logo3.png" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@200;500&family=IBM+Plex+Sans:ital,wght@0,300;0,500;0,700;1,300;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS Files -->
    <link href="assets/css/variables.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styleslider.css">
    <link rel="stylesheet" href="assets/css/colaboradore.css">

    <style>
        /* Estilos personalizados */
        .img-rectangular {
            width: 100%;
            /* Ancho del contenedor */
            height: auto;
            /* Mantener la proporción original */
            max-height: 300px;
            /* Altura máxima para evitar que sea demasiado alta */
            object-fit: cover;
            /* Cubrir el área, recortando si es necesario */
        }
    </style>

</head>

<body>
    <?php
    // Aqui se importa el header
    require_once 'header.php';
    ?>

    <section class="container mt-5">
        <?php
        // Verificar si se proporcionó un ID en la URL
        if (isset($_GET['id'])) {
            // Obtener el ID de la URL
            $id = $_GET['id'];

            // Consulta para obtener la publicación con el ID proporcionado
            $sql = "SELECT * FROM publicaciones WHERE id = $id";
            $result = $conn->query($sql);

            // Mostrar la publicación si se encontró
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
        ?>
                <div class="card mt-5 mx-auto" style="max-width: 1000px;">
                    <div class="card-body">
                        <p class="card-text"><?php echo $row['fecha']; ?></p>
                        <h2 class="card-title"><?php echo $row['titulo']; ?></h2>

                        <!-- Sección para la imagen principal -->
                        <div class="row">
                            <div>
                                <img src="./assets/img/<?php echo $row['imagenpub']; ?>" class="img-rectangular" alt="Imagen de la publicacion">
                            </div>
                        </div>

                        <!-- Sección para la descripción -->
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <p class="card-text"><?php echo $row['descripcion']; ?></p>
                            </div>
                        </div>

                        <!-- Sección para la imagen previa -->
                        <div class="row mt-3">
                            <div>
                                <img src="./assets/img/<?php echo $row['imagenprev']; ?>" class="img-fluid rounded" alt='Otra imagen de la publicación'>
                            </div>
                        </div>
                    </div>
                </div>
        <?php } else {
                echo "No se encontró la publicación.";
            }
        } else {
            echo "No se proporcionó un ID.";
        }
        ?>
    </section>

    <section class="p-0 m-0">
        <?php
        require_once 'footer.php';
        ?>
    </section>

</body>

</html>