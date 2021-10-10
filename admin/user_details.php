<?php 
include("conn.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" type="text/css" href="/Assets/DataTables/css/jquery.dataTables.css"/> -->
    <!-- <script type="text/javascript" src="/Assets/DataTables/js/jquery.dataTables.js"></script> -->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <style>
    body, h1, h2, h3, h4, h5, h6  {
      font-family: Roboto, sans-serif;
    }
    </style>
    <script>
        $(document).ready(function() {
        $('#example').dataTable();    
 });
    </script>
    <title>User Credentials</title>
</head>
<body>
    <div class="w3-panel w3-teal" align="Center">
        <h3>User Details</h3>
    </div>
    <div class="w3-container" align="center" style="width: 75%; margin: auto;">
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th style="width: 90px;">Roll number</th>
                    <th style="width: 270px;">Name</th>
                    <th style="width: 170px;">Stream</th>
                    <th style="width: 174px;">Password</th>
                </tr>
            </thead>
            <tbody align="center">
                <?php 
                $s = mysql_query("SELECT * from users");
                while($row = mysql_fetch_array($s)){?>
                    <tr>
                        <td><?php echo $row['roll_num']; ?></td>
                        <td><?php echo $row['user_name']; ?></td>
                        <td><?php echo $row['branch']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                    </tr>
                <?php }
                ?>
            </tbody>     
        </table>
    </div>
</body>
</html>