
<?php 
 
$db = pg_connect("host=localhost port=5432 dbname=Gallery user=postgres password=gayatri"); 
 session_start();

 
 $user = (isset($_POST['username']) ? $_POST['username'] : '');
 $password = (isset($_POST['password']) ? $_POST['password'] : '');
 $id = (isset($_SESSION['id']) ? $_SESSION['id'] : '');

   $title1= $_SESSION['title'][0];
    $title2= $_SESSION['title'][1];
    $title3= $_SESSION['title'][2];
    $cost1= $_SESSION['cost'][0];
    $cost2= $_SESSION['cost'][1];
    $cost3= $_SESSION['cost'][2];
    $category1= $_SESSION['category'][0];
    $category2= $_SESSION['category'][1];
    $category3= $_SESSION['category'][2];


$query="create or replace view cart_items as Select art_id from explore where customer_id='{$id}'";

$query2="select * from cart_items natural join art";




//$result = pg_query($db,$query); 
 
//$count=pg_num_rows($result);

$result2 = pg_query($db,$query2); 
 
$count2=pg_num_rows($result2);

  if ($count2>0) {
       // echo "Successfull";
           while($row = pg_fetch_row($result2))
        {
        $_SESSION["explore_art_id"][]=$row[0];  

    }
    $_SESSION["explore_count"]=$count2;
    }

    $count=$_SESSION["explore_count"];
   if($count==1)
   {
    $item1=$_SESSION['explore_art_id'][0];
     $_SESSION['TotalCost']=(int)$cost1;
   }  


   if($count==2)
   {
    $item1=$_SESSION['explore_art_id'][0];
    $item2=$_SESSION['explore_art_id'][1];
    $_SESSION['TotalCost']=(int)$cost1+(int)$cost2;

   }  


   if($count==3)
   {
    $item1=$_SESSION['explore_art_id'][0];
    $item2=$_SESSION['explore_art_id'][1];
    $item3=$_SESSION['explore_art_id'][2];
     $_SESSION['TotalCost']=(int)$cost1+(int)$cost2+(int)$cost3;
   }  
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script type="text/javascript">
        window.onload=function(){


var title1=<?php echo json_encode($title1); ?>;
var title2=<?php echo json_encode($title2); ?>;
var title3=<?php echo json_encode($title3); ?>;
var cost1=<?php echo json_encode($cost1); ?>;
var cost2=<?php echo json_encode($cost2); ?>;
var cost3=<?php echo json_encode($cost3); ?>;
var category1=<?php echo json_encode($category1); ?>;
var category2=<?php echo json_encode($category2); ?>;
var category3=<?php echo json_encode($category3); ?>;
var i3;
var c=<?php echo json_encode($count); ?>;

if(c==1)
{
  var i1=<?php if(isset($item1)){echo json_encode($item1);} ?>;
   document.getElementById('1').style.display = 'flex';
 document.getElementById('title1').innerHTML = title1;
  document.getElementById('cost1').innerHTML = cost1;
document.getElementById('total').innerHTML = cost1;

}
else if(c==2)
{
  var i1=<?php if(isset($item1)){echo json_encode($item1); }?>;
     document.getElementById('1').style.display = 'flex';
   document.getElementById('title1').innerHTML = title1;
    document.getElementById('cost1').innerHTML = cost1;
   var i2=<?php if(isset($item2)){echo json_encode($item2);} ?>

    document.getElementById('2').style.display = 'flex';
     document.getElementById('title2').innerHTML = title2;
      document.getElementById('cost2').innerHTML = cost2;
      var integer1 = parseInt(cost1, 10)
      var integer2 = parseInt(cost2, 10)
      var cost= integer1+integer2;
      document.getElementById('total').innerHTML = cost;
  

}
else if(c==3)
{
  var i1=<?php if(isset($item1)){echo json_encode($item1);} ?>;
   var i2=<?php if(isset($item3)){ echo json_encode($item2); }?>
  i3=<?php if(isset($item3)){echo json_encode($item3); }?>
   document.getElementById('1').style.display = 'flex';
   document.getElementById('title1').innerHTML = title1;
    document.getElementById('cost1').innerHTML = cost1;
    document.getElementById('2').style.display = 'flex';
     document.getElementById('title2').innerHTML = title2;
      document.getElementById('cost2').innerHTML = cost2
     document.getElementById('3').style.display = 'flex';
      document.getElementById('title3').innerHTML = title3;
      document.getElementById('cost3').innerHTML = cost3;
   
         var integer1 = parseInt(cost1, 10)
      var integer2 = parseInt(cost2, 10)
       var integer3 = parseInt(cost3, 10)
      var cost= integer1+integer2+integer3;
      document.getElementById('total').innerHTML = cost;

}

var button = document.getElementById('b1');
var button2 = document.getElementById('b2');
var button3 = document.getElementById('b3');




}
  </script>
  <link rel="stylesheet" type="text/css" href="shopcart.css">
</head>
<body>
    <div class="header">

    <a href="" ><img src="cart.svg" > </a>

    <a href="http://localhost/ArtGallery/updatePayment.php" id="headerlink">Home</a>
    
   

  </div>
<div class="wrap cf">
  <h1 class="projTitle">Welcome to the <span>-alluring-</span> Shopping Cart</h1>
    <div class="titles">
  <h2 class="heading art">Art</h2>
  <h2 class="heading quant">     </h2>
  <h2 class="heading quant">Quantity</h2>
  <h2 class="heading cost">Cost</h2>
</div>

 <!-- Product #1 -->
  <div class="item" id="1" style="display: none;">
    <div class="buttons">
       <button class=".delete-btn" type="button" name="button" id="b1">
        <img src="cross.svg" alt="" />
      </button>
    </div>
 
    <div class="image">
      <img src="art2.jpg" alt="" class="pic" />
    </div>
 
    <div class="description">
      <span id = "title1">Starry Night</span><!-- Title-->
      
    </div>
 
    
 
    <div class="total-price" id = "cost1">$549</div>
  </div>

   <!-- Product #2 -->
  <div class="item" id="2" style="display: none;">
    <div class="buttons">
       <button class=".delete-btn" type="button" name="button" id="b2">
        <img src="cross.svg" alt="" />
      </button>
    </div>
 
    <div class="image">
      <img src="art1.jpg" alt="" class="pic" />
    </div>
 
    <div class="description">
      <span id="title2">Starry Night</span><!-- Title-->
     
    </div>

 
    <div class="total-price" id="cost2">$549</div>
  </div>

   <!-- Product #3 -->
  <div class="item" id="3" style="display: none;">
    <div class="buttons">
       <button class=".delete-btn" type="button" name="button" id="b3">
        <img src="cross.svg" alt="" />
      </button>
    </div>
 
    <div class="image">
      <img src="art8.jpg" alt="" class="pic" />
    </div>
 
    <div class="description">
      <span id = "title3">The Vase</span><!-- Title-->
     
    </div>
 
  
    <div class="total-price" id="cost3">$549</div>
  </div>

<!--<div class="final"><span class="label">Total:</span><span class="value" id ="total">$00.00</span></div>
<button><a href="http://localhost/ArtGallery/pay.php">PAY</a></button>
-->

<div class="final"><span class="label">Total:</span><span class="value" id ="total">$00.00</span>
<div> <a href="http://localhost/ArtGallery/pay.php"  class="button">    PAY    </a>  </div>
</div>  
</div>


</body>
</html>