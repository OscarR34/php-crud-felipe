<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Editar profesor</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    </head>
    <body>
        <?php
            $nombre = $_GET['nombre'];
            $documento = $_GET['documento'];
            $curso = $_GET['curso'];
        ?>

        <div class="container">
            <div class="row my-5">
                <div class="col text-center">
                    <h3>Editar info profesor</h3>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-6">
                    <form action="04-update-editar.php" method="POST">
                        <div>
                            <input name="nombre" value="<?php echo $nombre;?>" type="text">
                        </div>
                        <div>
                            <input name="documento" value="<?php echo $documento;?>" type="number" readonly>
                        </div>
                        <div>
                            <select name="curso">
                                <label>curso</label>
                                <option value="601" <?php if($curso == '601'){echo 'selected';}?>>601</option>
                                <option value="602" <?php if($curso == '602'){echo 'selected';}?>>602</option>
                                <option value="603" <?php if($curso == '603'){echo 'selected';}?>>603</option>
                                <option value="604" <?php if($curso == '604'){echo 'selected';}?>>604</option>
                            </select>
                        </div>
                        <div>
                            <button class="btn btn-success" type="submit">Confirmar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    </body>
</html>