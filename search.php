<?php
include("config.php");

$search=$_GET["search"];

$sql= "SELECT * FROM contacts WHERE name LIKE '%$search%'";

$result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Search Result</h1>
    <a href="index.php"><- Back</a>
    <br><br>
    <table border="1" cellpadding="10" >
        <tr>
            <th>Name</th>
            <th>City</th>
            <th>Phone</th>
            <th>Email</th>
        </tr>

        <?php
        while($row=mysqli_fetch_assoc($result)){
            ?>

        <tr>
            <td> <?php echo $row["name"]; ?> </td>
            <td>  <?php echo $row["city"];?>  </td>
            <td> <?php echo $row["phone"]; ?> </td>
            <td> <?php echo $row["email"]; ?> </td>
        </tr>
        <?php
        }
        ?>


    </table>

    
</body>
</html>