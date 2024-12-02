<?php
require_once "../Controllers/mostrar.php";
$transacciones = obtenerTransacciones();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Transacciones</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Lista de Transacciones</h2>
        <a href="ingresarView.php" class="btn btn-primary mb-3">Registrar Nueva Transacción</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Precio Unitario</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                    <th>IGV</th>
                    <th>Total</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transacciones as $transaccion): ?>
                    <tr>
                        <td><?php echo $transaccion['id']; ?></td>
                        <td><?php echo $transaccion['producto']; ?></td>
                        <td><?php echo $transaccion['precio_unitario']; ?></td>
                        <td><?php echo $transaccion['cantidad']; ?></td>
                        <td><?php echo $transaccion['subtotal']; ?></td>
                        <td><?php echo $transaccion['igv']; ?></td>
                        <td><?php echo $transaccion['total']; ?></td>
                        <td><?php echo $transaccion['fecha']; ?></td>
                        <td>
                            <a href="editarView.php?id=<?php echo $transaccion['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="../Controllers/eliminar.php?id=<?php echo $transaccion['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta transacción?');">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
