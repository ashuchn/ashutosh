<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true )
{
    header("location:adminlogin.php");
    echo "Invalid Credentials";
    exit;
}
include("conn.php");
include("sidebar.php");

// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true )
// {
//     header("location:adminlogin.php");
//     echo "Invalid Credentials";
//     exit;
// }

?>

<?php 
error_reporting(0);
include("user/connection.php");
include("user/newuser.php");

if(isset($_POST['submit'])){
    $roll = $_POST['rollno'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $branch = $_POST['branch'];

    $exist_query = "SELECT * from users where roll_num = '$roll'";
    $result = mysqli_query($con,$exist_query);
    $rows_exist = mysqli_num_rows($result);

    if($rows_exist > 0)
{
    
    echo ("<script LANGUAGE='JavaScript'>
    alert('Student already exists.');
    window.location.href='stud_rec.php';
    </script>");

}
else
{
    $error = true;
    $query = "insert into users(roll_num,user_name,password,email,branch) values('$roll','$name',
                '$password','$email','$branch')";

    $result = mysqli_query($con,$query);

    if($result){
        $_SESSION['name'] = $name;
        // header("refresh: 1; url = userlogin.php");
        // $test = "New user created successfully!!!";
        echo ("<script LANGUAGE='JavaScript'>
					alert('$name;Student is successfully added');
					window.location.href='userlogin.php';
					</script>");
    }
    else{
        echo "pls check your query";
    }
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body, h1, h2, h3, h4, h5, h6  {
      font-family: Roboto, sans-serif;
    }
    
    </style>
    <title>Records</title>
</head>
<body class="w3-light-grey" >
        

        <!-- <div class="w3-sidebar w3-pale-red w3-border w3-bar-block w3-card-4" style="width:15%; margin-left:10px; margin-bottom:100px">
        <h3 class="w3-bar-item w3-center"><img src="/img/admin.png" alt="admin"  style="width:60px; height: 60px;"></h3>    
        <h3 class="w3-bar-item"><a href="admin_dash.php">Dashboard</a></h3>
            <a href="stud_rec.php" class="w3-bar-item w3-button w3-green ">Registered Students</a> -->
            <!-- <a href="#" class="w3-bar-item w3-button">Link 1</a>
            <a href="#" class="w3-bar-item w3-button">Link 1</a> -->
            <!-- <div class="w3-dropdown-click">
                    <button class="w3-button" onclick="myfunction()">Complaints</button>
                        <div id="Demo" class="w3-dropdown-content w3-bar-block w3-border">
                        <a href="all_comp.php" class="w3-bar-item w3-button">All Complaints</a>
                                <a href="pending.php" class="w3-bar-item w3-button">Pending</a>
                                <a href="solved_comp.php" class="w3-bar-item w3-button">Solved</a>
                        </div>
                </div>  
                                <a href="#" class="w3-bar-item w3-button">Link 1</a>
        </div>
        </div> -->
        

        <div style="margin-left:17%;margin-top:20px;margin-right:10%">
        
                <div class="w3-container w3-card-4 w3-teal w3-center">
                    <h2>Admin Panel</h2>
                </div>
                
                <hr>
                <div class="w3-container w3-card-2" style="width:50%;margin:auto;">
      <div><br>
        <p style="color: red; margin: auto; width:30%;">All Fields are mandatory</p>
      <form action="" class="w3-form" name="reg_form" onsubmit="return validation()" method="post" style="width:100%;">
              <p>
              <label for="rollno">Roll Number</label>
              <input type="text" name="rollno" id="rollno" class="w3-input" placeholder="Enter your Roll Number">
              </p>
                <p>
              <label for="name">Name</label>
               <input type="text" name="name" id="name" class="w3-input" placeholder="Enter your name">
               </p>
               <p>
              <label for="email">Email</label>
               <input type="email" name="email" id="email" class="w3-input" placeholder="Enter your email">
               </p>
               <p>
              <label for="branch">Select your Branch</label><br>
              <select name="branch" id="branch" class="w3-select"  style="width:50%;">
                <option value="" >Choose your Branch</option>
                <option value="Btech">Btech</option>
                <option value="BBA">BBA</option>
                <option value="MBA">MBA</option>
                <option value="BCA">BCA</option>
                <option value="MCA">MCA</option>
                </select>
               </p>
               <label for="password">Password</label>
               <input type="password" name="password" id="password" class="w3-input" placeholder="Enter your password">
               </p>
             <input type="submit" name="submit" id="submit" class="w3-input w3-teal w3-hover-red w3-border w3-round-xxlarge">
          <br></form>
      </div>
      </div>

<script>
function validation() {
  var x = document.forms["reg_form"]["rollno","name","email","branch","password"].value;
  if (x == "") {
    alert("All fields must be filled out");
    return false;
  }
}
</script>
                <br>
                <div class="w3-container w3-grey" >
                <p align="center">Solveit Copyright Reserved 2021</p>
                </div>
                <br>
            </div>


            <script>
        function myfunction()
        {
            var x = document.getElementById("Demo");
            if (x.className.indexOf("w3-show") == -1) {
                x.className += " w3-show";
            }
             else { 
                x.className = x.className.replace(" w3-show", "");
            }
        }
</script>
</body>
</html>
                    