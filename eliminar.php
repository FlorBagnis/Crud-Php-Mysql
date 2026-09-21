<?php

include("conexion.php");

$id = $_GET["id"];

$sql = "DELETE FROM productos WHERE id = $id";

if ($conexion->query($sql)) {

    header("Location: index.php");
    exit;

}

?>