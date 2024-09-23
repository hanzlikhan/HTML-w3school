<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = htmlspecialchars($_POST['username']);
  if (!empty($username)) {
    echo "<h2>Welcome, " . $username . "!</h2>";
  } else {
    echo "<h2>Username is missing!</h2>";
  }
} else {
  echo "<h2>Invalid Request</h2>";
}
