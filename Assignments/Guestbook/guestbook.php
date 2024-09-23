<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guestbook</title>
</head>

<body>
  <h1>Leave a Message</h1>

  <form action="guestbook.php" method="POST">
    <label for="name">Your Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="message">Your Message:</label><br>
    <textarea id="message" name="message" rows="5" cols="40" required></textarea><br><br>

    <input type="submit" value="Submit Message">
  </form>

  <br><br>
  <a href="messages.php">View All Messages</a>
</body>

</html>

<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the submitted name and message
  $name = htmlspecialchars($_POST['name']);
  $message = htmlspecialchars($_POST['message']);

  // Format the message for storing
  $entry = "Name: $name\nMessage: $message\n---\n";

  // Append the message to the guestbook.txt file
  file_put_contents("guestbook.txt", $entry, FILE_APPEND);

  // Redirect to messages page after submission
  header("Location: messages.php");
  exit();
}
?>