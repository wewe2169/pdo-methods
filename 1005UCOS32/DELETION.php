<?php
//connect to the database
require_once 'core/dbconfig.php';

//prepare delete statement
$sql = "DELETE FROM grocery_items WHERE item_id = ?";
$stmt = $pdo->prepare($sql);

//define id to delete
$item_id = 100;

//execute the deletion
if ($stmt->execute([$item_id])) {
    echo "Grocery item deleted successfully.";
}
?>