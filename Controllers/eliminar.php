<?php 
require '../Model/database.php'; 

$db = new Database(); 
$con = $db->conectar(); 

$id = $_GET['id']; 

$query = $con->prepare("DELETE FROM productos WHERE id=?"); 
$query->execute([$id]); 

$numElimina = $query->rowCount(); 
?>
