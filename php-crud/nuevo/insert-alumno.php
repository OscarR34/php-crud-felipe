<?php
    include_once('conexion.php');

    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $nota = $_POST['nota'];

    $conexion->query("INSERT INTO colegio (Documento,Nombre,Correo,Nota) VALUES ('$documento','$nombre','$correo','$nota')");
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>registrado</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    </head>
    <body class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-3">
                    <h2>Registro exitoso</h2>
                    <p>Datos registrados</p>
                </div>
                <div class="col-12 my-3">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th>Documento</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Nota</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $documento; ?></td>
                                <td><?php echo $nombre; ?></td>
                                <td><?php echo $correo; ?></td>
                                <td><?php echo $nota; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12 text-center">
                    <button class="btn btn-secondary"><a class="nav-link" href="index.php">Volver</a></button>
                </div>
            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    </body>
</html>