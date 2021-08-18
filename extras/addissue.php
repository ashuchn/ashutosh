<?php 

include("conn.php");

$roll = $_POST['rollno'];
$name = $_POST['name'];
$email = $_POST['email'];
$issue = $_POST['issue'];

$query = "INSERT into issue(roll_num,name,email,issue) values('$roll','$name',
            '$email','$issue')";

$result = mysqli_query($con,$query);

if($result){
    // header("location:help.php");
    // echo "Issue registered";
    echo ("<script LANGUAGE='JavaScript'>
    alert('Thanks for you valuable feedback.');
    window.location.href='help.php';
    </script>");
}
else{
    echo "pls check your query";
}


?>