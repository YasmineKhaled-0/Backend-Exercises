<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Hello.php" method="post">
     Username:
    <input type="text" name="Username"/>
    <br>
    <br>
     Password:
    <input type="password" name="Password"/>
    <br>
    <input type="submit" value="Submit"/>
    <br>
    <br>
    </form>
<p>Select Your Favorite Car.</p>
    <form action="Cartype.php" method="post">
    BMW:
    <input type="checkbox" name="car[]" value="BMW"/> 
    <br>
    <br>
    KIA:
    <input type="checkbox" name="car[]" value="KIA"/>
    <br>
    <br>
    Merceedes:
    <input type="checkbox" name="car[]" value="Merceedes"/>
    <br>
    <br>
    <input type="submit" value="OK"/>
    </form>
    <form action="type3.php" method="post">
    Start date:
    <input type="date" name="Year date[]" value="1/01/2020"/>
    <br>
    <input type="submit" value="submit"/>
</body>
</html>



