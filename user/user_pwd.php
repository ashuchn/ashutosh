<?php 
// include("sidebar.php");
include("connection.php");
$roll = $_GET['q'];

$sql = mysql_query("SELECT password from users where roll_num = '".$roll."' ");
$res = mysql_fetch_array($sql);
// echo($res);
// echo $res['password'];
$db_current_pass = $res['password'];

if(isset($_POST['submit']))
{
    $cur_pass = $_POST['current_pass'];
    $new_pass = $_POST['new_pass'];

    if($cur_pass == $db_current_pass){
        $update_pass = mysql_query("UPDATE users SET password = '".$new_pass."' where roll_num = '".$roll."' ");
        echo "<script LANGUAGE='JavaScript'>
        alert('Password Changed');
        window.location.href='profile.php';
        </script>";
    }
    else{
        echo "<script LANGUAGE='JavaScript'>
        alert('Current Password does not match');
        window.location.href='user_pwd.php?q=$roll';
        </script>";
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
    <title>Change Password</title>

<script>
    function seePass() {
  var x = document.getElementById("new_pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

</head>
<body class="w3-light-grey">
    <div class="w3-card-4 " style="width:25%; margin-top: 5%; margin-left: 32%;">
        <div class="w3-container" >
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