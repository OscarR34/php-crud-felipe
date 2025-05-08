<?php
    include_once('conexion.php');

    $cuenta = $_POST['cuenta'];
    $tipocuenta = $_POST['tipo_cuenta'];
    $monto_actual = 0;
    $retiro = 0;
    $fecha = $_POST['fecha'];
    $transaccion = 'Consignación';

    $consulta = $conexion->query("SELECT * FROM bancocuentas WHERE Cuenta = '$cuenta'");

    while($dato = $consulta->fetch_array()){
        $monto_actual = $dato['Saldo'];
        $retiro = $dato['Retiros'];
    }

    $nuevo_monto = $_POST['monto'];

    if($nuevo_monto >= 10000){
        $monto_actual += $nuevo_monto;

        $conexion->query("UPDATE bancocuentas set Cuenta = '$cuenta', Tipocuenta = '$tipocuenta', Saldo = '$monto_actual', Retiros = '$retiro' WHERE Cuenta = '$cuenta'");

        $conexion->query("INSERT INTO movimientos (Cuenta, Transaccion, Monto, Fecha) VALUES ('$cuenta', '$transaccion', '$nuevo_monto', '$fecha')");

        ?>
        <!doctype html>
        <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Blu Bank - Consignacion Exitosa</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
            </head>
            <body class="bg-dark text-white">
                <div class="container">
                    <div class="row my-4 justify-content-center">
                        <div class="col-12 text-center fs-3">
                            <h3>Se ha realizado la consignacion con <span class="text-success">exito</span>, su saldo actual es: <?php echo $monto_actual;?></h3>
                        </div>
                        <div class="col-5 text-center my-3">
                            <a class="btn btn-success" href="index.php">OK</a>
                        </div>
                    </div>
                </div>



                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
            </body>
        </html>
    <?php
    }else{
        ?>
        <!doctype html>
        <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Blu Bank - Consignacion No exitosa</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
            </head>
            <body class="bg-dark text-white">
                <div class="container">
                    <div class="row my-4 justify-content-center">
                        <div class="col-12 text-center fs-3">
                            <h3>No se pudo realizar la consignacion, el monto minimo para realizar una consignacion es minimo de $10.000, su saldo actual es: <?php echo $monto_actual;?></h3>
                        </div>
                        <div class="col-5 text-center my-3">
                            <a class="btn btn-success" href="index.php">OK</a>
                        </div>
                    </div>
                </div>



                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
            </body>
        </html>
    <?php
    }
?>