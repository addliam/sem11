<?php include '../Controllers/editar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/estilos.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
    <main class="container contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col">
                    <h4>Nuevos registro</h4>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form class="row g-3" method="POST" action="guardarView.php" autocomplete="off">
                        <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">

                        <div class="col-md-4">
                            <label for="codigo" class="form-label">Código</label>
                            <input type="text" id="codigo" name="codigo" class="form-control" 
                            value="<?php echo $row['codigo']; ?>" required autofocus>
                        </div>

                        <div class="col-md-8">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <input type="text" id="descripcion" name="descripcion" class="form-control" 
                            value="<?php echo $row['descripcion']; ?>" required>
                        </div>

                        <h5>Inventario</h5>
                        <div class="col-md-12">
                            <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="inventariable" 
name="inventariable" value="1" <?php echo ($row['inventariable'] == 1) ? 'checked' : ''; ?>>
<label for="inventariable" class="form-check-label">Usa inventario</label>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="stock" class="form-label">Existencias</label>
                            <input type="number" id="stock" name="stock" value="<?php echo $row['stock']; ?>" 
                            class="form-control">
                        </div>

                        <div class="col-md-12">
                            <a class="btn btn-secondary" href="index.php">Regresar</a>
                            <button type="submit" class="btn btn-primary" name="registro">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
