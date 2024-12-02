<?php
require_once "../Model/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
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

    $query = "UPDATE transacciones SET producto = :producto, precio_unitario = :precio_unitario, cantidad = :cantidad, subtotal = :subtotal, igv = :igv, total = :total WHERE id = :id";
    $stmt = $db->prepare($query);

    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":producto", $producto);
    $stmt->bindParam(":precio_unitario", $precio_unitario);
    $stmt->bindParam(":cantidad", $cantidad);
    $stmt->bindParam(":subtotal", $subtotal);
    $stmt->bindParam(":igv", $igv);
    $stmt->bindParam(":total", $total);

    if ($stmt->execute()) {
        header("Location: ../Views/index.php");
    } else {
        echo "Error al actualizar la transacción.";
    }
}
?>
