<?php
$db = pg_connect("host=localhost port=5432 dbname=Gallery user=postgres password=gayatri"); 
session_start();
if($db)
{
  echo "Connected";
}
$name = (isset($_POST['name']) ? $_POST['name'] : '');
$username = (isset($_POST['username']) ? $_POST['username'] : '');
$dob = (isset($_POST['dob']) ? $_POST['dob'] : '');
$email = (isset($_POST['email']) ? $_POST['email'] : '');
$password = (isset($_POST['password_2']) ? $_POST['password_2'] : '');
$address = (isset($_POST['address']) ? $_POST['address'] : '');
$date=date("d/m/Y");
$arr = explode(' ',trim($name));

$query="INSERT into customer (username, first_name, middle_name, last_name, dob, email_id, password, joined_date, address) values('{$username}','{$arr[0]}','{$arr[1]}','{$arr[2]}','{$dob}','{$email}','{$password}','{$date}','{$address}')";
$result = pg_query($db,$query);

if ($result) {

        $_SESSION["person"]=$arr[0];
        header("Location: homepage.php"); 
        exit();
} else {
    $_SESSION["errorMessage"] = "invalid";
          header("Location: index.php"); 
         exit();
}
     session_destroy();

     ?>