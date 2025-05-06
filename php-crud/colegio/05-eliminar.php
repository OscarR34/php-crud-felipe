<?php
    include_once('conexion.php');

    $documento = $_GET['documento'];

    $conexion->query("DELETE FROM profesores WHERE Documento = '$documento'");

    echo 'se elimino el profesor';

    header( 'Location: index.php');
?>