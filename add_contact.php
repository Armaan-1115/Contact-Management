<?php
include("config.php");

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $city = $_POST["city"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $sql = "INSERT INTO contacts (name, city, phone, email)
    VALUES ('$name', '$city', '$phone', '$email')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>