<?php
    include_once('conexion.php');
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blu Bank - Consignar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    </head>
    <body class="bg-dark text-white">
        <?php
            $cuenta = $_GET['cuenta'];
            $tipocuenta = $_GET['tipocuenta'];
            $saldo = $_GET['saldo'];
            $retiro = $_GET['retiro'];
        ?>

        <div class="container my-3">
            <div class="row my-3">
                <div class="col text-center">
                    <h3>Consignar</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6 bg-light text-dark rounded shadow p-3">
                    <form action="04-update-consignar.php" method="POST">
                        <div class="col">
                            <strong>Cuenta</strong>
                            <input name="cuenta" type="number" class="form-control" value="<?php echo $cuenta;?>" readonly>
                        </div>
                        <div class="col mt-3">
                            <strong>Tipo de cuenta</strong>
                            <select name="tipo_cuenta" class="form-select" readonly>
                                <option value="ahorro" <?php if($tipocuenta == 'ahorro'){echo 'selected';}?>>Ahorro</option>
                                <option value="corriente" <?php if($tipocuenta == 'corriente'){echo 'selected';}?>>Corriente</option>
                            </select>
                        </div>
                        <div class="col mt-3">
                            <strong>Monto a consignar</strong>
                            <input name="monto" type="number" class="form-control" placeholder="Monto minimo $10.000">
                        </div>
                        <div class="col mt-3">
                            <strong>Fecha</strong>
                            <input name="fecha" type="date" class="form-control" value="<?php echo date('Y-m-d');?>" readonly>
                        </div>
                        <div class="col text-center mt-3">
                            <button class="btn btn-secondary"><a class="text-decoration-none text-white" href="index.php">Volver</a></button>
                            <button type="submit" class="btn btn-success">Consignar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>








        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    </body>
</html>