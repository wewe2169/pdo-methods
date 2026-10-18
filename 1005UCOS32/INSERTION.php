<?php
//connect to the database
require_once 'core/dbconfig.php';

//prepare insert statement
$sql = "INSERT INTO grocery_items (brand_name, item_name, category, price_euro, region) VALUES (?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);

//define new grocery item variables
$brand_name = "Pavesi";
$item_name = "Gocciole Chocolate Biscuits (500g)";
$category = "Snacks";
$price_euro = 2.90;
$region = "Piedmont";

// execute the insertion
if ($stmt->execute([$brand_name, $item_name, $category, $price_euro, $region])) {
    echo "New grocery item successfully added.";
}
?>