<?php
require_once "../Model/database.php";

$database = new Database();
$db = $database->getConnection();

$query = "SELECT * FROM transacciones";
$stmt = $db->prepare($query);
$stmt->execute();
$transacciones = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Transacciones Registradas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Transacciones Registradas</h2>
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
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="ingresarView.php" class="btn btn-primary">Registrar Nueva Transacción</a>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
