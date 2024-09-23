<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guestbook Messages</title>
</head>

<body>
  <h1>Guestbook Messages</h1>

  <?php
  // Check if the guestbook file exists
  if (file_exists("guestbook.txt")) {
    // Read and display the contents of the guestbook.txt file
    $messages = file_get_contents("guestbook.txt");
    echo nl2br($messages);
  } else {
    echo "<p>No messages yet. Be the first to leave a message!</p>";
  }
  ?>

  <br><br>
  <a href="guestbook.php">Leave a Message</a>
</body>

</html>