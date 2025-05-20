<?php
session_start();
include_once("conexion.php");


if (empty($_SESSION['user_name'])) {
    header("Location: login.php");
    exit();
}
//capturar el nombre del usuario que inicia sesion
$user_name = $_SESSION['user_name'];

//capturar tipo de usuario
$tipo_user=$_SESSION['tipo_user'];
if($tipo_user=="a"){
    $nombre_user="Administrador";
}elseif($tipo_user=="c"){
    $nombre_user="Cajero";
}




if(isset($_POST['ini']) and isset($_POST['fin'])){ //captura de los inputs
    $inicio=($_POST['ini']);
    $final=($_POST['fin']);
}else{ //fecha de hoy 
    $inicio=date('Y-m-d');
    $final=date('Y-m-d');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>


<table class="table table-bordered">
    NOMBRE: <?php echo $user_name ?>
    ROL: <?php echo $nombre_user ?>
    
    <tr class="well">
    <form name="form1" action="" method="post">
            <div class="row-fluid">
                <div class="span4" align="center">
                  <strong>Fecha Inicio</strong><br>
                 <input type="date" name="ini" value="<?php echo $inicio; ?>" autocomplete="off" required>
                </div>
                <div class="span4" align="center">
                    <strong>Fecha Fin</strong><br>
                    <input type="date" name="fin" value="<?php echo $final; ?>" autocomplete="off" required>
                </div>
                                
                <center><button type="submit" class="btn"><i class="icon-search"></i> <strong>Consultar</strong></button></center>
                </div>
    </form>
        <!-- <td>
        <h1 align="center">Listado Alumnos</h1>
            <center>
                <form method="post" action="">
                    <div>
								 
                    <input type="text" name="buscar" placeholder="Buscar Alumnos por Nombre">
                    </div><br>
                    <button type="submit" class="btn btn-primary" name="buton"><strong>Buscar</strong></button>
                </form>
            </center>
         </td> -->
    </tr>
</table>
<a href="php_cerrar.php"><i class="icon-off"></i> Salir</a></li>
                    <br>
<a href="insertar_alumnos.php"><button>Insertar</button></a>
<table class="table table-bordered">
                  <tr class="well">
                    <td><strong>Nombre</strong></td>
                    <td><strong>Email</strong></td>
                    <td>Nota</td>
                    <td>Competencia</td>
                    <td>resultado de aprendizaje</td>
                    <td>Estado</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <?php
                    if(!empty($_POST['ini']) and !empty($_POST['fin'])){ //preguntar si exite algo
                    $buscar=($_POST['buscar']); //felipe
                    $ini=($_POST['ini']);
                    $fin=($_POST['fin']);
                        $consulta=$conexion->query("SELECT * FROM alumnos WHERE fecha BETWEEN '$ini' and '$fin'
                        ORDER BY nombre ASC");
                    
                    }else{
                        $consulta=$conexion->query("SELECT * FROM alumnos");		
                    }		
                    $acum_efectivo=0;
                    while($row=$consulta->fetch_array()){
                        $nombre=$row['nombre'];
                        // $tipo=$row['tipo'];
                        // $valor=$row['valor'];

                        // if($tipo=="efectivo"){
                        //     $acum_efectivo=$acum_efectivo+$valor;
                        // }elseif($tipo=="datafono")
                        
                  ?>
                  
                    <tr>
                        <td><?php echo $nombre; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['nota']; ?></td>
                        <td><?php echo $row['fecha']; ?></td>
                        <td>
                            <center>
                                
                                    <a class="btn btn-primary" href="modificar.php?
                                            nombre=<?php echo $nombre ?> &
                                            email=<?php echo $row['email'] ?> &
                                            nota=<?php echo $row['nota'] ?>" title="Editar">
                                        <i class="icon-edit">Editar</i>
                                    </a>
                                        
                            </center>
                        </td>
                        <td>
                            <center>
                          
                                <a class="btn btn-danger" href="eliminar.php?email=<?php echo $row['email'] ?>" title="Eliminar">
                                    <i class="icon-edit">Eliminar</i>
                                </a>
                                
                            </center>
                        </td>
                        
                </form> 
                  </tr>
                  <?php } ?>
</table>

</html>