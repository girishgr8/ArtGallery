<?php
$db = pg_connect("host=localhost port=5432 dbname=Gallery user=postgres password=gayatri"); 
session_start();
if($db)
{
  echo "Connected";
}

$p = (int)(isset($_SESSION['id']) ? $_SESSION['id'] : '');
//$select = (int)(isset($_GET['select']) ? $_GET['select'] : '');
$select=$_COOKIE['select'];
echo $select;
/*$n="0";
$query2="SELECT art_id FROM art"; 
$result2 = pg_query($db,$query2); 
 
$count2=pg_num_rows($result2);

if($count2>0)
{
 while($row = pg_fetch_row($result2))
        {
       
        $m[] = $row[0];      
      
    }
    if($selected=="1")
    	$n=intval($m[0]);

    if($selected=="2")
    	$n=intval($m[1]);
    if($selected=="3")
    	$n=intval($m[2]);

    echo $m[0];

}*/
echo $select;
$query="INSERT into explore (customer_id,art_id) values('{$p}','{$select}')";

$result = pg_query($db,$query);

if ($result) {

        
        header("Location: homepage.php"); 
        exit();
} else {
    $_SESSION["errorMessage"] = "invalid";
         //header("Location: index.php"); 
         exit();
}






















     session_destroy();

     ?>