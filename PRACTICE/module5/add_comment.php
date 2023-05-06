<?php
// connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comments";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// retrieve input data
$name = $_POST["name"];
$comment = $_POST["comment"];

// insert into database
$sql = "INSERT INTO data (name, comment) VALUES ('$name', '$comment')";
if ($conn->query($sql) === TRUE) {
  echo "<p>Comment added successfully.</p>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>