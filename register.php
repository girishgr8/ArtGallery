
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
  <div class="header">
  	<h2>R E G I S T E R</h2>
  </div>
	
  <form method="post" action="insert.php">

    <div class="input-group">
      <label>Name</label>
      <input type="text" name="name" >
    </div>

    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" >
    </div>

    <div class="input-group">
      <label>Date of Birth</label>
      <input type="text" name="dob" >
    </div>
 
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" >
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>

    <div class="input-group">
      <label>Address</label>
      <input type="text" name="address" >
    </div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	
  </form>
</body>
</html>