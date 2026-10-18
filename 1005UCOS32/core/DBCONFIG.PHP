<?php
//database credentials
$host = 'localhost';
$dbname = 'grocery_db';
$username = 'root';
$password = '';

//data source name
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

try {
    //create pdo instance
    $pdo = new PDO($dsn, $username, $password);
    
    //set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    //display error message
    die("Connection failed: " . $e->getMessage());
}
?>