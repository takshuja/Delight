<?php
    $host = 'localhost';
    $username = 'blackfire';
    $password = 'pass';
    $database = 'Business';


    // Init connection to DB
    $conn = mysqli_connect($host, $username, $password, $database);

    if(!$conn) {
        die('(-) unable to connect to database, error: ' . mysqli_connect_error());
    }

    $cart_items = 'CREATE TABLE IF NOT EXISTS cart(id int  auto_increment, name varchar(255) not null, price int not null, primary key(id))';

    $result = $conn->query($cart_items);
    if(!$result) {
        echo "(-) unable to add item to cart, error: " . mysqli_error($conn);
    }

?>