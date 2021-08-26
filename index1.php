<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="blood_bank";

//create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//check connection
if($conn->connect_error){
    die("Connectiion failed:".$conn->connect_error);
}
//echo"hello";

if(isset($_POST['signup'])){
        $firstname       =$_POST['firstname'];
        $email      =$_POST['email'];
        $password   =$_POST['password'];
        $res = $conn->query("INSERT INTO `user`( `firstname`, `email`, `password`) VALUES ('$firstname','$email','$password')");
echo"hello2";
      if($res){
    echo "<script> location.href='login21.php'; </script>";
}
}
$conn->close();
?>  
<!DOCTYPE html>
<html>
<head>
    <title>indexsignup</title>
    <link rel="stylesheet" type="text/css" href="part.css">
    
</head>
<body>

    <div class="blood">
        <div class="logo">
            <p><h2><img src="bloodlogo.jpg" width="130px" height="100px"style="vertical-align:middle"> ONEBLOOD</h2>
            <h3>Bring a life back with your power</h3></p>           
         </div>
    </div>
<h2>Sign in/up Form</h2>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="" method="post">
            <h1>Create Account</h1>
            <span>or use your email for registration</span>
            <br><br>
            <input type="text" placeholder="Name" name="firstname" />
            <input type="email" placeholder="Email" name="email"/>
            <input type="password" placeholder="Password" name="password"/>
            <button type="submit1" name="signup" value="signup">Sign Up</button>
        </form>
    </div>

    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signin"><a href="login21.php">Sign In</a></button>
            </div>
        </div>
    </div>
</div>
</body>
</html>