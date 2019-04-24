 <?php session_start(); 
 
    $title1= $_SESSION['title'][0];
    $title2= $_SESSION['title'][1];
    $title3= $_SESSION['title'][2];
    $cost1= $_SESSION['cost'][0];
    $cost2= $_SESSION['cost'][1];
    $cost3= $_SESSION['cost'][2];
    $category1= $_SESSION['category'][0];
    $category2= $_SESSION['category'][1];
    $category3= $_SESSION['category'][2];
    
?>

<!DOCTYPE html>

<html>
<head>
 
<title>Allure Art Gallery</title>
	<link rel="stylesheet" type="text/css" href="homepage.css">
	
<body>
   <script >
    window.onload=function(){

var modal= document.getElementById('bg-modal');
var modalBtn= document.getElementById('shit');
var closeBtn= document.getElementById('close');
var title1=<?php echo json_encode($title1); ?>;
var title2=<?php echo json_encode($title2); ?>;
var title3=<?php echo json_encode($title3); ?>;
var cost1=<?php echo json_encode($cost1); ?>;
var cost2=<?php echo json_encode($cost2); ?>;
var cost3=<?php echo json_encode($cost3); ?>;
var category1=<?php echo json_encode($category1); ?>;
var category2=<?php echo json_encode($category2); ?>;
var category3=<?php echo json_encode($category3); ?>;
var javascriptVariable = 1;

modalBtn.addEventListener('click', openModal);
closeBtn.addEventListener('click',closeModal);

function openModal(){
  modal.style.display='flex';
 
         

}
document.getElementById("1").onclick = function() {
  openModal();
  document.getElementById("modalImg").src=document.getElementById('1').src ;
  document.getElementById('title').innerHTML = title1;
  document.getElementById('artist').innerHTML = 'Artist: Hemlich';
  document.getElementById('artworktype').innerHTML = 'Category: '+category1;
  document.getElementById('cost').innerHTML = 'Cost: $'+cost1;

 
  javascriptVariable = 1;
 



}
document.getElementById("2").onclick = function() {
  openModal();
  document.getElementById("modalImg").src=document.getElementById('2').src ;
  document.getElementById('title').innerHTML = title2;
   document.getElementById('artist').innerHTML = 'Artist: Geuian';
    document.getElementById('artworktype').innerHTML = 'Category: '+category2;
  document.getElementById('cost').innerHTML = 'Cost: $'+cost2;
  
  javascriptVariable = 2;
}
document.getElementById("3").onclick = function() {
  openModal();
  document.getElementById("modalImg").src=document.getElementById('3').src ;
  document.getElementById('title').innerHTML = title3;
   document.getElementById('artist').innerHTML = 'Artist: Wessels';
    document.getElementById('artworktype').innerHTML = 'Category: '+category3;
  document.getElementById('cost').innerHTML = 'Cost: $'+cost3;
  
  javascriptVariable = 3;
}
document.getElementById("cart2").onclick = function() {
 window.location.href = "cart.php?select=" + javascriptVariable; 
}

function closeModal(){
  modal.style.display='none';
}
}

  </script>
  

<div id="bg-modal">
	<div id="modal-contents">

		<div id="close">&times;</div>
    <h1 id="title">The Vase</h1>
  <div class="left" >
    <br>
    <img src="avatar.jpg" id="modalImg" class="image" ></div>
    <div class="right">
      <br><br><br>
      <h3 id="artist" class="info" >Artist: Hemlich</h3>
      <h3 id="artworktype" class="info">Category: Vases</h3>
      <h3 id="cost" class="info">Cost: $10,000</h3>
    
      </div>

		<div id="cart">
      <button  class="btn" name="cart" id="cart2">Add to Cart</button>
    </div>

	</div>
</div>




	<div class="header">

 <a href="#" id = "headerlink">
      <?php
  if (isset($_SESSION['person'])){
  $person=$_SESSION['person'];
    echo $person;
     ;
   }
?>
</a>
		<a href="" ><img src="cart.svg" > </a>

    <a href="#" id="headerlink">Home</a>
		<a href="#" id="headerlink">About</a>
		<a href="#" id="headerlink">Contact</a>
   

	</div>

<div class="img1">
    <div class="infobox">
      <span class="border">
        Allure Art Gallery
      </span>
      
    </div>
  </div>

  <section class="section section-light">
    <h2>T R E N D I N G</h2>
  
    <button id="shit" class="button" >Click me</button>
   <div class="artcontainer">
    <img src="art2.jpg" id="1"  class="image" style="width:100%">
    <div class="middle">
    <div class="text">The Vase</div>
  </div>
    </div>

    <div class="artcontainer">
    <img src="art1.jpg" class="image" id="2"  style="width:100%">
    <div class="middle">
    <div class="text">Starry Night</div>
  </div>
    </div>

    <div class="artcontainer">
    <img src="art8.jpg" class="image" id="3"  style="width:100%">
    <div class="middle">
    <div class="text">Zangle Zob</div>
  </div>
    </div>

  </section>

  <div class="img2">
    <div class="infobox">
      <span class="border trans">
        Discover New Art
      </span>
    </div>
  </div>

  <section class="section section-dark">
    <h2>N E W _ A R T</h2>

    <div class="artcontainer">
    <img src="art9.jpg" class="image" style="width:100%">
    <div class="middle">
    <div class="text">Leisure</div><!-- by Lennie-->
  </div>

    </div>

<!--
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laudantium, quibusdam? Nobis, delectus, commodi, fugit amet tempora facere dolores nisi facilis consequatur, odio hic minima nostrum. Perferendis eos earum praesentium, blanditiis sapiente labore aliquam ipsa architecto vitae. Minima soluta temporibus voluptates inventore commodi cumque esse suscipit optio aliquam et, dolorem a cupiditate nihil fuga laboriosam fugiat placeat dignissimos! Unde eveniet placeat quisquam blanditiis voluptatem doloremque fugiat dolor repellendus ratione in.
    </p>-->

<div class="artcontainer">
    <img src="art10.jpg" class="image" style="width:100%">
    <div class="middle">
    <div class="text">Pickett's Charge</div><!-- by Mark Bradford-->
 </div>
    </div>

<div class="artcontainer">
    <img src="art11.jpg" class="image" style="width:100%">
    <div class="middle">
    <div class="text">River Leach</div><!-- by Silvia-->
 </div>
    </div>





  </section>

  <div class="img3">
    <div class="infobox">
      <span class="border trans">
        Exclusive Art 
      </span>
    </div>
  </div>

  <section class="section section-dark exclusive" style="height: 1000px;">
    <h2>E X C L U S I V E</h2><br><br>
    
    <div class="left" >
    <img src="art12.jpg" class="image" ><br></div>
    <div class="right"><br>
    	<h3>Title: Dinner Time</h3>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laudantium, quibusdam? Nobis, delectus, commodi, fugit amet tempora facere dolores nisi facilis consequatur, odio hic minima nostrum. Perferendis eos earum praesentium, blanditiis sapiente labore aliquam ipsa architecto vitae. Minima soluta temporibus voluptates inventore commodi cumque esse suscipit optio aliquam et, dolorem a cupiditate nihil fuga laboriosam fugiat placeat dignissimos! Unde eveniet placeat quisquam blanditiis voluptatem doloremque fugiat dolor repellendus ratione in.
    </p><br><br><br><br>    </div>
  
     
    <div class="left" >
    <img src="art14.jfif" class="image" ></div>
    <div class="right">
    	<h3>Title: The Great Wave off Kanagawa</h3>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laudantium, quibusdam? Nobis, delectus, commodi, fugit amet tempora facere dolores nisi facilis consequatur, odio hic minima nostrum. Perferendis eos earum praesentium, blanditiis sapiente labore aliquam ipsa architecto vitae. Minima soluta temporibus voluptates inventore commodi cumque esse suscipit optio aliquam et, dolorem a cupiditate nihil fuga laboriosam fugiat placeat dignissimos! Unde eveniet placeat quisquam blanditiis voluptatem doloremque fugiat dolor repellendus ratione in.
    </p>
    </div>

  </section>

  <div class="img1">
    <div class="infobox">
      <span class="border">
        art gallery
        
      </span>

    </div>
  </div>
</body>
</head>
</html>


