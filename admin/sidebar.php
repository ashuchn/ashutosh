<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <title>Document</title> -->
</head>
<body>
<div class="w3-sidebar w3-pale-red w3-bar-block" style="width:15%; margin-left:10px;">
                <h3 class="w3-bar-item w3-center"><img src="/img/admin.png" alt="admin"  style="width:60px; height: 60px;"></h3>
                <h3 class="w3-bar-item w3-button w3-green"><a href="admin_dash.php">Dashboard</a></h3>
                <a href="stud_rec.php" class="w3-bar-item w3-button">Registered Students</a>
                <!-- <button class="w3-bar-item w3-button">Page under</button> -->
                <!-- Dropdown-->
                <!-- <ul class="w3-ul">
                <a href="all_comp.php" class="w3-bar-item w3-button"><li>All Complaints</li></a>
                <a href="proc_comp.php" class="w3-bar-item w3-button"><li>In Process</li></a>
                <a href="solv_comp.php" class="w3-bar-item w3-button"><li>Solved</li></a>
                
                </ul> -->
                <div class="w3-dropdown-click">
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
        </div>
</body>
</html>