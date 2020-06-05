<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   //eithir this function or this as one done as an array while other by selecting a specific type.
        
   // $car=$_POST["car"];
        //echo $car[1];
        //echo ' <br> <br> Favorite Car';
        if(isset($_POST['car'])){
            $car = $_POST['car'];
           echo'You selected your favorite <br>';
            foreach($car as $key => $value){
                echo"$value <br>";
            }
      }
      else{
         echo ' You must select at least one if its the 2nd choice <br>';
     }
        ?>
</body>
</html>