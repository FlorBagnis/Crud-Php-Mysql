<?php

include("conexion.php");

$id = $_GET["id"];

$sql = "SELECT * FROM productos WHERE id = $id";

$resultado = $conexion->query($sql);

$producto = $resultado->fetch_assoc();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];

    $sql = "UPDATE productos
            SET nombre = '$nombre',
                precio = '$precio'
            WHERE id = $id";

    if ($conexion->query($sql)) {

        header("Location: index.php");
        exit;

    }

}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Editar producto</title>

    <link rel="stylesheet" href="estilos.css">

</head>

<body>

    <div class="contenedor">

        <h1>✏️ Editar producto</h1>

        <form method="POST">

            <label>
                Nombre
            </label>

            <input
                type="text"
                name="nombre"
                value="<?php echo $producto["nombre"]; ?>"
                required
            >

            <label>
                Precio
            </label>

            <input
                type="number"
                name="precio"
                step="0.01"
                value="<?php echo $producto["precio"]; ?>"
                required
            >

            <button type="submit">
                Guardar cambios
            </button>

        </form>

        <a href="index.php">
            ← Volver
        </a>

    </div>

</body>

</html>