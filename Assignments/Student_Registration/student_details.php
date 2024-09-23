<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Details</title>
</head>

<body>
  <h1>Registered Student Details</h1>

  <?php
  // Check if the form was submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve submitted data
    $name = htmlspecialchars($_POST['name']);
    $roll_number = htmlspecialchars($_POST['roll_number']);
    $course = htmlspecialchars($_POST['course']);

    // Display the submitted information
    echo "<h2>Student Information:</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Roll Number:</strong> $roll_number</p>";
    echo "<p><strong>Course:</strong> $course</p>";
  } else {
    echo "<p>No data submitted. Please <a href='register.php'>register</a> first.</p>";
  }
  ?>

  <br>
  <a href="register.php">Register Another Student</a>
</body>

</html>