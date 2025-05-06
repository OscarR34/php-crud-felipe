<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registrar profesor</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row my-4">
                <div class="col text-center">
                    <h2>REGISTRAR PROFESOR</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-5 card runded shadow">
                    <form action="02-insert-profesor.php" method="POST">
                        <div class="col-12 my-2">
                            <label class="form-label">Nombre</label>
                            <input name="nombre" type="text" class="form-control" placeholder="Nombre del profesor">
                        </div>
                        <div class="col-12 mb-2">
                            <label class="form-label">Numero de documento</label>
                            <input name="documento" class="form-control" type="number" placeholder="# de documento">
                        </div>
                        <div class="col-12 mb-2">
                            <label class="form-label">Curso</label>
                            <select name="curso" class="form-select">
                                <option value="601">601</option>
                                <option value="602">602</option>
                                <option value="603">603</option>
                                <option value="604">604</option>
                            </select>
                        </div>
                        <div class="row mb-2">
                            <div class="col-6 text-end">
                                <a class="btn btn-secondary" href="index.php">Volver</a>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-success" type="submit">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    </body>
</html>