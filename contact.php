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

if(isset($_POST['feedback'])){
        $firstname       =$_POST['firstname'];
        $email      =$_POST['email'];
        $subject   =$_POST['subject'];
        $res = $conn->query("INSERT INTO `feedback`( `firstname`, `email`, `subject`) VALUES ('$firstname','$email','$subject')");
//echo"hello2";
      if($res){
    echo "<h1>THANKS FOR YOUR FEEDBACK</h1>";  
}
}
$conn->close();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact/feedback</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style2.css">


</head>
<body>
    <div class="container">
        <div class="logo">
           <p><h1><img src="bloodlogo.jpg" width="130px" height="100px"style="vertical-align:middle"> ONEBLOOD</h1>
            <h3>Bring a life back with your power</h3></p>           
        </div> 
        <div class="navbar">                   
        <nav>
            <ul>
            <li><a  href="home.html">HOME </a></li>
            <li><a href="user_r.php"> DONATION </a></li>
            <li><a href="request.php">  REQUEST </a></li>
            <li><a class="active"href="contact.php">FEEDBACK </a></li>
            </ul>
        </nav>
        </div>
    </br>
</br>
<div class="contain">
    <h2>Administratation info</h2></br>
    <h4>For any information contact oneblood@gmail.com</h4>
    <h1>Feedback Form</h1></br>

<div class="contact">
<form action="" method="POST">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your Email..">

    

    <label for="subject">Feedback</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>

    <input type="submit" name="feedback" value="Submit">
  </form>
</div>
</div>

</div>
</body>
</html>