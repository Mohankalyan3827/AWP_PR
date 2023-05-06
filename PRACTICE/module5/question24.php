<!DOCTYPE html>
<html>
<head>
  <title>Comment Form</title>
</head>
<body>
  <h1>Leave a Comment</h1>
  <form action="add_comment.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>
    <label for="comment">Comment:</label>
    <textarea id="comment" name="comment" rows="4" cols="50" required></textarea><br>
    <input type="submit" value="Submit">
  </form>
  
  <h2>Previous Comments:</h2>
  <?php include "display_data.php"; ?>
</body>
</html>