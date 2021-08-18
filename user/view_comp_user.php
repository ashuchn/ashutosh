<?php 
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true )
{
    header("location:user_dash.php");
    echo "Invalid Credentials";
    exit;
}
// error_reporting(0);
include("connection.php");

$id = $_GET['id'];

 $query = "SELECT * from newcomplaint where id = '".$id."' ";
// echo $query1 = "SELECT * from solved where id = '".$id."'";
 $result = mysql_query($query);
// $row = mysql_fetch_array($result);
// $result1 = mysql_query($query1);
// $num = mysqli_num_rows($result);

while ($row = mysql_fetch_assoc($result)) {?>
   <?php 
    $roll = $row['roll_num'];
    $name = $row['user_name'];
    $comp = $row['complaint'];
    $category = $row['category'];
    // $sub_cat = $row['sub_category'];
}

// while ($row = mysql_fetch_assoc($result1)) {
    // $id = $row['id'];
    // $roll = $row['roll_num'];
    // $name = $row['user_name'];
    // $comp = $row['complaint'];
    // $category = $row['category'];
    // // $sub_cat = $row['sub_category'];
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
    <style>
    body, h1, h2, h3, h4, h5, h6  {
      font-family: Roboto, sans-serif;
    }
    </style>
    <title>View Complaint</title>
</head>
<body style="background-color: #e0e0eb;">
    <div style="margin-left:17%;margin-top:20px;margin-right:10%">
                    <!-- <div class="w3-container w3-card w3-teal w3-center">
                        <h2></h2>
                    </div> -->
        <!-- <h3>Number of Complaints: <?php //echo $num ?></h3>         -->
        
        
        
            <div class="w3-container w3-white w3-border w3-round-xlarge" style="width: 50%; margin: auto;">
            <hr>
                <div class="w3-card-2 w3-border w3-round-xlarge " style="padding: 10px">
                    <p><h3><u>Complaint Number: </u><?php echo $id ; ?></p></h3>
                    <hr>
                    <div class="w3-row">
                            <div class="w3-col s6 ">
                                <p><b>Name:</b> <?php echo $name; ?></p>
                            </div>
                            <div class="w3-col s6  ">
                                <p><b>Roll Number:</b> <?php echo $roll ?></p>
                            </div>
                    </div>
                    <div class="w3-row">
                            <div class="w3-col s6">
                                <p><b>Category:</b> <?php echo $category ?></p>
                            </div>
                            <div class="w3-col s6">
                                <p><b>Sub-Category:</b><?php //echo $sub_cat ?> </p>
                            </div>
                    </div>
                    
                    <div class="w3-row">
                        <div class="w3-col s6">
                    <p><b>Issue:</b> <?php echo $comp ?> </p>  
                        </div>
                    </div>
                    <div class="w3-row">
                    <div class="w3-col s6">
                        <b>Status:</b>
                    </div>
                </div>
                </div>

                <br>

                <!-- <a //href="solved.php">
                    <button class="w3-button w3-teal w3-round-xxlarge">
                    Mark as done
                    </button>
                </a> -->
                <hr>
            
            </div>   
    </div>    
</body>
</html>