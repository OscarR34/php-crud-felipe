<?php include_once('conexion.php'); ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inicio</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">
            <div class="row my-4">
                <div class="col-12 text-center">
                    <h1>Colegio</h1>
                </div>
            </div>

            <div class="row mb-4 justify-content-center">
                <div class="col-3">
                    <form action="" method="POST">
                        <div class="input-group">
                            <input name="buscar" type="number" class="form-control" placeholder="# de documento">
                            <button class="btn btn-primary" type="submit">Buscar</button>
                        </div>
                        <div class="text-center my-1">
                            <a class="text-decoration-none" href="01-registrar.php">Registrar profesor</a>
                        </div>
                    </form>
                </div>
            </div>

            <?php
                if(empty($_POST['buscar'])){
                    $consulta = $conexion->query("SELECT * FROM profesores");
                }

                if(isset($_POST['buscar'])){
                    $busqueda = $_POST['buscar'];

                    $consulta = $conexion->query("SELECT * FROM profesores WHERE Documento LIKE '%$busqueda%' ORDER BY Documento ASC");
                }
            ?>
                <table class="table table-striped shadow">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Documento</th>
                            <th>Curso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($profe = $consulta->fetch_array()){
                            $nombre = $profe['Nombre'];
                            $documento = $profe['Documento'];
                            $curso = $profe['Curso'];
                        ?>

                        <tr>
                            <td><?php echo $nombre;?></td>
                            <td><?php echo $documento;?></td>
                            <td><?php echo $curso;?></td>
                            <td>
                                <!-- para editar el profesor -->
                                <a class="btn btn-warning" href="03-editar.php?
                                nombre=<?php echo $nombre;?>&
                                documento=<?php echo $documento;?>&
                                curso=<?php echo $curso;?>" title="Editar">
                                    <i>Editar</i>
                                </a>
                            </td>
                            <td>
                                <!-- para elimiar el profesor -->
                                <a class="btn btn-danger" href="05-eliminar.php?
                                documento=<?php echo $documento;?>" title="Eliminar">
                                    <i>Eliminar</i>
                                </a>
                            </td>
                        </tr>
                <?php
                }
                ?>     
                    </tbody>
                </table>

                
        </div>






        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    </body>
</html>