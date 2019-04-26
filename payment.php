<?php

session_start();
$db = pg_connect("host=localhost port=5432 dbname=Gallery user=postgres password=gayatri"); 
 session_start();

 
 $user = (isset($_POST['username']) ? $_POST['username'] : '');
 $password = (isset($_POST['password']) ? $_POST['password'] : '');
 $id = (isset($_SESSION['id']) ? $_SESSION['id'] : '');




$query="create or replace view cart_items as Select art_id from explore where customer_id='{$id}'";





//$result = pg_query($db,$query); 
 
//$count=pg_num_rows($result);





  if ($count2>0) {
        echo "Successfull";
           while($row = pg_fetch_row($result2))
        {
        $_SESSION["art_id"][]=$row[0];  

    }
    $_SESSION["explore_count"]=$count2;
    echo $count2;
    echo $_SESSION["art_id"][0];
    echo $_SESSION["art_id"][1];
     echo $_SESSION["art_id"][3];
       echo $_SESSION["TotalCost"];
        echo $_SESSION["cardNo"];
    





       
        //header("Location: shopcart.php");
        exit(); 
        

    } 

  else {
         echo " Unsuccessfull";
          //header("Location: shopcart.php"); 
          echo $_SESSION["TotalCost"];
            echo $_SESSION["cardNo"];
          //header("Location: homepage.php"); 
         exit();
    }






session_destroy();

     ?>