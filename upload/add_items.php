<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>

    <?php
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if(isset($_POST["upload"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            $name = $_POST['name'];
            $price = $_POST['price'];
            $image = $_POST['image'];
            $code = $_POST['code'];
            $sql = "insert into items(I_NAME, I_DESC, I_PRICE, I_PATH, I_CODE) values('$name', 'DESC' ,'$price', '$image', '$code');";
        $upload_query = $conn->query($sql);
        if ($upload_query) {
            echo('Upload Successful');
        } else {
            echo("ERROR");
        }
        } 
        }

        // $create_items_table = "CREATE TABLE IF NOT EXISTS items(ID int  NOT NULL auto_increment, I_NAME VARCHAR(60)  NOT NULL, I_DESC VARCHAR(200)  NOT NULL, I_PRICE VARCHAR(40) NOT NULL, I_PATH VARCHAR(40) NOT NULL, I_CODE VARCHAR(40) NOT NULL,   PRIMARY KEY(ID))";
    ?>


</head>

<body style="color:#4af626;background-color:#222;">
    <div class="container">
        <div class="form">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" name="name" id="input" placeholder="Item Name">
                <input type="text" name="price" id="input" placeholder="Item Price">
                <input type="file" name="file" id="" accept="image/png, image/jpg, image/jpeg">
                <input type="text" name="code" id="">
                <button type="submit" name='upload'>Submit</button>
            </form>
        </div>


        <div class="form">
        <form action="" method="post" enctype="multipart/form-data">
                <input type="text" name="name" id="input" placeholder="Item Name">
                <!-- <input type="text" name="price" id="input" placeholder="Item Price"> -->
                <!-- <input type="file" name="file" id=""> -->
                <button type="submit" name='delete'>Delete</button>
            </form>
        </div>
    </div>
</body>

</html>