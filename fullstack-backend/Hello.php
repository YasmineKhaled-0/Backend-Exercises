<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
<?php
if(empty($_POST['Username'])):
    echo 'Enter Your Username.';
    exit();
    elseif(empty($_POST['Password'])):
        echo 'Should enter Password.';
        exit();
else:
    ?>
    <h1> Hello!,<?=$_POST['Username'] ?></h1>
    <?php
endif;
?>

</div>
</body>
</html>