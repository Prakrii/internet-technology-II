<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>passeddays</title>
</head>
<body>
<form method="POST">
    <label>Enter a date:</label>
    <input type="date" name="date" required>
    <button type="submit">Calculate</button>
</form>

 <?php
    if (isset($_POST['date'])) {
    $inputDate = new DateTime($_POST['date']);
    $today = new DateTime();  // current date

    $diff = $today->diff($inputDate);
    $daysPassed = $diff->days;

    echo "Days passed: " . $daysPassed;
}
?>

</body>
</html>