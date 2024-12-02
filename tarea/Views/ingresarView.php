<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ingresar Transacción</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Formulario de Transacción</h2>
        <form action="../Controllers/guarda.php" method="post">
            <div class="mb-3">
                <label for="producto" class="form-label">Nombre del Producto</label>
                <input type="text" name="producto" id="producto" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="precio_unitario" class="form-label">Precio Unitario</label>
                <input type="number" name="precio_unitario" id="precio_unitario" step="0.01" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" name="cantidad" id="cantidad" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrar Transacción</button>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
