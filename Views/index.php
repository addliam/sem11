<?php
// Incluir el archivo que obtiene los productos de la base de datos
require '../Controllers/mostrar.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Almacen</title>

  <!-- Enlace a Bootstrap 4 desde el CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../public/css/estilos.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>
<body class="py-3">
  <main class="container contenedor">
    <div class="p-3 rounded">
      <div class="row">
        <div class="col-12">
          <h4>Productos
            <a href="ingresarView.php" class="btn btn-primary float-right">Nuevo</a>
          </h4>
        </div>
      </div>
      <div class="row py-3">
        <div class="col">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Código</th>
                <th>Descripción</th>
                <th>Stock</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
              // Verificar si hay productos en el resultado
              if (isset($resultado) && count($resultado) > 0) {
                // Mostrar los productos
                foreach ($resultado as $row) {
              ?>
                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['codigo']; ?></td>
                  <td><?php echo $row['descripcion']; ?></td>
                  <td><?php echo $row['stock']; ?></td>
                  <td>
                    <a href="editarView.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="eliminarView.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                  </td>
                </tr>
              <?php 
                }
              } else { 
              ?>
                <tr>
                  <td colspan="5" class="text-center">No hay productos disponibles.</td>
                </tr>
              <?php 
              } 
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
