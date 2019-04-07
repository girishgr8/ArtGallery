<?php
$db = pg_connect("host=localhost port=5432 dbname=Gallery user=postgres password=gayatri"); 
 session_start();

 
 $user = (isset($_POST['username']) ? $_POST['username'] : '');
 $password = (isset($_POST['password']) ? $_POST['password'] : '');


$query="SELECT * FROM artist WHERE username = '{$user}' AND password = '{$password}' ";

$result = pg_query($db,$query); 
$count=pg_num_rows($result);

  if ($count==1) {
        echo "Login Successfull";
        $error="valid";
        header("Location: index.php"); 
        exit();

    } else {
         echo "Login Unsuccessfull";
          $_SESSION["errorMessage"] = "invalid";
          //header("Location: index.php"); 
         exit();
    }

session_destroy();

     ?>