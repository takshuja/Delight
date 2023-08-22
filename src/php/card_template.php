<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

require 'database_connection.php';

$query = "SELECT * FROM items";

$result = mysqli_query($conn, $query);

if(!$result) {
    die("ERROR: " . mysqli_error($conn));
}



while($row = mysqli_fetch_assoc($result)) {

    $item_name = $row['I_NAME'];
    $img_url = $row['I_PATH'];


    $template = "<div class=\"card m-4 shadow-lg bg-body\" style=\"width: 19rem;\">
                <img src='upload/$img_url' class=\"card-img-top\" alt=\"ERROR LOADING IMAGE\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">$item_name</h5>
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                        
                        <form method='post'>
                        <div 
                            class=\"d-flex justify-content-between\">
                            
                                <button onclick=\"window.location.href='payment_tab.html'\" class=\"btn btn-primary bg-gradient shadow-lg w-50 card-buttons m-1\">
                                    Add to cart
                                </button>
                                <button name='add_to_cart' onclick='sendRequest()' class=\"btn w-50 btn-success bg-gradient shadow-lg card-buttons btn-sm m-1\">
                                    Payment
                                </button>
                                </div>
                                </form>
                                
                    </div>
                </div>";
                                
                                // <button href=\"src/html/payment_tab.html\" class=\"btn w-50 btn-success bg-gradient shadow-lg card-buttons btn-sm m-1\">Payment</button>

        echo $template;


        // cart(id int  auto_increment, name varchar(255) not null, price int not null, primary key(id))';

        if(isset($_POST['add_to_cart'])) {
            $sql = "insert into cart (name ,price) values('$item_name', 0);";
            $result = mysqli_query($conn, $sql);
            // if($result) {
            //     echo "ADDED TO CART";
            // } else {
            //     echo "ERROR ADDING TO CART";
            // }

        }

        

}

?>
<!-- 
<script>

    function sendRequest() {
        console.log('Hello, World!');
    }

</script> -->
</body>
</html>