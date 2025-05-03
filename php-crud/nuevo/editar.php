<?php
    include_once('conexion.php');
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Editar alumno</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    </head>
    <body class="bg-dark text-white">
        <?php
            $documento = $_GET['documento'];
            $nombre = $_GET['nombre'];
            $correo = $_GET['correo'];
            $nota = $_GET['nota'];
        ?>

        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <form action="modificar.php" method="POST">
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
                                    <td>
                                        <input name="documento" type="number" value="<?php echo $documento; ?>"readonly class="form-control">
                                    </td>
                                    <td>
                                        <input name="nombre" type="text" value="<?php echo $nombre; ?>" class="form-control">
                                    </td>
                                    <td>
                                        <input name="correo" type="email" value="<?php echo $correo; ?>" class="form-control">
                                    </td>
                                    <td>
                                        <select name="nota" class="form-select">
                                            <option value="1" <?php if($nota == 1){echo 'selected';}?>>1</option>
                                            <option value="2" <?php if($nota == 2){echo 'selected';}?>>2</option>
                                            <option value="3" <?php if($nota == 3){echo 'selected';}?>>3</option>
                                            <option value="4" <?php if($nota == 4){echo 'selected';}?>>4</option>
                                            <option value="5" <?php if($nota == 5){echo 'selected';}?>>5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary" value="Editar" type="submit">Confirmar</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </form>
                </div>
            </div>
        </div>
        



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    </body>
</html>