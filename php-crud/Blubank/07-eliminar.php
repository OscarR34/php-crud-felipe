<?php
    include_once('conexion.php');
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blu Bank - Eliminar cuenta</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    </head>
    <body class="bg-dark text-white">
        <?php
            $cuenta = $_GET['cuenta'];
        ?>
        <div class="container">
            <div class="row my-4 justify-content-center">
                <div class="col-12 text-center">
                    <h3 class="fs-5">¿Esta seguro de eliminar la cuenta?</h3>
                </div>
                <div class="col-5 text-end">
                    <form action="08-eliminar-cuenta.php">
                        <a class="btn btn-success" href="08-eliminar-cuenta.php?
                        cuenta=<?php echo $cuenta;?>">SI</a>
                    </form> 
                </div>
                <div class="col-5 text-start">
                    <a class="btn btn-danger" href="index.php">NO</a>
                </div>
            </div>
        </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    </body>
</html>