<?php
$db = pg_connect("host=localhost port=5432 dbname=Gallery user=postgres password=gayatri"); 
 session_start();

 
 $user = (isset($_POST['username']) ? $_POST['username'] : '');
 $password = (isset($_POST['password']) ? $_POST['password'] : '');


$query="SELECT * FROM customer WHERE username = '{$user}' AND password = '{$password}' ";

$result = pg_query($db,$query); 
 
$count=pg_num_rows($result);




$title="SELECT title FROM art";
$cost="SELECT cost FROM art";
$artwork_type="SELECT artwork_type FROM art";
$artid="SELECT art_id FROM art";

$result1 = pg_query($db,$title);  
$result2 = pg_query($db,$cost); 
$result3 = pg_query($db,$artwork_type); 
$result4 = pg_query($db,$artid);
$count1=pg_num_rows($result1);
$count2=pg_num_rows($result2);
$count3=pg_num_rows($result3);
$count4=pg_num_rows($result4);

  if ($count1>1 && $count2>1 && $count3>1) {
        //echo "Login Successfull";
        $error="valid";
       
        while($row = pg_fetch_row($result1))
        {
        $_SESSION["title"][]=$row[0];  

    }

        while($row = pg_fetch_row($result2))
        {
        $_SESSION["cost"][]=$row[0];  
   
    }

        while($row = pg_fetch_row($result3))
        {
        $_SESSION["category"][]=$row[0];  
   
    }

       while($row = pg_fetch_row($result4))
        {
        $_SESSION["artid"][]=$row[0];  
   
    }
        //header("Location: homepage.php"); 
        

    } 





  if ($count==1) {
        echo "Login Successfull";
        $error="valid";
       
        while($row = pg_fetch_row($result))
        {
        $_SESSION["person"]=$row[2]; 
        $_SESSION["id"] = $row[0];      
      
    }
        header("Location: homepage.php"); 
        exit();

    } else {
         echo "Login Unsuccessfull";
          $_SESSION["errorMessage"] = "invalid";
          header("Location: index.php"); 
         exit();
    }









session_destroy();

     ?>