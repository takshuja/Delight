
<?php
require_once 'database_connection.php';

$name='ITEM1';
$price='444';
$path='ssssss./asd';
$code='code';

$sql = "INSERT INTO items(I_NAME, I_DESC, I_PRICE, I_PATH, I_CODE) VALUES ('$name', 'No Desc', '$price', '$path',  '$code');";
$result = $conn->query($sql);

echo $result;
?>
