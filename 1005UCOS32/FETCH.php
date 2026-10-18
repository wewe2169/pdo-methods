<?php
//connect to the database
require_once 'core/dbconfig.php';

//prepare statement to get specific item
$stmt = $pdo->prepare("SELECT * FROM grocery_items WHERE item_id = ?");

//execute statement for item id 1
$stmt->execute([1]);

//fetch single row
$singleItem = $stmt->fetch(PDO::FETCH_ASSOC);

//format output with pre tags
echo "<pre>";
print_r($singleItem);
echo "</pre>";
?>