<?php 

include("connection.php");
// session_start();
if(!empty($_POST['forgot_pass']))
{
    $roll = $_POST['rollnumber'];
}

$find = "SELECT * from users where roll_num = '$roll' ";
$a = mysql_query($find);
$p = mysql_fetch_array($a);
$i =  $p['password'];
$num = mysql_num_rows($a);
if($num>0 && $num==1){
    // $i;
    // echo "<br>";
    // echo $db_pass;
    // $_SESSION['db_pass'] = $db_pass;
    // echo $_SESSION['db_pass'];
    // $user_pass = $_SESSION['db_pass']; 
    echo ("<script LANGUAGE='JavaScript'>
    alert('Password is: '".$i."');
    window.location.href='userlogin.php';
    </script>");
}
else{
    echo ("<script LANGUAGE='JavaScript'>
    alert('Roll Number not found');
    window.location.href='userlogin.php';
    </script>");
}




?>