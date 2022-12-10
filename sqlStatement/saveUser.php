<?php
$hostName = 'localhost';
$database = 'so';
$username ='root';
$pass = 'admin';

// Create connection
$conn = new mysqli($hostName,$username,$pass,$database,3306);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO usuarios (name, userName, password)
VALUES ('".$_POST["name"]."','".$_POST["userName"]."','".$_POST["password"]."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>