<?php

require_once 'database_connection.php';

if (isset($_POST['submit'])) {
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // echo "Hello $username your password is $password";


    $query = "insert into customers(F_NAME, L_NAME, USERNAME, EMAIL, PASSWORD) values('$f_name', '$l_name', '$username', '$email', '$password')";


    $result = $conn->query($query);

    if (!$result) {
        echo "Error Executing Query!";
    }



}

?>