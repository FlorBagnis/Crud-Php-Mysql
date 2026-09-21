<?php

include("conexion.php");

$sql = "SELECT * FROM productos";

$resultado = $conexion->query($sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CRUD Productos</title>

    <link rel="stylesheet" href="estilos.css">

</head>

<body>

    <div class="contenedor">

        <h1>🛍️ Mis productos</h1>

        <a class="boton" href="crear.php">
            + Agregar producto
        </a>

        <table>

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Acciones</th>

                </tr>

            </thead>

            <tbody>

                <?php while ($producto = $resultado->fetch_assoc()) { ?>

                    <tr>

                        <td>
                            <?php echo $producto["id"]; ?>
                        </td>

                        <td>
                            <?php echo $producto["nombre"]; ?>
                        </td>

                        <td>
                            $<?php echo $producto["precio"]; ?>
                        </td>

                        <td>

                            <a
                                class="editar"
                                href="editar.php?id=<?php echo $producto["id"]; ?>"
                            >
                                Editar
                            </a>

                            <a
                                class="eliminar"
                                href="eliminar.php?id=<?php echo $producto["id"]; ?>"
                            >
                                Eliminar
                            </a>

                        </td>

                    </tr>

                <?php } ?>

            </tbody>

        </table>

    </div>

</body>

</html>