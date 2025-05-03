<?php
    include_once('conexion.php');

    $cuenta = $_POST['cuenta'];
    $tipocuenta = $_POST['tipo_cuenta'];
    $monto = $_POST['monto'];
    $retiro = 0;

    $conexion->query("INSERT INTO bancocuentas (Cuenta, Tipocuenta, Saldo, Retiros) VALUES ('$cuenta', '$tipocuenta', '$monto', '$retiro')");

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blubank - Registro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    </head>
    <body class="bg-dark text-white">
        <div class="container">
            <div class="row mt-4">
                <div class="col text-center">
                    <h3>Se registro el usuario correctamente</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-2">
                    <p>Datos registrados</p>
                </div>
                <div class="col-12">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th># Cuenta</th>
                                <th>Tipo de cuenta</th>
                                <th>Monto</th>
                                <th>Retiros</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $cuenta; ?></td>
                                <td><?php echo $tipocuenta; ?></td>
                                <td><?php echo $monto; ?></td>
                                <td><?php echo $retiro ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12 text-center my-3">
                    <button class="btn btn-primary"><a class="text-decoration-none text-white" href="index.php">Inicio</a></button>
                </div>
            </div>
        </div>







        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    </body>
</html>