<?php
require_once "../Model/database.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Conectar a la base de datos
    $database = new Database();
    $db = $database->getConnection();

    $query = "DELETE FROM transacciones WHERE id = :id";
    $stmt = $db->prepare($query);
    $stmt->bindParam(":id", $id);

    if ($stmt->execute()) {
        header("Location: ../Views/index.php");
    } else {
        echo "Error al eliminar la transacción.";
    }
}
?>
