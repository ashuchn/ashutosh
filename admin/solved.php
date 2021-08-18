<?php 

include("conn.php");


$query = "SELECT id from pending";
$result = mysqli_query($con,$query);

while($row = mysqli_fetch_assoc($result)){
    // $roll = $row['roll_num'];
    $id = $row['id'];
}


$query1 = "INSERT into solved SELECT * from pending WHERE id = '$id'";
$query2 = "DELETE from pending WHERE id = '$id' ";

$result1 = mysqli_query($con,$query1);
$result2 = mysqli_query($con,$query2);

if($result1 and $result2)
{
    echo "Hi<br>";
    header("location: pending.php");
    echo "Complaint solved";
    echo "<br>";
    
}
else
{
    echo "Check your query";
}


?>