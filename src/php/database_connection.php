<?php

$hostname = "localhost";
$username = "blackfire";
$password = "pass";
$database = "Business";

$conn = new mysqli($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection Error: " . mysqli_error($conn));
}

$create_customers_table = "CREATE TABLE IF NOT EXISTS customers( ID int NOT NULL auto_increment, F_NAME VARCHAR(100) NOT NULL, L_NAME VARCHAR(100) NOT NULL, USERNAME VARCHAR(60) NOT NULL, EMAIL VARCHAR(60) NOT NULL, PASSWORD VARCHAR(100) NOT NULL, PRIMARY KEY(ID))";

$create_items_table = "CREATE TABLE IF NOT EXISTS items(ID int  NOT NULL auto_increment, I_NAME VARCHAR(60)  NOT NULL, I_DESC VARCHAR(200)  NOT NULL, I_PRICE VARCHAR(40)  NOT NULL, PRIMARY KEY(ID))";


$queries = array($create_customers_table, $create_items_table);

foreach ($queries as $query) {
    $query_result = $conn->query($query);
    if ($query_result == false) {
        die('Error executing query: ' . mysqli_error($conn));
    }
}


?>