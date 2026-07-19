<?php
include("config.php");


$id= $_GET["id"];

$sql="SELECT * FROM contacts WHERE id='$id'";
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit Contact</h1>

    <form action="update_contact.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">

        <label>Username:</label>
        <input type="text" name="name" value="<?php echo $row['name'];?>"required>
        <br><br>
        <label>City:</label>
        <input type="text" name="city" value="<?php echo $row['city'];?>" required>
        <br><br>
        <label>Phone:</label>
        <input type="text" name="phone" value="<?php echo $row['phone'];?>" required>
        <br><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $row['email'];?>" required>
        <br><br>
        <button type="submit" name="update" >Update Contact</button>
    </form>
    
</body>
</html>