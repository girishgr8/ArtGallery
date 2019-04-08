 <?php session_start(); ?>
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

modalBtn.addEventListener('click', openModal);
closeBtn.addEventListener('click',closeModal);

function openModal(){
  modal.style.display='flex';
 
         

}
document.getElementById("1").onclick = function() {
  openModal();
  document.getElementById("modalImg").src=document.getElementById('1').src ;
  document.getElementById('title').innerHTML = 'The Vase';
  document.getElementById('artist').innerHTML = 'Artist: Hemlich';
  document.getElementById('artworktype').innerHTML = 'Category: Vases';
  document.getElementById('cost').innerHTML = 'Cost: $10000';

}
document.getElementById("2").onclick = function() {
  openModal();
  document.getElementById("modalImg").src=document.getElementById('2').src ;
  document.getElementById('title').innerHTML = 'Starry Night';
   document.getElementById('artist').innerHTML = 'Artist: Geuian';
    document.getElementById('artworktype').innerHTML = 'Category: Canvas';
  document.getElementById('cost').innerHTML = 'Cost: $20000';
}
document.getElementById("3").onclick = function() {
  openModal();
  document.getElementById("modalImg").src=document.getElementById('3').src ;
  document.getElementById('title').innerHTML = 'Zangle Zob';
   document.getElementById('artist').innerHTML = 'Artist: Wessels';
    document.getElementById('artworktype').innerHTML = 'Category: Digital Art';
  document.getElementById('cost').innerHTML = 'Cost: $30000';
}


function closeModal(){
  modal.style.display='none';
}

   var prev= document.getElementById('prev');

           prev.addEventListener('click',previ);
function previ(){
  var i;
  var img = new Image();
  img.src = document.getElementById('1').src;
  for (i = 1; i < 3; i++){
    document.getElementById(""+i+"").src=document.getElementById(""+(i+1)+"").src ;
  }
  document.getElementById('3').src=img.src;
}


var next= document.getElementById('next');

           next.addEventListener('click',nexti);
function nexti(){
  var i;
  var img = new Image();
  img.src = document.getElementById('3').src;
  for (i = 3; i >1; i--){
    document.getElementById(""+i+"").src=document.getElementById(""+(i-1)+"").src ;
  }
  document.getElementById('1').src=img.src;
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

  <a class="prev" id="prev" >&#10094;</a>
  <script type="text/javascript">

         </script>

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
 <a class="next" id="next">&#10095;</a>
 <script type="text/javascript">
          var next= document.getElementById('next');

           //next.addEventListener('click',);
         </script>
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

    <button id="shit" class="button" >Click me</button>
</body>
</head>
</html>


