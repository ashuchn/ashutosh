<?php   
// error_reporting(0);
session_start();
include "conn.php";
include "sidebar.php";
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true )
{
    header("location:adminlogin.php");
    echo "Invalid Credentials";
    exit;
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
    <title>Admin Dashboard</title>
</head>
<body class="w3-light-grey" >
        

        <!-- <div class="w3-sidebar w3-pale-red w3-bar-block" style="width:15%; margin-left:10px;">
                <h3 class="w3-bar-item w3-center"><img src="/img/admin.png" alt="admin"  style="width:60px; height: 60px;"></h3>
                <h3 class="w3-bar-item w3-button w3-green"><a href="admin_dash.php">Dashboard</a></h3>
                <a href="stud_rec.php" class="w3-bar-item w3-button">Registered Students</a> -->
                <!-- Dropdown-->
                <!-- <ul class="w3-ul">
                <a href="all_comp.php" class="w3-bar-item w3-button"><li>All Complaints</li></a>
                <a href="proc_comp.php" class="w3-bar-item w3-button"><li>In Process</li></a>
                <a href="solv_comp.php" class="w3-bar-item w3-button"><li>Solved</li></a>
                
                </ul> -->
                <!-- <div class="w3-dropdown-click">
                    <button class="w3-button" onclick="myfunction()">Complaints</button>
                        <div id="Demo" class="w3-dropdown-content w3-bar-block w3-border">
                                <a href="all_comp.php" class="w3-bar-item w3-button">All Complaints</a>
                                <a href="pending.php" class="w3-bar-item w3-button">Pending</a>
                                <a href="solved_comp.php" class="w3-bar-item w3-button">Solved</a>
                        </div>
                </div>  
                                <a href="addsubject.php" class="w3-bar-item w3-button">Add Subject</a>
                                <a href="assignsubject.php" class="w3-bar-item w3-button">Assign Subject</a>
                                <a href="feedback.php" class="w3-bar-item w3-button">Feedback</a>
        </div> -->
<!-- navbar -->
<div style="margin-left:17%;margin-top:20px;">

                <div class="w3-row">
                    <div class="w3-col s11 w3-teal w3-center"><h2>Admin Panel</h2></div>
                    <div class="w3-col s1  w3-right">
                        <a href="admin_logout.php"><button class="w3-button" id="logout"
                        name="logout">Logout</button></a>
                    </div>
                </div>
</div>                
            <!--<div class="w3-right" style>
                <a href="admin_logout.php"><button class="w3-button w3-large w3-round-large" id="logout"
                 name="logout" style="width:100%">Logout</button></a>
        </div>
        <div class="w3-container w3-card w3-teal w3-center">
                    <h2>Admin Panel</h2> -->
                </div>
        <div style="margin-left:17%;margin-top:20px;margin-right:10%">
                <!-- <div class="w3-container w3-card w3-teal w3-center">
                    <h2>Admin Panel</h2>
                </div> -->
                <br>

                <div class="w3-panel" style="margin-top: -4%; margin-left: -80%;">
                <p align="center">
                <?php 
                    // echo "Welcome,";
                    // echo $_SESSION['email'];    
                
                ?></p>
                </div>
                
                <hr>
                <div class="w3-container w3-center">
                    <u><h2>Page under construction</h2></u> 
                </div>


                <!-- <div class="w3-row">
                    <div class="w3-col s4">
                        <div class="w3-container ">
                            <div class="w3-card">
                                <div class="w3-container w3-center">
                                    All Complaints
                                </div>
                                <img src="/img/nn.jpg" alt="" srcset="" title="Test demo" style="width:100%">
                            </div>
                        </div>
                    </div>
                    <div class="w3-col s4 ">
                        <div class="w3-container">
                            <div class="w3-card">
                                <img src="/img/nn.jpg" alt="" srcset="" title="Test demo" style="width:100%">
                            </div>
                        </div>
                    </div>
                    <div class="w3-col s4 ">
                        <div class="w3-container">
                            <div class="w3-card">
                                <img src="/img/nn.jpg" alt="" srcset="" title="Test demo" style="width:100%">
                            </div>
                        </div>
                    </div> -->
                    
                    
                </div>
           
           
         
           
           <br><br>
           
           
           
           
          




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