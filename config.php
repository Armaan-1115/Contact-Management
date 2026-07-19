<?php
$host="localhost";
$user="root";
$pass="";
$db="contact_management";

$conn=mysqli_connect($host,$user,$pass,$db);

if(!$conn){
    die("Connection Failed!");
}

?>
