<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$base_de_datos = "crud_productos";

$conexion = new mysqli(
    $servidor,
    $usuario,
    $password,
    $base_de_datos
);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8");

?>