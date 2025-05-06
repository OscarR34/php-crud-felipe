<?php include_once('conexion.php'); ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registrar profesor</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    </head>
    <body>
        <?php
            $nombre = $_POST['nombre'];
            $documento = $_POST['documento'];
            $curso = $_POST['curso'];

            $conexion->query("INSERT INTO profesores (Nombre, Documento, Curso) VALUES ('$nombre', '$documento', '$curso')");
        ?>

        <div class="container">
            <div class="row my-4">
                <div class="col-12 text-center">
                    <h2>Se realizo el registro correctamente.</h2>
                    <p>Dtos registrados:</p>
                </div>
            </div>

            <div class="row mb-3 justify-content-center">
                <div class="col-6">
                    <table class="table table-striped shadow">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th># Documento</th>
                                <th>Curso</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $nombre;?></td>
                                <td><?php echo $documento;?></td>
                                <td><?php echo $curso;?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mb-3 justify-content-center">
                <div class="col-6">
                    <div class="col-12 text-center">
                        <a class="btn btn-success" href="index.php">OK</a>
                    </div>
                </div>
            </div>
        </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    </body>
</html>