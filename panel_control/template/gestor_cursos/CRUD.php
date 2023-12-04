<?php
// include '../../../servidor.php';
// include '../../../base_datos/listar_noticia.php';
// include '../../../base_datos/buscar_noticia.php';

session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: login.php"); // Redirigir al formulario de inicio de sesión si no ha iniciado sesión
    exit();
}

// Resto del código de la página protegida
// ...
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <!-- Plugin bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Plugins para una campo text area -->
    <script src="https://cdn.tiny.cloud/1/dubx098l7suxrq55o92odg5axpbe1z7ke2xa4tom5iw91b86/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea', // Selector para todas las áreas de texto en la página
            plugins: 'textcolor code', // Plugins adicionales que desees
            toolbar: 'undo redo | styleselect | bold italic | forecolor backcolor | code', // Botones de la barra de herramientas
        });
    </script>
</head>

<body>
    <!-- Barra de navegación -->
    <nav class="navbar" style="background-color: #0070D2; height: 10vh;">
        <div class=" container-fluid">
            <a class="navbar-brand text-light" href="#">
                <img src="../assets/images/perfil-prueba.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Administrador
            </a>
            <a class="navbar-brand text-light" href="./CRUD.php">Gestionar publicaciones
            </a>
            <a class="navbar-brand text-light" href="./gestionar_noticias.php">Crear publicacion
            </a>
            <a class="btn btn-outline-light" href="cerrar_sesion.php">Cerrar sesión</a>
        </div>
    </nav>
    <!-- formularios -->
    <section style="margin-bottom:6rem;">

        <div class="container mt-5">
            <!-- Tabla para mostrar los registros -->
            <?php if (isset($_GET['mensaje'])) {
                $mensaje = $_GET['mensaje'];
                echo '<div class="alert alert-success" role="alert">' . htmlspecialchars($mensaje) . '</div>';
            } ?>


            <table class="table">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Descripción</th>
                        <th>Categoría</th>
                        <th>Fecha</th>
                        <th>Imagen 1</th>
                        <th>Imagen 2</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Aquí deberías tener un código PHP que recupere los datos de la base de datos
                    // y los muestre en la tabla
                    // Por ejemplo:
                    $conexion = mysqli_connect("localhost", "root", "", "nasnation");
                    $consulta = "SELECT * FROM publicaciones";
                    $resultado = mysqli_query($conexion, $consulta);

                    while ($fila = mysqli_fetch_assoc($resultado)) {
                    ?>
                        <tr>
                            <td><?php echo "{$fila['titulo']}" ?></td>
                            <td><?php echo "{$fila['descripcion']}" ?></td>
                            <td><?php echo "{$fila['categoria']}" ?></td>
                            <td><?php echo "{$fila['fecha']}" ?></td>
                            <td><?php echo "{$fila['imagenpub']}" ?></td>
                            <td><?php echo "{$fila['imagenprev']}" ?></td>
                            <!-- Botón Editar -->
                            <td>
                                <a href="editar.php?id=<?php echo "{$fila['id']}" ?> " class=" btn btn-info">Editar</a>
                            </td>
                            <!-- Botón Eliminar -->
                            <td>
                                <a href="eliminar.php?id=<?php echo "{$fila['id']}" ?> " class=" btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <div>
                <?php
                // Tu código para mostrar la tabla y otros elementos del CRUD...
                ?>
            </div>
        </div>

        <!-- Modal para agregar un nuevo registro -->
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
            <!-- Contenido del modal -->
            <!-- Incluir campos para ingresar datos y botones para guardar y cerrar -->
        </div>
    </section>


    <!-- partial -->

    <footer id="footer" style="background-color: #F2FBFD; padding:4rem;">
        <div class="footer-top">
            <div class="container">
                <div class="footer-info">
                    <center>
                        <h3>© NasNation Todos los derechos reservados.</h3>
                    </center>
                    <div class="credits">
                        <!-- Diseñado por <a href="https://www.linkedin.com/in/carlos-calder%C3%B3n-pi%C3%B1a-17a3b214a/">Carlos Calderón,</a>
            <a href="https://www.facebook.com/ninfaguadalupe.zamudioguerrero.7">Ninfa Zamudio,</a>
            <a href="https://www.facebook.com/aneco619">Andrés García,</a>
            <a href="https://www.facebook.com/jareth.calderoncornelio">Jareth Cornelio.</a> -->
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->
</body>

</html>