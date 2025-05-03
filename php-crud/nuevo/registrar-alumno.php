<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registrar alumno</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    </head>
    <body class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col text-center my-3">
                    <h1>Registrar alumno</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6">
                    <form action="insert-alumno.php" method="POST">
                        <div class="col mb-3">
                            <input name="documento" type="number" class="form-control" placeholder="# Documento">
                        </div>
                        <div class="col mb-3">
                            <input name="nombre" type="text" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="col mb-3">
                            <input name="correo" type="email" class="form-control" placeholder="Correo Electronico">
                        </div>
                        <div class="col mb-3">
                            <label>Nota</label>
                            <select name="nota" class="form-select">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="col text-center">
                            <button class="btn btn-primary" type="submit">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    </body>
</html>