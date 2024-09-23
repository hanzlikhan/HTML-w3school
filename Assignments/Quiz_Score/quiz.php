<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Quiz</title>
</head>

<body>
  <h1>Simple Quiz</h1>
  <form action="result.php" method="POST">
    <h3>1. What is the capital of France?</h3>
    <input type="radio" name="q1" value="a"> a) Berlin<br>
    <input type="radio" name="q1" value="b"> b) Madrid<br>
    <input type="radio" name="q1" value="c"> c) Paris<br>

    <h3>2. Which planet is known as the Red Planet?</h3>
    <input type="radio" name="q2" value="a"> a) Earth<br>
    <input type="radio" name="q2" value="b"> b) Mars<br>
    <input type="radio" name="q2" value="c"> c) Jupiter<br>

    <h3>3. What is the largest ocean on Earth?</h3>
    <input type="radio" name="q3" value="a"> a) Atlantic Ocean<br>
    <input type="radio" name="q3" value="b"> b) Indian Ocean<br>
    <input type="radio" name="q3" value="c"> c) Pacific Ocean<br><br>

    <input type="submit" value="Submit Quiz">
  </form>
</body>

</html>