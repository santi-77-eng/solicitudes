<?php
$servidor = "";
$usuario = "";
$pass = "";
$base = "";

$conexion = new mysqli($servidor, $usuario, $pass, $base);

if ($conexion->connect_error) {
    die("Error conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");
?>