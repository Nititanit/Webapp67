<?php
<link rel="stylesheet" href="Myregis.css">
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];



$sql = "INSERT INTO users (firstname, lastname, ...) VALUES ('$firstname', '$lastname', ...)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();   

?>