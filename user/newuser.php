<?php 

session_start();
$error = false;

include("connection.php");

$roll = $_POST['rollno'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$branch = $_POST['branch'];

$exist_query = "SELECT * from users where roll_num = '$roll'";
$result = mysql_query($exist_query);
$rows_exist = mysql_num_rows($result);

if($rows_exist > 0)
{
    // $exist = false;
    // header("location: registration.php");
    // echo "Roll number already in exist in database.";
    // echo "<br>";
    // echo "Redirecting you to login page in 5 seconds";
    // header("refresh:5; url = userlogin.php");
    echo ("<script LANGUAGE='JavaScript'>
    alert('Student already exists.');
    window.location.href='registration.php';
    </script>");

}
else
{
    $error = true;
    $query = "insert into users(roll_num,user_name,password,email,branch) values('$roll','$name',
                '$password','$email','$branch')";

    $result = mysql_query($query);

    if($result){
        $_SESSION['name'] = $name;
        // header("refresh: 1; url = userlogin.php");
        // $test = "New user created successfully!!!";
        echo ("<script LANGUAGE='JavaScript'>
					alert(' $name Student is successfully added');
					window.location.href='userlogin.php';
					</script>");
    }
    else{
        echo "pls check your query";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>
<?php
    if( $error ) {
        if( $result ) 
          echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
        else
          echo "<script type='text/javascript'>alert('failed!')</script>";
      }
    ?>

        
    <img src="/img/loading.gif" alt="">
</body>
</html>