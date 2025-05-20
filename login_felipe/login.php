<?php 
	session_start();
	include_once "conexion_bd.php";
	
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }
      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
      

    </style>
    

    
   
  </head>

  <body>

    <div class="container">
	  <form name="form1" method="post" action="" class="form-signin">
      	
      	<?php 
	  	if(isset($_POST['usu']) and isset($_POST['con'])){ 
			$usu=($_POST['usu']);
			$con=($_POST['con']);
			// $con=encrypt($con,$usu);
			
			$consulta=$conexion->query("SELECT * FROM persona WHERE doc='$usu' and con='$con'");				
			if($row=$consulta->fetch_array()){
                
				if($row['estado']=='s'){
					//nombre=$row['nom'];
					
					$_SESSION['user_name']=$row['nom'];
					$_SESSION['tipo_user']=$row['tipo'];
					$_SESSION['cod_user']=$usu;
					if($row['tipo']=='a' or $row['tipo']=='c'){
						echo ('Bienvenido<br>'.$row['nom'].' '.$row['ape'].'').'<br>';
						
						echo '<meta http-equiv="refresh" content="2;url=consulta_alumno.php">';
					}
				}else{
					echo ('Usted no se encuentra Activo en la base de datos<br>Consulte con su Administrador de Sistema');	
				}
			}else{
				echo ('Usuario y Contraseña Incorrecto');
				echo '<center><a href="login.php" class="btn"><strong>Intentar de Nuevo</strong></a></center>';
			}
		}else{
			echo '<input type="text" name="usu" class="input-block-level" placeholder="Documento" autocomplete="off" required>
					<input type="password" name="con" class="input-block-level" placeholder="Password" autocomplete="off" required>
					<div align="right"><button class="btn btn-large btn-primary" type="submit"><strong>Entrar</strong></button></div>';		
		}
	  ?>
      </form>
	   <style>
            html {
                font-size: 10pt;
            }
            
            div {
                font-size: 1.5em;
            }
            
            strong {
                font-size: 1em;
            }
        </style>
<div>
  

    </div> <!-- /container -->
<?php include_once "Modulos/pie.php"; ?>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
