<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz Results</title>
</head>

<body>
  <h1>Quiz Results</h1>

  <?php
  // Define correct answers
  $answers = array(
    "q1" => "c",  // Islamabad is the capital of Pakistan
    "q2" => "a",  // Ankara is the capital of Turkey
    "q3" => "c"   // Seoul is the capital of South Korea
  );

  // Initialize score
  $score = 0;

  // Calculate score
  foreach ($answers as $question => $correctAnswer) {
    if (isset($_POST[$question]) && $_POST[$question] == $correctAnswer) {
      $score++;
    }
  }

  // Display the score
  echo "<p>Your score is: $score / " . count($answers) . "</p>";

  // Display feedback
  if ($score == 3) {
    echo "<p>Excellent! You got all the answers correct.</p>";
  } elseif ($score == 2) {
    echo "<p>Good job! You got 2 out of 3 correct.</p>";
  } else {
    echo "<p>Keep trying! Your score is less than 2.</p>";
  }
  ?>
</body>

</html>