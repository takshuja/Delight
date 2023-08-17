<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/form_style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

</head>

<body>

    <?php

    require_once 'database_connection.php';

    if (isset($_POST['submit'])) {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo "$username $password $email";
        echo "<script>document.getElementById('msg').style.display='block'</script>";
        // $query = "select * from customers where USERNAME='$user' and PASSWORD='$password'";

    }

    ?>

    <form method="post" class="card shadow-lg" id="app" action="<?php $_SERVER['self'] ?>">
        <div class="h1 heading" id='heading'>
            Login
        </div>
        <input class="input" type="text" placeholder="username or email" name="user">
        <input class="input" type="password" placeholder="password" name="password">
        <button class="submit-btn btn-success" type="submit" name="submit">Submit</button>
        <p id='msg' style="display:none;text-align:center;color:green;">Message</p>
    </form>

</body>
</html>