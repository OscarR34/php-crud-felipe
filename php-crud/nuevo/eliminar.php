<?php
    include_once('conexion.php');

    $documento = $_GET['documento'];

    $conexion->query("DELETE from colegio WHERE Documento = '$documento'");

    header("Location: index.php");
?>