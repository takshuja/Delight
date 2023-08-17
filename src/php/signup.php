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

    <form method="post" class="card shadow-lg" id="app">
        <div class="h1 heading">
            Signup
        </div>
        <input class="input" type="text" name="f_name" id="" placeholder="First name">
        <input class="input" type="text" name="l_name" placeholder="Last Name">
        <input class="input" type="text" placeholder="username" name="username">
        <input class="input" type="email" name="email" id="" placeholder="email">
        <input class="input" type="password" placeholder="password" name="password">
        <button class="submit-btn btn-success" type="submit" name="submit">Submit</button>
    </form>






    <script>
        Vue.createApp({
            data() {
                return {

                }
            },
            methods: {
                login:function() {
                    
                }
            }
        })
    </script>
</body>

</html>