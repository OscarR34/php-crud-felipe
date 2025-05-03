<?php
    include_once('conexion.php');
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inicio</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    </head>
    <body class="bg-dark text-white">
        <div class="container">

            <div class="row mt-3">
                <div class="col text-center">
                    <h1>COLEGIO</h1>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <!-- input buscador -->
                <div class="col-3">
            
                    <form action="" method="POST">
                        <div class="input-group">
                            <input name="buscar" type="number" class="form-control" placeholder="Ingrese el documento"> 
                            <button class="btn btn-primary">Buscar</button>  
                        </div>
                    </form>
                    
                </div>
            </div>

            <div class="row justify-content-center mt-1">
                <!-- registrar alumno -->
                <div class="col-4 text-center">
                    <div>
                        <label>Si no esta registrado, click en el boton registrar alumno</label>
                    </div>
                    <div class="mt-1">
                        <button class="btn btn-outline-primary"><a class="nav-link" href="registrar-alumno.php">Registrar alumno</a></button>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
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
                            <?php
                                if(empty($_POST['buscar'])){
                                    $consulta = $conexion->query("SELECT * from colegio");
                                }
                                if(isset($_POST['buscar'])){
                                    $busqueda = $_POST['buscar'];

                                    $consulta = $conexion->query("SELECT * from colegio WHERE Documento LIKE '%$busqueda%' ORDER BY Documento ASC");
                                };

                                while($alumno = $consulta->fetch_array()){
                                    $documento = $alumno['Documento'];
                                    $nombre = $alumno['Nombre'];
                                    $correo = $alumno['Correo'];
                                    $nota = $alumno['Nota'];
                                    
                            ?>
                                    <tr>
                                        <td><?php echo $documento; ?></td>
                                        <td><?php echo $nombre; ?></td>
                                        <td><?php echo $correo; ?></td>
                                        <td><?php echo $nota; ?></td>
                                        <td>
                                            <a class="btn btn-primary" href="editar.php?
                                            documento=<?php echo $documento?>&
                                            nombre=<?php echo $nombre?>&
                                            correo=<?php echo $correo?>&
                                            nota=<?php echo $nota?>" title="Editar">
                                                <i class="icon-edit">Editar</i>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger" href="eliminar.php?
                                            documento=<?php echo $documento?>" title="Eliminar">
                                                <i class="icon-edit">Eliminar</i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        








        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    </body>
</html>