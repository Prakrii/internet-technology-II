<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #ffffff;
            padding: 25px;
            border-radius: 12px;
            width: 350px;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
        }
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input[type="text"], input[type="email"], input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
        .gender-box {
            margin-top: 10px;
        }
        .gender-box label {
            font-weight: normal;
            margin-right: 10px;
        }
        button {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            background: #4CAF50;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background: #43a047;
        }
        .result {
            margin-top: 20px;
            background: #e8f5e9;
            padding: 15px;
            border-radius: 8px;
            color: #2e7d32;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Registration Form</h2>

    <form action="" method="POST">
        <label for="name">FULL NAME:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">EMAIL:</label>
        <input type="email" name="email" id="email" required>

        <div class="gender-box">
            <label>Gender:</label>
            <input type="radio" name="gender" value="Male" required> Male
            <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Other"> Other
        </div>

        <label for="dob">D.O.B:</label>
        <input type="date" name="dob" id="dob" required>

        <button type="submit">Submit</button>
    </form>

    <?php
    // initialize errors array to avoid "undefined variable" warnings
    $errors = [];
    $name = $email = $gender = $dob = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        // Name validation
        if (empty($_POST["name"])) {
            $errors[] = "Name is required.";
        } else {
            $name = htmlspecialchars(trim($_POST["name"]));
            if (strlen($name) < 3) {
                $errors[] = "Name must be at least 3 characters long.";
            }
            if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
                $errors[] = "Name can only contain letters and spaces.";
            }
        }

        // Email validation
        if (empty($_POST["email"])) {
            $errors[] = "Email is required.";
        } else {
            $email = htmlspecialchars(trim($_POST["email"]));
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Invalid email format.";
            }
        }

        // Gender validation
        if (empty($_POST["gender"])) {
            $errors[] = "Gender is required.";
        } else {
            $gender = htmlspecialchars($_POST["gender"]);
        }

        // DOB validation
        if (empty($_POST["dob"])) {
            $errors[] = "Date of Birth is required.";
        } else {
            $dob = htmlspecialchars($_POST["dob"]);
            if (!strtotime($dob)) {
                $errors[] = "Invalid Date of Birth format.";
            } else {
                $today = date('Y-m-d');
                if ($dob > $today) {
                    $errors[] = "Date of Birth cannot be in the future.";
                }
            }
        }

        // Display Results — use !empty() to check for errors safely
        if (!empty($errors)) {
            echo "<div class='result' style='background:#ffebee;color:#c62828;'>";
            echo "<h3>Errors Found:</h3>";
            foreach ($errors as $err) {
                echo "- " . htmlspecialchars($err) . "<br>";
            }
            echo "</div>";
        } else {
            echo "<div class='result' style='background:#e8f5e9;color:#2e7d32;'>";
            echo "<h3>Submitted Information:</h3>";
            echo "Name: " . $name . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Gender: " . $gender . "<br>";
            echo "Date of Birth: " . $dob;
            echo "</div>";
        }
    }
?>

</div>

</body>
</html>
