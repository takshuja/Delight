<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload</title>
</head>
<body>
    <?php 
    
        require_once 'database_connection.php';



        if(isset($_POST['upload'])) {

            $item_name = $_POST['name'];
            $item_price = $_POST['price'];
            $item_image = $_POST['image'];
            $item_code = $_POST['code'];
            $upload_path = $_FILES["file"]["tmp_name"];


            $file_name = $_FILES["file"]["name"];

            $target_path = "uploads/";
            $target_path = $target_path . basename($file_name);

            $upload_success = 1;

            $file_ext = strtolower(pathinfo($target_path, PATHINFO_EXTENSION));

            $uploaded_file = $_FILES["file"]["tmp_name"];

            if(getimagesize($uploaded_file) == false) {
                $upload_success = 0;
            }


            if(file_exists($target_path)) {
                echo "(-) file \"". $file_name ."\" already exists!";
                $upload_success = 0;
            }

            if($_FILES['file']['size'] > 500000) {
                echo "(-) file too large!";
                $upload_success = 0;
            }


            if($upload_success) {
                if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
                    echo "(+) file uploaded successfully";
                    // insertValues($conn, $item_name, $item_price, $target_path, $item_code);
                } else {
                    echo "(-) unable to upload file! at last step!!";
                }
            } else {
                echo "(-) file not uploaded!";
            }
                       
        }
    


        function insertValues($mysqli, $item_name, $item_price, $upload_path, $item_code) {
            $sql = "INSERT INTO items(I_NAME, I_DESC, I_PRICE, I_PATH, I_CODE) VALUES ('$item_name', 'No Desc', '$item_price', '$upload_path',  '$item_code');";

            if(!mysqli_query($mysqli, $sql)) {
                echo "(-) Error inserting items to database";
            } else {
                echo "(+) Items successfully uploaded.";
            }
        }
    
    ?>



    <form action="" method="post" enctype="multipart/form-data">
        <!-- <input type="file" name="file" id="">
        <input type="submit" name="upload" value="Upload"> -->

        <input type="text" name="name" id="input" placeholder="Item Name">
        <input type="text" name="price" id="input" placeholder="Item Price">
        <input type="file" name="file" id="" accept="image/png, image/jpg, image/jpeg">
        <input type="text" name="code" id="" placeholder="Unique Item Code">
        <button type="submit" name='upload'>Submit</button>


    </form>
</body>
</html>