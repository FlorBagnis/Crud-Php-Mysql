<?php

include("conexion.php");

$mensaje = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"]);
    $precio = trim($_POST["precio"]);

    // Validar nombre
    if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ ]+$/", $nombre)) {

        $error = "El nombre solo puede contener letras y espacios.";

    // Validar precio
    } elseif (!is_numeric($precio) || $precio <= 0) {

        $error = "El precio debe ser un número mayor a 0.";

    } else {

        // Fecha y hora actuales
        $fecha = date("Y-m-d");
        $hora = date("H:i:s");

        // Insertar producto
        $sql = "INSERT INTO productos (nombre, precio, fecha, hora)
                VALUES ('$nombre', '$precio', '$fecha', '$hora')";

        if ($conexion->query($sql)) {

            $mensaje = "¡Producto agregado correctamente! 💗";

        } else {

            $error = "Ocurrió un error al guardar el producto.";

        }
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agregar producto</title>

    <link rel="stylesheet" href="estilos.css">

</head>

<body>

    <div class="contenedor">

        <div class="encabezado">

            <span class="icono">🛍️</span>

            <h1>Nuevo producto</h1>

            <p>Agregá un producto a tu catálogo</p>

        </div>


        <?php if ($error != "") { ?>

            <div class="mensaje error">
                ❌ <?php echo $error; ?>
            </div>

        <?php } ?>


        <?php if ($mensaje != "") { ?>

            <div class="mensaje exito">
                <?php echo $mensaje; ?>
            </div>

        <?php } ?>


        <form method="POST">

            <label for="nombre">
                Nombre del producto
            </label>

            <input
                type="text"
                id="nombre"
                name="nombre"
                placeholder="Ej: Remera rosa"
                required
            >

            <small>
                Solo letras y espacios
            </small>


            <label for="precio">
                Precio
            </label>

            <div class="precio-input">

                <span>$</span>

                <input
                    type="number"
                    id="precio"
                    name="precio"
                    placeholder="15000"
                    min="0.01"
                    step="0.01"
                    required
                >

            </div>


            <button type="submit">
                💗 Agregar producto
            </button>

        </form>


        <a class="volver" href="index.php">
            ← Volver a productos
        </a>

    </div>

</body>

</html>