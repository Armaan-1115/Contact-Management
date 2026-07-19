<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contacts-Form</title>
</head>
<body>
    <h1>Contacts Registration Form</h1>
    <br>
    <form action="add_contact.php" method="post">
        <label for="name">Username:</label>
    <input type="text" name="name" id="name"  placeholder="Enter Username" required>
    <br>
    <label for="city">City:</label>
    <input type="text" name="city" id="city" placeholder="Enter Your City Name" required>
    <br>
    <label for="phone">Number:</label>
    <input type="text" name="phone" id="phone" placeholder="Enter Your Number" required>
    <br>
    <label for="email">Email Address:</label>
    <input type="email" name="email" id="email" placeholder="Enter Your Email" required>
    <br>
    <button type="submit" name="submit">Save Contact</button>
    </form>
    <br> <br>
    <?php
    $sql="SELECT * FROM contacts";
    $result=mysqli_query($conn, $sql);
    ?>

    <form action="search.php" method="GET">
        <input type="text" name="search" placeholder="Search by Name" required>
        <button type="submit">Search</button>
    </form>
    <br>


    <h2>Contact List</h2>
    <table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>City</th>
        <th>Phone</th>
        <th>Gmail</th>
        <th>Action</th>
    </tr>
    <?php
    while($row=mysqli_fetch_assoc($result)){
        ?>
        <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['city'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['email'] ?></td>
       <td>
    <a href="edit_contact.php?id=<?php echo $row['id']; ?>">Edit</a> |
    <a href="delete_contact.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>
    
    </tr>

    <?php
    }
    ?>
    </table>
    
    
</body>
</html>