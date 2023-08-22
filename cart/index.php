<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to cart</title>
</head>
<body>
    

    <h1 style="text-align:center;">Your Shopping Cart</h1>

    <?php 
        session_start();
        require_once 'db_conn.php';
        
        $get_items = 'SELECT * FROM cart';

        $get_items_result = mysqli_query($conn, $get_items);

        if(!$get_items_result) {
            die("[-] unable to fetch data from the database, error: " . mysqli_error($conn));
        }


        while($row = mysqli_fetch_assoc($get_items_result)){
            echo "id: " . $row['id'];
            echo " name: " . $row['name'];
            echo " price: " . $row['price'];
            echo "<br>";
        }

        
    ?>
        


   

</body>
</html>