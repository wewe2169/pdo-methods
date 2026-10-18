<?php
//connect to the database
require_once 'core/dbconfig.php'; 

//prepare update query
$sql = "UPDATE grocery_items SET price_euro = ? WHERE item_id = ?";
$stmt = $pdo->prepare($sql);

//define new price and target id
$newPrice = 8.50;
$idToUpdate = 2; 

//execute the update
if ($stmt->execute([$newPrice, $idToUpdate])) {
    echo "Item price updated successfully.";
}
?>