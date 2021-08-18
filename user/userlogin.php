<?php 
include("connection.php");

if(isset($_POST['login']))
{
  $roll = $_POST['rollno'];
  $pass = $_POST['password'];


   $query = "SELECT * from users where roll_num = '".$roll."' and password = '".$pass."' ";
   $result = mysql_query($query);
   $num = mysql_num_rows($result);
// exit;
  if($num == 1)
  {
    
    $login  = "true";
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['rollnum'] = $roll;
    // $roll = $_SESSION['rollnum'];
    // echo $roll;
    // exit;
    header("location:user_dash.php");
  }
  else
  {
    echo ("<script LANGUAGE='JavaScript'>
    alert('Invalid Credentials.');
    window.location.href='userlogin.php';
    </script>");
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
    <title>User Login</title>
</head>
<body class="">
<div class="w3-container w3-center w3-pale-red">
        <h2>Solveit Complaint Portal</h2>
        Web platform for complaint registration
    </div>
    <hr>
    <div class="w3-bar w3-teal">
        <a href="/index.html" class="w3-bar-item w3-button">Home</a>
         <a href="/user/registration.php" class="w3-bar-item w3-button">New User? Register here</a>

        <!-- <a href="/user/userlogin.php" class="w3-bar-item w3-button">User Login</a> -->
        <!-- <a href="/admin/adminlogin.php" class="w3-bar-item w3-button">Admin Login</a> -->
        <!-- <a href="/user/registration.php" class="w3-bar-item w3-button">Registration</a>
        <a href="/help.php" class="w3-bar-item w3-button">Help</a> -->
      </div><br>

      <!-- <div class="w3-card w3-left">
        <img src="/img/3.jpg" alt="demo">
      </div> -->

    <!-- <div class="w3-panel w3-red w3-center">
      <p> <?php echo $err ?> </p>
    </div> -->

    <div class="w3-container" style="width:50%;margin:auto;">

      <form action="" class="" method="post"  >
        <p>
        <label for="rollno" >Roll Number</label>
        <input type="text" name="rollno" id="rollno" placeholder="Enter your Roll Number" class="w3-input w3-border w3-round-xxlarge"> 
        </p>
        
        <p>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your Password" class="w3-input w3-border w3-round-xxlarge">
        </p>
        <p style="width:40%;">
          <input type="submit" class="w3-input w3-teal w3-hover-red w3-border w3-round-xxlarge" name="login" id="login" value="Login">
        </p>

      </form>
    </div>
    
</body>
</html>