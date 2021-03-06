<?php   
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true )
{
    header("location:adminlogin.php");
    echo "Invalid Credentials";
    exit;
}
    // header("refresh: 3; url = stud_rec.php");

    include("conn.php");
    include "sidebar.php";

    $query = "SELECT * from pending order by id desc";

    $result = mysql_query($query);
    $_SESSION['num'] = mysql_num_rows($result);

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
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.css"> 
	
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/ </script>
	
	<script>
		$(document).ready( function () {
		$('#table_id').DataTable();
		} );
	</script>
    <script src="/admin/script/dropdown.js"></script>

    <style>
    body, h1, h2, h3, h4, h5, h6  {
      font-family: Roboto, sans-serif;
    }
    
    </style>
    <title>Complaints</title>
</head>
<body class="w3-light-grey" >
        

        <!-- <div class="w3-sidebar w3-pale-red w3-bar-block" style="width:15%; margin-left:10px;">
        <h3 class="w3-bar-item w3-center"><img src="/img/admin.png" alt="admin"  style="width:60px; height: 60px;"></h3>
                <h3 class="w3-bar-item w3-button"><a href="admin_dash.php">Dashboard</a></h3>
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
                                <a href="all_comp.php" class="w3-bar-item w3-button w3-green">All Complaints</a>
                                <a href="pending.php" class="w3-bar-item w3-button">Pending</a>
                                <a href="#" class="w3-bar-item w3-button">Solved</a>
                        </div>
                </div>  
                                <a href="#" class="w3-bar-item w3-button">Link 1</a>
        </div> -->

        <!-- logout -->
        <!-- <div class="w3-right" style>
                <a href="admin_logout.php"><button class="w3-button w3-large w3-round-large" id="logout" name="logout" style="width:100%">Logout</button></a>
        </div> -->

        <div style="margin-left:17%;margin-top:20px;margin-right:10%">
                <div class="w3-container w3-card w3-teal w3-center">
                    <h2>Admin Panel</h2>
                </div>
            <hr>
            <div class="w3-container" style="width: 50%; margin-left: 40%;"><h3>All Complaints</h3></div>
            <hr>
        <div class="w3-container" style="margin-left:2%% ;" >
            <p>Number of complaints: <?php echo $_SESSION['num'] ?></p>
        </div>
        <div class="w3-container" style=" width: 90%; margin: auto;" >
            <table class="w3-table-all  w3-hover" id="table_id" class="display" style="colspan:10px;">
                <thead>
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
                    <th>
                        Name
                    </th>
                    <th>
                        View Complaint
                    </th>
                    <!-- <th>
                        Status
                    </th> -->
                </tr>
				</thead>
                <?php
                    $i = 1;
                        while($row = mysql_fetch_assoc($result))
                        {
                            $id = $row['id'];
                            $roll = $row['roll_num'];
                            $username = $row['user_name'];
                            // $comp = $row['complaint'];
                        
                    
                    ?>
					<tbody>
                        <tr>
                            <td> <?php echo $i ?>  </td>
                            <td> <?php echo $id ?>  </td>
                            <td> <?php echo $roll ?>  </td>
                            <td align="center"> <?php echo $username ?> </td>
                            <td><a href="view_comp.php?id=<?php echo $id ?>" target="_blank">View </a></td>
                            

                        </tr>
                       </tbody> 
                    <?php $i++; } ?>

                
            </table>
        </div>




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