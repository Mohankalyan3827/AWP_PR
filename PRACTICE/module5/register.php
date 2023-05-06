<!DOCTYPE html>
<html>
<head>
  <title>Student Registration</title>
</head>
<body>
  <h1>Student Registration Confirmation</h1>
  <?php
  $name = $_POST["name"];
  $email = $_POST["email"];
  // $major = $_POST["major"];
  $year = $_POST["year"];

  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment22";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// retrieve input data
$name = $_POST["name"];
$email = $_POST["email"];
$year = $_POST["year"];
// insert into database
$sql = "INSERT INTO details (name,email,year ) VALUES ('$name', '$email', ' $year')";
if ($conn->query($sql) === TRUE) {
  echo "<p>deatils added successfully.</p>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<?php
  // validate inputs
  if (empty($name) || empty($email) || empty($year)) {
    echo "<p>Please fill in all required fields.</p>";
  } else {
    // save to database or send email confirmation, etc.
    echo "<p>Thank you for registering, $name!</p>";
    echo "<p>Your email address is: $email</p>";
    // echo "<p>Your major is: $major</p>";
    echo "<p>Your year is: ";
    switch ($year) {
      case 1:
        echo "Junior";
        break;
      case 2:
        echo "Senior";
        break;
      case 3:
        echo "super senior";
        break;
      default:
        echo "Unknown";
    }
    echo "</p>";
  }
  ?>
</body>
</html>