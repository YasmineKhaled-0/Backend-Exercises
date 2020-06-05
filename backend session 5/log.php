<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  $_SESSION["email"]="admin@gmai.com";
  $_SESSION["password"]="S1234s12";
  echo "Success";
  ?>
</body>
</html>