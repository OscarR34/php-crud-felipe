<?php include_once('conexion.php');?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Consultar Historial</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    </head>
    <body class="bg-dark text-white">
        <div class="container">
            <div class="row my-4">
                <div class="col text-center">
                    <h2>Blu Bank</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <form action="" method="POST">
                <div class="row justify-content-center">
                    <div class="col-3">
                        <div class="text-center">
                            <strong class="">Ingrese el número de cuenta para ver el historial</strong>
                        </div>
                        <div class="input-group mt-1">
                            <input name="buscar" type="number" class="form-control" placeholder="# de cuenta">
                            <button class="btn btn-primary" type="submit"> Buscar</button>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <div class="col-2 text-center mt-1">
                            <a class="nav-link text-primary" href="index.php">Volver al Inicio</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="container">
            <div class="row my-4">
                <div class="col">
                    <?php
                        if(empty($_POST['buscar'])){
                            ?>
                                <div class="col-12 text-center">
                                    <p class="fs-4">Primero Ingrese su número de cuenta en el buscador.</p>
                                </div>
                            <?php
                        }

                        if(isset($_POST['buscar'])){
                            $busqueda = $_POST['buscar'];

                            $consulta = $conexion->query("SELECT * FROM movimientos WHERE Cuenta = '$busqueda' ORDER BY Fecha ASC");

                            ?>
                            <div class="row justify-content-center">
                                <div class="col-8">
                                    <table class="table table-dark table-striped">
                                        <thead>
                                            <tr>
                                                <th># de cuenta</th>
                                                <th>Transacción</th>
                                                <th>Monto</th>
                                                <th>Fecha</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            while($dato = $consulta->fetch_array()){
                                                $cuenta = $dato['Cuenta'];
                                                $transaccion = $dato['Transaccion'];
                                                $monto = $dato['Monto'];
                                                $fecha = $dato['Fecha'];

                                            ?>
                                                <tr>
                                                    <td><?php echo $cuenta;?></td>
                                                    <td class=" <?php echo ($transaccion == 'Retiro') ? 'text-danger' : 'text-success';?>">
                                                        <?php echo $transaccion;?>
                                                    </td>
                                                    <td><?php echo $monto;?></td>
                                                    <td><?php echo $fecha;?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php
                        }
                    ?>
                </div>
            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    </body>
</html>