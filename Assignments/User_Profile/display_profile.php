<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get and sanitize the form inputs
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $age = htmlspecialchars($_POST['age']);

  // Display the submitted information
  echo "<h2>Profile Information</h2>";
  echo "<p><strong>Name:</strong> " . $name . "</p>";
  echo "<p><strong>Email:</strong> " . $email . "</p>";
  echo "<p><strong>Age:</strong> " . $age . "</p>";
} else {
  echo "<h2>Invalid request!</h2>";
}
?>