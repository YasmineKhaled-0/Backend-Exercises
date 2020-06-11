<?php
 $dsn = 'mysql:dbname=college; host=localhost';
 $username = 'root';
 $password = '';
 try {
     $db = new PDO($dsn, $username, $password);
     //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     //echo 'Success Database Connection';
 }
  catch (PDOException $e) {
    $e-> getMessage(); 
 }
 $db = new PDO($dsn, $username, $password);
 $sql = 'SELECT * FROM `courses`';
 $stm = $db-> prepare($sql);
 $stm-> execute();
 while($data = $stm->fetch(PDO::FETCH_ASSOC)){
 echo "<pre>" . var_dump($data) ."</pre>";
 }


// $sql = "SELECT * FROM `students`";
 //$stm = $db-> prepare($sql);
 //$stm-> execute();
 //while($data = $stm->fetch(PDO::FETCH_ASSOC)){
 //echo "<pre>" . var_dump($data) ."</pre>";
 //}


 $db = new PDO($dsn, $username, $password);
 $sql = 'SELECT * FROM `Professor`';
 $stm = $db-> prepare($sql);
 $stm-> execute();
 while($data = $stm->fetch(PDO::FETCH_ASSOC)){
 echo "<pre>" . var_dump($data) ."</pre>";
 }

 $db = new PDO($dsn, $username, $password);
 $sql = "INSERT INTO courses (id, name) VALUES ( 'CS43' , 'Introduction To Computers' )";
 $stm = $db-> prepare($sql);
 $stm-> execute();

 $db = new PDO($dsn, $username, $password);
 $sql = "INSERT INTO Professor (id, password, name, email, courses_id) VALUES ( '9874561' , '78A96C' , 'Prof/Ossama Badawy', 'prof.@gmail.com', 'CS43' )";
 $stm = $db-> prepare($sql);
 $stm-> execute();

 $db = new PDO($dsn, $username, $password);
 $sql = "UPDATE courses SET id='CS443' WHERE name='Introduction To Computers'";
 $stm = $db-> prepare($sql);
 $stm-> execute();

 $db = new PDO($dsn, $username, $password);
 $sql = "Delete FROM courses WHERE id= 'CS43'";
 $stm = $db-> prepare($sql);
 $stm-> execute();
?> 
