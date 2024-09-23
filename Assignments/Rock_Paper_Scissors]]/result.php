<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Game Result</title>
</head>

<body>
  <h1>Game Result</h1>

  <?php
  // Get user's choice
  $user_choice = $_POST['user_choice'];

  // Define possible choices for the computer
  $choices = array('rock', 'paper', 'scissors');

  // Randomly select the computer's choice
  $computer_choice = $choices[array_rand($choices)];

  // Function to determine the winner
  function determine_winner($user, $computer)
  {
    if ($user == $computer) {
      return "It's a draw!";
    }

    if (($user == 'rock' && $computer == 'scissors') ||
      ($user == 'paper' && $computer == 'rock') ||
      ($user == 'scissors' && $computer == 'paper')
    ) {
      return "You win!";
    } else {
      return "You lose!";
    }
  }

  // Determine the result
  $result = determine_winner($user_choice, $computer_choice);

  // Display the choices and result
  echo "<p>You chose: <strong>$user_choice</strong></p>";
  echo "<p>Computer chose: <strong>$computer_choice</strong></p>";
  echo "<p><strong>$result</strong></p>";
  ?>

  <br>
  <a href="game.php">Play Again</a>
</body>

</html>