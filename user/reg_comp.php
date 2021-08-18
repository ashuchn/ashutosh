<?php 
include("connection.php");
session_start();
// error_reporting(0);
// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true )
// {
//     header("location:userlogin.php");
//     exit;
// }

$query = "SELECT * from users where roll_num = '".$_SESSION['rollnum']."'";
$result = mysql_query($query);

$row = mysql_fetch_array($result);

     $username = $row['user_name'];



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
    <title>Register Complaint</title>
    <script>
        function validateForm() 
        {
            var x = document.forms["insert"]["rollno"]["name"]["category"]["comp"].value;
            if (x == "") {
                alert("Name must be filled out");
                return false;
            }
        }
    </script>
</head>
<body style="background-color: #F7F7E4;">
    <div class="w3-container ">

    
<div  class="w3-white w3-border w3-round-xlarge" style="margin-left:17%;margin-top:20px;margin-right:10%">
    <div class="w3-container w3-card w3-border w3-round-xlarge" style="margin:auto;">
        <div>
            <hr>
            <form action="insertcomp.php" class="w3-form" name="insert" method="post" onsubmit="return validateForm()">
                <div style="width: 30%;">
                    <label for="rollno">Roll Number:</label>
                    <input type="text" name="rollno" id="rollno" class="w3-input" value="<?php echo $_SESSION['rollnum'] ?>" readonly> 
                </div>
                    
                <p>
                    <div style="width: 30%;">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="w3-input" readonly value="<?php echo $username ?>">
                    </div>
                    
                </p>
                <!-- <div style="width: 50%;">
                    <label for="Category">Category:</label>
                    <select name="category" id="category" class="w3-select">
                        <option value="">Choose an Option</option>
                        <option value="Hostel">Hostel</option>
                        <option value="Transport">Transport</option>
                        <option value="Canteen">Canteen</option>
                    </select>    
                </div> -->

                <div class="w3-row">
                    <div class="w3-col s6" >
                        <label for="Category">Category:</label>
                        <select name="category" id="category" class="w3-select" style="width: 89%;">
                            <option value="">Choose an Option</option>
                            <option value="Hostel">Hostel</option>
                            <option value="Transport">Transport</option>
                            <option value="Canteen">Canteen</option>
                            <option value="Other">Other</option>
                        </select>    
                    </div>
                    <div class="w3-col s6" style="display: none;">
                        <label for="sub category">Sub-Category:</label>
                            <select name="sub_category" id="sub_category" class="w3-select">
                                <option value="">Choose an Option</option>
                                <option value="Food">Food</option>
                                <option value="Rooms Allocation">Rooms Allocation</option>
                                <option value="Request for appliances">Request for appliances</option>
                                <option value="Change pickup/drop location">Change pickup/drop location</option>
                                <option value="Other Transport problems">Other Transport problems</option>
                                <option value="Birthday celebration in canteen">Birthday celebration in canteen</option>
                            </select>
                    </div>
                </div>

                <!-- <div style="width: 50%">
                        <label for="sub category">Sub-Category:</label>
                        <select name="sub_category" id="sub_category" class="w3-select">
                            <option value="">Choose an Option</option>
                            <option value="Hostel">Hostel</option>
                            <option value="Transport">Transport</option>
                            <option value="Canteen">Canteen</option>
                        </select>
                </div> -->
                <div style="width: 50%">
                    <p>
                        <label for="complaint">Complaint:</label>
                        <textarea name="comp" id="comp" class="w3-input" cols="60" rows="3"></textarea>
                    </p>
                </div>
                <input type="submit" class="w3-button w3-green" id="submit" name="submit">
                <hr>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>