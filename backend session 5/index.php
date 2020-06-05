<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="log.php">
    E-mail:
    <input type="text"  name="admin@gmail.com">
    Password:
    <input type="password" name="S1234s12">
    <br>
    <br>
    <input type="submit" name="Login">
    </form>
    <form action="uploadimage.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <br>
    <br>
    <input type="file" name="photo" id="select file">
    <input type="submit" value=" Upload Image" name="upload">
    </form>
 </body>
</html>