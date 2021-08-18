<?php

$host = "localhost";
$user = "root";
$pass = "";
$db_name = "ashutosh";

$con = mysql_connect($host,$user,$pass);
if(!$con) {  
    die("Failed to connect with MySQL: " );  
}  
$db = mysql_select_db($db_name);
if(!$db){
    echo "db connection failed!!";
}

?>