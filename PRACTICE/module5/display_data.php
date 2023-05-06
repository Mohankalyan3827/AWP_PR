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

// retrieve comments from database
$sql = "SELECT name, comment FROM data";
$result = $conn->query($sql);

// display comments
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<p><strong>" . $row["name"] . "</strong> on "  . "<br>" . $row["comment"] . "</p>";
  }
} else {
  echo "<p>No comments yet.</p>";
}

$conn->close();
?>