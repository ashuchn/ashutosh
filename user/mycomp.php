<?php 

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true )
{
    echo "<script LANGUAGE='JavaScript'>
    alert('Login First');
    window.location.href='userlogin.php';
    </script>";
    // header("location:userlogin.php");
    exit;
}
// echo $_SESSION['rollnum'];
// exit;
include("connection.php");
include("sidebar.php");
 $sql = mysql_query("SELECT * from newcomplaint where roll_num = '".$_SESSION['rollnum']."' ");
//  $res = mysql_fetch_array($sql);
 $num = mysql_num_rows($sql);
//  echo $num;   


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
    <title>All Complaints</title>
</head>
<body class="w3-light-grey">

<!-- <div class="w3-sidebar w3-bar-block" style="width:15%; margin-left:5px;margin-top:10px; margin-bottom:10px ; background-color: #333; color: white;">
    <div class="w3-container w3-center" style="padding-top:10px;">
        <img src="/img/11.png" alt="Student" text="Student" style="width: 50%;">
        <h4><//?php  echo $res['user_name']; ?></h4>
        <//?php  echo $res['roll_num']; ?>
        <br>
         <p>
            <#?php 
                include("connection.php");
                 $sql = "SELECT roll_num , user_name FROM users ";
                // exit;
                $s = mysqli_query($con,$sql);
                // exit;
                $row = mysqli_fetch_assoc($s);
                // exit;
                while($row){ ?>
            <#?php
                    $nm = $row['user_name'];
                    $rn = $row['roll_num'];
                }
            ?>
            <#?php echo $nm; ?>
        </p>   -->
       <!-- <a href="profile.php"><img src="/img/12.jpg" alt="Profile" text="profile" style="width: 15%; "></a>
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="user_logout.php"><img src="/img/lg.jpg" alt="Logout" text="logout" style="width: 15%; "></a>
        <hr style="color: white;">
    </div>
        <h4 class="w3-bar-item w3-button w3-hover-green">My Subjects</h4>
        <h4 class="w3-bar-item w3-button w3-hover-green">Add Subjects</h4>
        <a href="reg_comp.php"><h4 class="w3-bar-item w3-button w3-hover-green">Lodge Complaint</h4></a>
        <h4 class="w3-bar-item w3-button w3-hover-green">My Complaints</h4>

    


</div> -->
<div class="w3-container" style="margin-left:17%;margin-top:10px; margin-right:50px ; ">

<div class="w3-panel w3-card" style="background-color:#42B5F3">
    <h3 align="center">My Complaints</h3>
</div>
<br><br>
<a href="user_dash.php"><button class="w3-button w3-red">Back</button></a>
<br><br>
<b><u>No. of Complaints: <?php echo $num;  ?></u></b><br><br>
</div>
<div class="w3-container" style=" width: 67%; margin-left: 23%;" >
            <table class="w3-table-all w3-card-4 w3-hover" style="colspan:10px;">
                <tr>
                    <th>
                        S.No.
                    </th>
                    <th>
                        Complaint No.
                    </th>
                    <th>
                        Roll Number
                    </th>
                    <!-- <th>
                        Name
                    </th> -->
                    <th>
                        View Complaint
                    </th>
                    <!-- <th>
                        Status
                    </th> -->
                </tr>
                <?php 
                $i = 1;
                    while($res = mysql_fetch_array($sql)){?>
                <?php
                        $id = $res['id'];
                        $roll = $res['roll_num'];
                        ?>
                    <tr>
                        <td> <?php echo $i; ?> </td>
                        <td> <?php echo $id; ?> </td>
                        <td> <?php echo $roll; ?> </td>
                        <td><a href="view_comp_user.php?id=<?php echo $id ?>" target="_blank">View </a></td>
                    </tr>
                  <?php 
                    $i++;
                } ?>  




                   

                
            </table>
        </div>
    
    



</body>
</html>