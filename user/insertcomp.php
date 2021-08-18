<?php
session_start();
include("connection.php");

$roll = $_POST['rollno'];
 $name = $_POST['name'];
 $text = $_POST['comp'];
 $cat = $_POST['category'];
// echo "<br>";

 $query = "INSERT into newcomplaint(roll_num,user_name,complaint,category) values('$roll','$name','$text','$cat')";
 $query1 = "INSERT into pending(roll_num,user_name,complaint,category) values('$roll','$name','$text','$cat')";

$result = mysql_query($query);
$result2 = mysql_query($query1);


if($result && $result2)
{
    // echo "Complaint created";
    // echo "<br>";
    // // echo "Complaint number is: ";
    // echo "You will be redirected to dashboard in 3 seconds";
    // header("refresh: 3; url = user_dash.php");
    // // $_SESSION['Roll'] = $roll;
    // // $_SESSION['Name'] = $name;
    echo "<script LANGUAGE='JavaScript'>
    alert('Complaint Registered');
    window.location.href='user_dash.php';
    </script>";

}
else
{
    echo "pls chk your query". mysql_error();
}

?>