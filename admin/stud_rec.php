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

$query = "SELECT * from users";

$result = mysql_query($query);
$num = mysql_num_rows($result);

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
                <div class="w3-container w3-center">
                    <p><h3>List of Registered Students</h3></p>
                </div>

                <div class="w3-row">
                    <div class="w3-col s6">
                        <div class="w3-container ">
                            <button class="w3-button w3-green">
                                <a href="add_stud_admin.php">Add Student</a>
                            </button>    
                        </div>
                    </div>
                    <div class="w3-col s6">
                    <div class="w3-container w3-right">
                            <button class="w3-button w3-green">
                                <a href="stud_rec.php">Reload</a>
                            </button>    
                        </div>
                    </div>
                </div>

                <!-- <div class="w3-container w3-right">
                    <button class="w3-button w3-green">
                    <a href="stud_rec.php">
                        Reload
                    </a>
                    </button>    
                </div> -->

                <Div class="w3-container">
                    <u><b><p>Total Records: <?php echo $num ?></p></b></u>
                </Div>
                <div class="w3-container w3-center">
                    <table class="w3-table-all w3-hover w3-card-4" style="colspan:10px">
                    <tr>
                        <th>
                            S.No
                        </th>
                        <th>
                            Roll Number
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Branch
                        </th>
                    </tr>
                    
                    <?php
                        $i=1;
                        while($row = mysql_fetch_assoc($result))
                        {
                            $roll = $row['roll_num'];
                            $name = $row['user_name'];
                            $mail = $row['email'];
                            $branch = $row['branch'];
                        
                    
                    ?>
                        <tr>
                            <td> <?php echo $i ?>  </td>
                            <td> <?php echo $roll ?>  </td>
                            <td> <?php echo $name ?>  </td>
                            <td> <?php echo $mail ?>  </td>
                            <td> <?php echo $branch ?>  </td>
                        </tr>
                       <?php  $i++; ?>
                    <?php } ?>

                    </table>
                </div>
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
                    