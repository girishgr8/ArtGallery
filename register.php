<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="reg_style.css">
</head>
<body>
    <div class="container">
        <div class="icon">
             <div id="logo">
                <p>Register Here to Explore new Art</p>
            </div>
        </div>
        <form class="forms" method="post" action="insert.php"> 
            <img src="name.png" alt="">
            <input type="text" name="name" placeholder="Enter your name">
            <img src="user.png" alt="">
            <input type="text" name="username" placeholder="User Name">
            <img src="DOB.png" alt="">
            <input type="Date" name="dob" placeholder="Date of Birth">
            <img src="email.png" alt="">
            <input type="email" name="email" placeholder="Email id">
            <img src="pswd.png" alt="">
            <input type="password" name="password_1" placeholder="Password">
             <img src="pswd.png" alt="">
            <input type="password" name="password_2" placeholder="Confirm password">
            <img src="address.png" alt="">
            <input type="text" name="address" placeholder="Address">
            <input type="checkbox">
            <p class="agree">Accept Terms and Conditions</p>
            <input type="submit" class="btn" value="Signup" name="reg_user">
        </form>
    </div>
</body>
</html>