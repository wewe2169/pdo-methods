<?php
//connect to the database
require_once 'core/dbconfig.php';

//execute query to get all grocery items
$stmt = $pdo->query("SELECT * FROM grocery_items");

//fetch all rows
$allItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

//format output with pre tags
echo "<pre>";
print_r($allItems);
echo "</pre>";
?>