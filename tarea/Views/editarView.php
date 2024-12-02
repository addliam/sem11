<?php
require_once "../Model/database.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $database = new Database();
    $db = $database->getConnection();

    $query = "SELECT * FROM transacciones WHERE id = :id";
    $stmt = $db->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $transaccion = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Transacción</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Transacción</h2>
        <form action="../Controllers/editar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $transaccion['id']; ?>">
            <div class="mb-3">
                <label for="producto" class="form-label">Nombre del Producto</label>
                <input type="text" name="producto" id="producto" class="form-control" value="<?php echo $transaccion['producto']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="precio_unitario" class="form-label">Precio Unitario</label>
                <input type="number" name="precio_unitario" id="precio_unitario" class="form-control" step="0.01" value="<?php echo $transaccion['precio_unitario']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" name="cantidad" id="cantidad" class="form-control" value="<?php echo $transaccion['cantidad']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>

   
  