<?php

$host = "localhost";
$user = "root";
$pass = "";
$db_name = "ashutosh";

$con = mysql_connect($host,$user,$pass);
if(!$con){
    echo "unable to connect to db";
}
$db =  mysql_select_db($db_name,$con);
if(!$db){
    echo "unable to connect to db";
}


?>