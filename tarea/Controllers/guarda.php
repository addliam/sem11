<?php
require_once "../Model/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $producto = $_POST["producto"];
    $precio_unitario = $_POST["precio_unitario"];
    $cantidad = $_POST["cantidad"];

    // Calcular subtotal, IGV y total
    $subtotal = $precio_unitario * $cantidad;
    $igv = $subtotal * 0.18;
    $total = $subtotal - $igv;

    // Conectar a la base de datos
    $database = new Database();
    $db = $database->getConnection();

    $query = "INSERT INTO transacciones (producto, precio_unitario, cantidad, subtotal, igv, total)
              VALUES (:producto, :precio_unitario, :cantidad, :subtotal, :igv, :total)";
    $stmt = $db->prepare($query);

    $stmt->bindParam(":producto", $producto);
    $stmt->bindParam(":precio_unitario", $precio_unitario);
    $stmt->bindParam(":cantidad", $cantidad);
    $stmt->bindParam(":subtotal", $subtotal);
    $stmt->bindParam(":igv", $igv);
    $stmt->bindParam(":total", $total);

    if ($stmt->execute()) {
        header("Location: ../Views/guardarView.php");
    } else {
        echo "Error al guardar la transacción.";
    }
}
?>
