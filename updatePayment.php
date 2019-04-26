<?php 
 
$db = pg_connect("host=localhost port=5432 dbname=Gallery user=postgres password=gayatri"); 
 session_start();

 
 $user = (isset($_POST['username']) ? $_POST['username'] : '');
 $password = (isset($_POST['password']) ? $_POST['password'] : '');
 $id = (isset($_SESSION['id']) ? $_SESSION['id'] : '');

   $cost= $_SESSION['TotalCost'];
    $count= $_SESSION["explore_count"];
     $queryPrev = "Select * from payment";
     $resultPrev=pg_query($db,$queryPrev);
     $countPrev=pg_num_rows($resultPrev);
     $tranNo=(int) $countPrev+1;


    $query="INSERT into payment (transaction_no,card_no, no_of_items, total_cost, customer_id, art_id) values('{$tranNo}','1111222233334444','{$count}','{$cost}','{$id}','{$id}')";
$result = pg_query($db,$query);

header("Location: homepage.php"); 
    ?>