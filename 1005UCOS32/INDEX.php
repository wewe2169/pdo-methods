<?php
//connect to the database
require_once 'core/dbconfig.php';

//get all grocery items
$stmt = $pdo->query("SELECT * FROM grocery_items");
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Italian Grocery Inventory</title>
</head>
<body>
    <h2>Italian Grocery Inventory</h2>
    
    <!--create table headers -->
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Item ID</th>
            <th>Brand Name</th>
            <th>Item Name</th>
            <th>Category</th>
            <th>Price (€)</th>
            <th>Region</th>
        </tr>
        
        <?php 
        //loop through data and print rows
        foreach ($items as $row): 
        ?>
        <tr>
            <td><?= htmlspecialchars($row['item_id']) ?></td>
            <td><?= htmlspecialchars($row['brand_name']) ?></td>
            <td><?= htmlspecialchars($row['item_name']) ?></td>
            <td><?= htmlspecialchars($row['category']) ?></td>
            <td><?= htmlspecialchars($row['price_euro']) ?></td>
            <td><?= htmlspecialchars($row['region']) ?></td>
        </tr>
        <?php endforeach; ?>
        
    </table>
</body>
</html>