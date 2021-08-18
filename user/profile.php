<?php 
// error_reporting(0);
session_start();

// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true )
// {
//     header("location:userlogin.php");
//     exit;
// }

include("connection.php");
include("sidebar.php");

 $sql = mysql_query("SELECT user_name, branch from users  WHERE roll_num = '".$_SESSION['rollnum']."'");
// $s = mysql_query($con,$sql);
 $row = mysql_fetch_array($sql);
// $res = mysqli_fetch_assoc($s);

// while($row){
//     $name = $row['user_name'];
// }



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
    <title>Student Dashboard</title>
</head>
<body class="w3-light-grey">

<!-- <div class="w3-sidebar w3-bar-block" style="width:15%; margin-left:5px;margin-top:10px; margin-bottom:10px ; background-color: #333; color: white;">
    <div class="w3-container w3-center" style="padding-top:10px;">
        <img src="/img/11.png" alt="Student" text="Student" style="width: 50%;">
        <h4>Student Dashboard</h4>  
        <img src="/img/12.jpg" alt="Profile" text="profile" style="width: 15%; ">
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="user_logout.php"><img src="/img/lg.jpg" alt="Logout" text="logout" style="width: 15%; "></a>
        <hr style="color: white;">
    </div>
        <h4 class="w3-bar-item w3-button w3-hover-green">My Subjects</h4>
        <h4 class="w3-bar-item w3-button w3-hover-green">Add Subjects</h4>
        <h4 class="w3-bar-item w3-button w3-hover-green">Lodge Complaint</h4>
        <h4 class="w3-bar-item w3-button w3-hover-green">My Complaints</h4>

    


</div> -->
<div class="w3-container" style="margin-left:17%;margin-top:10px; margin-right:50px ; ">

<div class="w3-center w3-round-xlarge" style="width:50%;margin: auto;background-color: #42B5F3">
    <h2>Profile</h2>
</div>
<br><br>
    <a href="user_dash.php"><button class="w3-button w3-red w3-medium">Back</button></a>
<br><br>
<div class="w3-card-2 " style="width:50%; margin: auto;">
    <!-- <form action="">
        Name: 
    </form> -->
    <div class="w3-row">
        <div class="w3-col s6">
            <table class="w3-table">
                <tr>
                    <td>Name:</td>
                    <td><?php echo $row['user_name']; ?>  </td>
                </tr>
                <tr>
                    <td>Roll Number:</td>
                    <td><?php echo $_SESSION['rollnum']; ?>  </td>
                </tr>
                <tr>
                    <td>Branch:</td>
                    <td><?php echo $row['branch']; ?>  </td>
                </tr>
                <tr>
                    <td>Year of Admission:</td>
                    <td>In progress</td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td>In progress</td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><a href="user_pwd.php?q=<?php echo $_SESSION['rollnum']; ?>" target="_blank">Change password</a></td>
                </tr>
            </table>
        </div>
        <div class="w3-col s6">
            <form action="upload_pic.php" method="post" enctype="multipart/form-data">
                <table class="w3-table">
                    <tr>
                        <img src="/img/userpic.png" alt="" style="width:33%; margin-left:45%; padding: 10px">
                    </tr>
                    <tr>
                        <!-- <img src="/img/userpic.png" alt="" style="width:20%; margin-left:25%;"> -->
                        <input type="file" name="pic" id="pic">
                        <input type="submit" value="Change Profile Picture" name="submit" >
                        <!-- <button class="w3-button w3-green w3-small" style="margin-left:25%">Change Profile Picture</button> -->
                    </tr>
                </table>
            </form>
        </div>

    </div>
            


</div>
        <div class="w3-container" style="display:none;">
            <div class="w3-container w3-green" name="password_div" id="password_div" style="font-size: 30px; margin-top: 16px;">
                    Change Password
            </div>
                <form action="" method="post" class="w3-container">
                    <p>
                    <label for="current_pass">Current Password:</label>
                    <input type="password" name="current_pass" id="current_pass" class="w3-input" required>
                    </p>
                    <p>
                    <label for="current_pass">New Password:</label>
                    <input type="password" name="new_pass" id="new_pass" class="w3-input" required>
                    <input type="checkbox" name="" id="" class="w3-check" onclick="seePass()" ><label for=""> See password</label>
                    </p>
                    <p>
                        <input type="submit" name="submit" id="submit" value="Change password" class="w3-button w3-border">
                    </p> 
                </form>
        </div> 

</div>

    
    



</body>
</html>