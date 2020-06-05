<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   //if (date_default_timezone_get()) {
      // echo "date_default_timezone_set:" . date_default_timezone_get(). '<br/>';
   //}
   if (ini_get('date.timezone')){
       echo "date.timezone: " . ini_get('date.timezone');
   }
   echo "</br> </br> Now is".date("</br> h:i:sa </br>") ;
    ?>
</body>
</html>