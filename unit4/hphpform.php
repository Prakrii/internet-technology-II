<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Form</title>
</head>
<body>

<form action="" method="POST">


    <!-- Name -->
    <label>Name:</label>
    <input type="text" name="name"
        value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
    <br><br>

    <!-- Email -->
    <label>Email:</label>
    <input type="text" name="email"
        value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
    <br><br>

    <!-- Password -->
    <label>Password:</label>
    <input type="password" name="password" required >
    <br><br>

    <!-- Gender -->
    <label>Gender:</label>
    <input type="radio" name="gender" value="Male"
        <?php if (isset($_POST['gender']) && $_POST['gender'] === 'Male') echo 'checked'; ?>> Male

    <input type="radio" name="gender" value="Female"
        <?php if (isset($_POST['gender']) && $_POST['gender'] === 'Female') echo 'checked'; ?>> Female
    <br><br>

  <label>Hobbies :</label><br>

<input type="checkbox" name="hobbies[]" value="reading" <?php $Submitted_hobbies =htmlspecialchars($_POST['hobbies']) ?? [];  if (in_array('reading', $submitted_hobbies)) echo 'checked="checked"'; ?>> Reading<br>

<input type="checkbox" name="hobbies[]" value="sports" <?php if (in_array('sports', $submitted_hobbies)) echo 'checked="checked"'; ?>>
Sports<br>

<input type="checkbox" name="hobbies[]" value="music" <?php if (in_array('music', $submitted_hobbies)) echo 'checked="checked"'; ?>>
Music<br>

<input type="checkbox" name="hobbies[]" value="travel" <?php if (in_array('travel', $submitted_hobbies)) echo 'checked="checked"'; ?>>
Travel<br><br>

    <input type="submit" value="Send">
</form>

<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST') {



    // Name
    if (!empty($_POST['name'])) {
        $name = htmlspecialchars($_POST['name']);
        echo "Name: $name<br>";
    }

    // Email
    if (!empty($_POST['email'])) {
        $email = htmlspecialchars($_POST['email']);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email: $email<br>";
        } else {
            echo "Invalid email address<br>";
        }
    }

    // Password 
    if (!empty($_POST['password'])) {
        $password = htmlspecialchars($_POST['password']);
        echo "Password received (not displayed for security)<br>";
    }

    // Gender
    if (!empty($_POST['gender'])) {
        $gender = htmlspecialchars($_POST['gender']);
        echo "Gender: $gender<br>";
    }

    
   

    

}
?>

</body>
</html>
