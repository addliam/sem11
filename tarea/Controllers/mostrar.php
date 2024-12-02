<?php
require_once "../Model/database.php";

function obtenerTransacciones() {
    $database = new Database();
    $db = $database->getConnection();

    $query = "SELECT * FROM transacciones";
    $stmt = $db->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
