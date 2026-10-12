<?php
// Acá colocar los datos de conexión a la base de datos
$servidor = "";
$usuario = "dba";
$pass = "";
$base = "";

$conexion = new mysqli($servidor, $usuario, $pass, $base);

if ($conexion->connect_error) {
    die("Error conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");
?>
