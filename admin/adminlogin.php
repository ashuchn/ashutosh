<?php 
include("conn.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $email = $_POST['email'];
  $pass = $_POST['password'];


  $query = "SELECT * from admin where email = '$email' and password = '$pass'";
  $result = mysql_query($query);
  //selects rows which match the roll number and password
  $num = mysql_num_rows($result);

  if($num == 1)
  {
    $login  = "true";
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    header("location:admin_dash.php");
  }
  else
  {
    echo  "Invalid Credentials" ;
  }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <style>
    body, h1, h2, h3, h4, h5, h6  {
      font-family: Roboto, sans-serif;
    }
    </style>
    <title>Admin Portal</title>
</head>
<body>
<div class="w3-container w3-center w3-pale-red">
        <h2>Solveit Complaint Portal</h2>
        Web platform for complaint registration
    </div>
    <hr>
    
    <!-- <div class="w3-container w3-grey">
        <marquee behavior="alternate" direction="right">
            Hello, My name is ashutosh Chauhan.
        </marquee>
    </div><br> -->
    <div class="w3-bar w3-teal">
        <a href="/index.html" class="w3-bar-item w3-button">Home</a>
         <a href="/user/userlogin.php" class="w3-bar-item w3-button">User Login</a> 
        <!-- <a href="/admin/adminlogin.php" class="w3-bar-item w3-button">Admin Login</a>
        <a href="/user/registration.php" class="w3-bar-item w3-button">Registration</a>
        <a href="/extras/help.php" class="w3-bar-item w3-button">Help</a> --> 
      </div><br>

      <div class="w3-container" style="width:50%;margin:auto;">

<form action="" class="w3-form" method="post" style="width:100%;" >
  <!-- <p>
      <img src="/img/ad.png" alt="" style="width:100px;height:100px;" >
  </p> -->
  <p>
  <label for="email" >Email</label>
  <input type="email" name="email" id="email" placeholder="Enter your email" class="w3-input w3-border w3-round-xxlarge"> 
  </p>
  
  <p>
  <label for="password">Password</label>
  <input type="password" name="password" id="password" placeholder="Enter your Password" class="w3-input w3-border w3-round-xxlarge">
  </p>
  <p>
    <input type="submit" class="w3-input w3-teal w3-hover-red w3-border w3-round-xxlarge" name="login" id="login" value="Login">
  </p>

</form>
</div>

</body>
</html>