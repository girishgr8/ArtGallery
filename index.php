  <?php session_start(); ?>
<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>




  	function openForm() {
  document.getElementById("blur").style.display = "block";
  
  document.getElementById("getStarted").style.display="none";
  

  
}

	function openRegForm() {
  document.getElementById("blur2").style.display = "block";
  
  document.getElementById("getStarted").style.display='none';
  

  
}
function closeForm() {
  document.getElementById("blur").style.display = "none";

  document.getElementById("getStarted").style.display="block";
  
}
function openProduct() {
  document.getElementById("s").style.display = "block";

  document.getElementById("getStarted").style.display="none";

  
}

function closeAll() {
  document.getElementById("s").style.display = "none";
document.getElementById("Contact").style.display = "none";
document.getElementById("DevTeam").style.display = "none";
document.getElementById("devInfo").style.display = "none";

  document.getElementById("getStarted").style.display="block";
  
}
function openContact() {
  document.getElementById("Contact").style.display = "block";

  
}
function openDevTeam() {
  document.getElementById("DevTeam").style.display = "block";
  document.getElementById("devInfo").style.display = "block";


  
}

</script>
<title> ALLURE ART GALLERY </title>
	<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<div class="titlebox">
		

    		</div>	
	<!---	<div class="title">
			
			<div class="logo">
  	  <img  src="logo5.png" width="390" height ="180">
   </div>  

</div>-->


	

<div id="blur" id="blur">
	<div class="loginbox" id="myform">
         <div id="close">&times;</div>
         <script type="text/javascript">
         	var closeBtn= document.getElementById('close');

           closeBtn.addEventListener('click',closeForm);
         </script>
		<img src="avatar.jpg" class="avatar">
		<h1>L O G I N</h1>
		<form method="post" action=" http://localhost/ArtGallery/check.php"class="popup">
			
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username">
			<P>Password</P>
			<input type="password" name="password" placeholder="Enter Password">
			<button type="submit" class="btn" name="login_user" onclick="closeForm()" on>Login</button>
			<a href="#">Forgot Password</a></br>
			<a href="register.php">Create Account</a>

		</form>
	</div>
</div>


<div id="blur2">
	<div class="loginbox" id="myform">

		<img src="avatar.jpg" class="avatar">
		<h1>L O G I N</h1>
		<form method="post" action=" http://localhost/ArtGallery/check.php"class="popup">
			
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username">
			<P>Password</P>
			<input type="password" name="password" placeholder="Enter Password">
			<button type="submit" class="btn" name="login_user" onclick="closeForm()" on>Login</button>
			<a href="#">Forgot Password</a></br>
			<a href="register.php">Create Account</a>

		</form>
	</div>
</div>









<button id="getStarted" type="button" onclick="openForm()">Shop Artworks Now!</button>
<!---<button id="sell" type="button" onclick="openForm()">Sell Your Products!</button>-->
<?php
   if (isset($_SESSION['errorMessage'])){
     echo "<span style='color:black; top:80%; left:61%;'>Check your input</span>";
   }
?>



	<div class="container">
		<div class="icon-bar">
			
			
			

			<a href="#" onclick="closeAll()"><i class="fa fa-home"></i></a>
			<a href="#" onclick="openProduct()"><i class="fa fa-product-hunt"></i></a>
			<a href="event.html"><i class="fa fa-calendar"></i></a>
			<a href="#" onclick="openContact()"><i class="fa fa-envelope"></i></a>
			
			<a href="#"><i class="fa fa-instagram"></i></a>
			<a href="#"><i class="fa fa-facebook-f"></i></a>
			<a href="#" onclick="openDevTeam()"><i class="fa fa-users"></i></a>
			
		</div>
	</div>


            <p id ="myTag">ALLURE ART GALLERY</p>
			
			<p id="tagline">Explore Art that makes you breathe with a different kind of happiness.
				<!---<BR><br>Showcase your artworks that are undeniablly conductive to ecstacy</p>-->

	

<div class="slider" id="s">
	<figure>
		<div class="slide">
			<img src="logo.png" >
			<p><b id="tag"><h1> Digital Art</h1></b></p>

		</div>

		<div class="slide">
			<img src="logo2.png">
			<p><b id="tag"><h1> Canvas Paintings</h1></b></p>
		</div>

		<div class="slide">
			<img src="logo3.png">
			<p><b id="tag"><h1>Sculptures</h1></b></p>
		</div>

		<div class="slide">
			<img src="logo5.png">
			<p><b id="tag"><h1>Wall Hangings</h1></b></p>
		</div>

		<div class="slide">
			<img src="logo4.png">
			<p><b id="tag"><h1> And much more! Get Started</h1></b></p>
		</div>

	</figure>
</div>

<div id="Contact">
	<p>Mail us for queries</p>
	<a href="#">allureArtDevTeam@gmail.com</a>

</div>





<div class="row" id=DevTeam>
  <div class="column">
    <img src="gayu1.jpg" alt="Snow" style="width:100%" >
    <p> Gayatri Srinivasan</p>
  </div>
  <div class="column">
    <img src="girish.png" alt="Forest" style="width:100%">
    <p>Girish Thatte</p>
  </div>
  <div class="column">
    <img src="amisha.png" alt="Mountains" style="width:100%">
    <p>Amisha Waghela</p>
  </div>
  
</div>
<div id="devInfo">
  	<p>  SY BTech Computer Science<br> K.J Somaiya College of Engineering</p> 
  </div>



</body>
</head>
</html>

<?php
    unset($_SESSION["errorMessage"]);
    session_destroy();
?>