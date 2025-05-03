<?php
    include_once('conexion.php');
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blu Bank - Cuenta eliminada</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    </head>
    <body class="bg-dark text-white">
        <?php
            $cuenta = $_GET['cuenta'];

            $conexion->query("DELETE FROM bancocuentas WHERE Cuenta = '$cuenta'");
        ?>
        <div class="container">
            <div class="row justify-content-center my-4">
                <div class="col-12 text-center fs-3">
                    <h3>Se elimino correctamente la cuenta: <?php echo $cuenta;?></h3>
                </div>
                <div class="col-12 text-center">
                    <button class="btn btn-success"><a class="nav-link text-white" href="index.php">OK</a></button>
                </div>
            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    </body>
</html>