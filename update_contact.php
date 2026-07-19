<?php
include("config.php");

if(isset($_POST["update"])){

$id=$_POST["id"];
$name=$_POST["name"];
$city=$_POST["city"];
$phone=$_POST["phone"];
$email=$_POST["email"];

$sql= "UPDATE contacts SET
name='$name',
city='$city',
phone='$phone',
email='$email'
WHERE id='$id' ";

$result=mysqli_query($conn,$sql);

if($result){
    header("Location: index.php");
    exit();
}
else{
    echo "Error:" .mysqli_error($conn);

}
}
?>