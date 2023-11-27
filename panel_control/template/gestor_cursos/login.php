<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>
    /* Estilos adicionales */
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-color: #f8f9fa;
    }

    .card {
        width: 800px;
    }
</style>

<body>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Ingrese sus credenciales</h5>
            <form action="validar_login.php" method="POST">
                <div class="form-group p-3">
                    <input type="text" name="usuario" class="form-control" placeholder="Nombre de usuario" required>
                </div>
                <div class="form-group p-3">
                    <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" required>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                </div>
            </form>
        </div>
        <?php
        if (isset($_GET['error']) && $_GET['error'] == 1) {
            echo '<div class="alert alert-danger m-3" role="alert">Inicio de sesión fallido. Verifica tus credenciales.</div>';
        }
        ?>
    </div>
</body>

</html>