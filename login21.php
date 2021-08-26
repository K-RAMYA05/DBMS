<?php        
    $host = "localhost";  
    $user = "root";  
    $password = "";  
    $db_name = "blood_bank";  
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    if(isset($_POST['login'])){
             $email =$_POST['email'];
        $password   =$_POST['password'];

          //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from user where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";
            echo "<script> location.href='home.html'; </script>";
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>signin</title>
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
    <div class="form-container sign-in-container">
        <form action="" method="post" onsubmit="=return validation()">
            <h1>Sign in</h1>
            <br><br>
            <input type="email" name="email" placeholder="Email" required="" />
            <br><br>
            <input type="password" name="password" placeholder="Password"  required="" />
            <a href="index1.php">Forgot your password?</a>
            <button type="submit" name="login" value="login">Sign In</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <button class="ghost" id="signup"><a href="index1.php">Sign Up</a></button>
            </div>
        </div>
    </div>
</div>
<script>
    function validation()  
            {  
                var id=document.f1.email.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("Email and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Email is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>
</body>
<footer>
    <h5>In case of forgot your password sign up again</h5>
</footer>
</html>