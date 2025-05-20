<?php
	session_start();
	session_destroy();
	$_SESSION['user_name']=NULL; //empty
	$_SESSION['tipo_user']=NULL;
	$_SESSION['cod_user']=NULL;
	header('Location:login.php');
?>