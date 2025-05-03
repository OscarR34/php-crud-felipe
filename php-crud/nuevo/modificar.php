<?php
    include_once('conexion.php');

    $documento = $_POST['documento'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $nota = $_POST['nota'];

    $conexion->query("UPDATE colegio set Nombre = '$nombre', Correo = '$correo', Nota = '$nota' WHERE Documento = '$documento'");

    header("Location: index.php");
?>