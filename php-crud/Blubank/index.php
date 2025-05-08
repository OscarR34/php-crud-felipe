<?php
    include_once("conexion.php");
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blu Bank - Inicio</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    </head>
    <body class="bg-dark text-white">
        <div class="container">
            <div class="row my-4">
                <div class="col text-center">
                    <h1>Blu Bank</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <form action="" method="POST">
                <div class="row justify-content-center">
                    
                    <div class="col-3">
                        <strong>Ingrese el número de cuenta</strong>
                        <div class="input-group mt-1">
                            <input name="buscar" type="number" class="form-control" placeholder="# de cuenta">
                            <button class="btn btn-primary" type="submit"> Buscar</button>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <div class="col-2 text-center mt-1">
                            <a class="nav-link text-primary" href="01-registrar.php">Registrar cuenta</a>
                        </div>
                    </div>
                </div>
            </form>
            

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

                            $consulta = $conexion->query("SELECT * FROM bancocuentas WHERE Cuenta = '$busqueda'");

                            while($dato = $consulta->fetch_array()){
                                $cuenta = $dato['Cuenta'];
                                $tipocuenta = $dato['Tipocuenta'];
                                $saldo = $dato['Saldo'];
                                $retiro = $dato['Retiros'];

                            ?>
                                <table class="table table-dark table-striped">
                                    <thead>
                                        <tr>
                                            <th># cuenta</th>
                                            <th>Tipo de cuenta</th>
                                            <th>Saldo</th>
                                            <th>Retiros</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $cuenta; ?></td>
                                            <td><?php echo $tipocuenta; ?></td>
                                            <td><?php echo $saldo; ?></td>
                                            <td><?php echo $retiro; ?></td>
                                            <!-- consignar -->
                                            <td><a class="btn btn-primary" href="03-consignar.php?
                                                cuenta=<?php echo $cuenta;?>&
                                                tipocuenta=<?php echo $tipocuenta;?>&
                                                saldo=<?php echo $saldo;?>&
                                                retiro=<?php echo $retiro;?>">
                                                <i>Consignar</i>
                                            </a></td>
                                            <!-- retirar -->
                                            <td><a class="btn btn-warning" href="05-retirar.php?
                                                cuenta=<?php echo $cuenta;?>&
                                                tipocuenta=<?php echo $tipocuenta;?>&
                                                saldo=<?php echo $saldo;?>&
                                                retiro=<?php echo $retiro;?>">
                                                <i>Retirar</i>
                                            </a></td>
                                            <!-- eliminar -->
                                            <td><a class="btn btn-danger" href="07-eliminar.php?
                                                cuenta=<?php echo $cuenta;?>">
                                                <i>Eliminar</i>
                                            </a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php
                            }
                        }
                    ?>
                </div>
            </div>

            <div class="row my-4">
                <div class="col text-center">
                    <a class="text-decoration-none" href="09-historial.php">Consultar Historial</a>
                </div>
            </div>
        </div>





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    </body>
</html>