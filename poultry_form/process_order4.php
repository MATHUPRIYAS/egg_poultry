<?php
// Retrieve form data
$name = $_POST['name'];

$product = $_POST['product'];
$quantity = $_POST['quantity'];
$address = $_POST['address'];
$city = $_POST['city'];



// Connect to database (assuming MySQL database)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "backend";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert order data into database
$sql = "INSERT INTO quailegg (name,  product, quantity, address,city)
VALUES ('$name',  '$product', '$quantity', '$address','$city')";

if ($conn->query($sql) === TRUE) {
    header("location:succes.html");
} else {
    echo "Error submitting order: " . $conn->error;
}

$conn->close();
?>