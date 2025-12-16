<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Basic Calculator(DocumentVIII)</title>
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Inter', sans-serif;
    }

    body {
      background: linear-gradient(to right, #cfd9df, #e2ebf0);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .calc-container {
      background-color: #ffffff;
      padding: 30px 35px;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 400px;
    }

    h1 {
      text-align: center;
      color: #2c3e50;
      margin-bottom: 25px;
      font-size: 26px;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    label {
      font-weight: 600;
      color: #34495e;
    }

    input[type="number"],
    select {
      padding: 10px 12px;
      font-size: 16px;
      border-radius: 6px;
      border: 1px solid #ccc;
      transition: border-color 0.2s;
    }

    input[type="number"]:focus,
    select:focus {
      border-color: #007bff;
      outline: none;
    }

    input[type="submit"] {
      background-color: #007bff;
      color: white;
      padding: 12px;
      font-size: 16px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }

    .result-box {
      margin-top: 20px;
      padding: 15px;
      background-color: #f1f8ff;
      border: 1px solid #b3d8ff;
      border-radius: 6px;
      text-align: center;
      font-size: 18px;
      font-weight: 600;
      color: #2c3e50;
    }
  </style>
</head>
<body>

  <div class="calc-container">
    <h1>Basic Calculator</h1>

    <form action="" method="post">
      <label for="inputnum1">First Number</label>
      <input type="number" name="inputnum1" required>

      <label for="operator">Operator</label>
      <select name="operator">
        <option value="add">+</option>
        <option value="sub">−</option>
        <option value="mul">×</option>
        <option value="div">÷</option>
      </select>

      <label for="inputnum2">Second Number</label>
      <input type="number" name="inputnum2" required>

      <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST['submit'])) {
      $num1 = $_POST['inputnum1'];
      $num2 = $_POST['inputnum2'];
      $operator = $_POST['operator'];

      if ($num1 === '' || $num2 === '') {
        $result = "Please enter both numbers.";
      } else {
        $num1 = (float)$num1;
        $num2 = (float)$num2;

        switch ($operator) {
          case 'add':
            $result = $num1 + $num2;
            break;
          case 'sub':
            $result = $num1 - $num2;
            break;
          case 'mul':
            $result = $num1 * $num2;
            break;
          case 'div':
            $result = $num2 == 0 ? "Cannot divide by zero!" : $num1 / $num2;
            break;
          default:
            $result = "Invalid operator.";
        }
      }

      echo "<div class='result-box'>Result: $result</div>";
    }
    ?>
  </div>

</body>
</html>
