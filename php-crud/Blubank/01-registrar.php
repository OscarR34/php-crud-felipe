<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blu Bank - Registrar cuenta</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    </head>
    <body class="bg-dark text-white">
        <div class="container">
            <div class="row my-3">
                <div class="col text-center">
                    <h2>Registrar cuenta</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5 bg-light text-dark rounded shadow p-3">
                    <form action="02-insert-registrar.php" method="POST">
                        <!-- <div class="col">
                            <strong>Fecha</strong>
                            <input name="fecha" id="fecha" type="date" class="form-control" readonly>
                        </div> -->
                        <div class="col mt-3">
                            <strong>Cuenta</strong>
                            <input name="cuenta" type="number" class="form-control
                            " placeholder="# cuenta">
                        </div>
                        <div class="col mt-3">
                            <strong>Tipo de cuenta</strong>
                            <select name="tipo_cuenta" class="form-select">
                                <option value="ahorro">Ahorro</option>
                                <option value="corriente">Corriente</option>
                            </select>
                        </div>
                        <div class="col mt-3">
                            <strong>Monto a consignar</strong>
                            <input name="monto" type="number" class="form-control" placeholder="Monto minimo $10.000">
                        </div>
                        <div class="col text-center mt-3">
                            <button class="btn btn-secondary"><a class="text-decoration-none text-white" href="index.php">Volver</a></button>
                            <button type="submit" class="btn btn-success">Crear cuenta</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>






        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
        <script>
            // Obtener la fecha actual en formato año/mes/dia
            const hoy = new Date().toISOString().split('T')[0];
            document.getElementById('fecha').value = hoy;
        </script>
    </body>
</html>