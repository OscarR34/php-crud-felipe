<?php include_once('conexion.php');?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Editar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    </head>
    <body>
        <?php
            $nombre = $_POST['nombre'];
            $documento = $_POST['documento'];
            $curso = $_POST['curso'];

            $conexion->query("UPDATE profesores set Nombre = '$nombre', Documento = '$documento', Curso = '$curso' WHERE Documento = '$documento'");

            echo 'se registro bien';
        ?>

        <div class="container">
            <div class="row my5">
                <div class="col">
                    <h3>Se actualizo los datos</h3>
                </div>
                <div class="col">
                    <a class="btn btn-success" href="index.php">OK</a>
                </div>
            </div>
        </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    </body>
</html>