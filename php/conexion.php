<?php
include_once('configuracion.php');
include_once('query.php');

// crear sesiones 
session_start();


// conexion a base de datos
$link = new mysqli(host, user, password, database);

// verifica si la conexion funcionó
if (mysqli_connect_errno()) {
    $_SESSION['mensajeTexto'] = "El sistema está en mantenimiento, intente más tarde";
    $_SESSION['mensajeTipo'] = "is-info";
} else {
    mysqli_set_charset($link, 'utf8');
    // echo("La conexion a la base de datos ha sido exitosa");
}

?>