<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rock, Paper, Scissors</title>
</head>

<body>
  <h1>Rock, Paper, Scissors Game</h1>
  <form action="result.php" method="POST">
    <h3>Choose your move:</h3>
    <input type="radio" name="user_choice" value="rock" required> Rock<br>
    <input type="radio" name="user_choice" value="paper"> Paper<br>
    <input type="radio" name="user_choice" value="scissors"> Scissors<br><br>

    <input type="submit" value="Play">
  </form>
</body>

</html>