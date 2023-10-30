<section style="background-color: #F2FBFD;">
    <div class="container">
        <br>
        <h3>Modificar datos</h3>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Nombre del editor</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($result_noticias)) { ?>
                    <tr>
                        <th scope="row"><?php echo $row['noticia_id'] ?></th>
                        <td><?php echo $row['nombre_mentor'] ?></td>
                        <td><?php echo $row['titulo'] ?></td>
                        <td><?php echo $row['fecha'] ?></td>
                        <td>
                            <form action="../../../base_datos/buscar_noticia.php" method="POST">
                                <input type="text" value="<?php echo $row['noticia_id'] ?>" hidden name="noticia_id">
                                <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</button> <br><br>
                            </form>
                            <form action="../../../base_datos/eliminar_noticia.php" method="POST">
                                <input type="text" value="<?php echo $row['noticia_id'] ?>" hidden name="noticia_id">
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
</section>