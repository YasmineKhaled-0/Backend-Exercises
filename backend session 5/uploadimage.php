<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if($_FILES["photo"]["error"] > 0){
    echo "Error: " . $_FILES["photo"]["error"] . "<br>";
} else{
    echo "File Name: " . $_FILES["photo"]["name"] . "<br>";
    echo "File Type: " . $_FILES["photo"]["type"] . "<br>";
    echo "File Size: " . ($_FILES["photo"]["size"] / 1024) . " KB<br>";
    echo "Stored in: " . $_FILES["photo"]["tmp_name"];
}
?>
</body>
</html>