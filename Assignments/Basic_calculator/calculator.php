<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Calculator</title>
</head>

<body>
  <h1>Simple Calculator</h1>

  <form action="calculator.php" method="POST">
    <label for="number1">First Number:</label><br>
    <input type="number" id="number1" name="number1" required><br><br>

    <label for="operation">Operation:</label><br>
    <select id="operation" name="operation" required>
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
    </select><br><br>

    <label for="number2">Second Number:</label><br>
    <input type="number" id="number2" name="number2" required><br><br>

    <input type="submit" value="Calculate">
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the values from the form
    $number1 = $_POST['number1'];
    $operation = $_POST['operation'];
    $number2 = $_POST['number2'];

    // Perform the calculation
    switch ($operation) {
      case '+':
        $result = $number1 + $number2;
        break;
      case '-':
        $result = $number1 - $number2;
        break;
      case '*':
        $result = $number1 * $number2;
        break;
      case '/':
        // Check for division by zero
        if ($number2 != 0) {
          $result = $number1 / $number2;
        } else {
          $result = "Error: Division by zero is not allowed.";
        }
        break;
    }

    // Display the result
    echo "<h2>Result: $result</h2>";
  }
  ?>
</body>

</html>