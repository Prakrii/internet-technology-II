<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Username Generator</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #a8e6cf, #dcedc1);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            background-color: #f0fff4;
            padding: 30px 40px;
            border-radius: 14px;
            box-shadow: 0 10px 30px rgba(72, 133, 86, 0.25);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            color: #2e5d34;
            margin-bottom: 30px;
            font-weight: 700;
            font-size: 1.8rem;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: 600;
            margin-bottom: 8px;
            color: #4a7c43;
            font-size: 0.95rem;
        }

        input[type="text"] {
            padding: 12px 14px;
            border-radius: 8px;
            border: 1.8px solid #a7d7a7;
            margin-bottom: 22px;
            font-size: 1rem;
            color: #2e5d34;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            background-color: #ffffff;
        }

        input[type="text"]:focus {
            border-color: #3ba143;
            box-shadow: 0 0 8px rgba(59, 161, 67, 0.5);
            outline: none;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #f0fff4;
            padding: 14px;
            font-size: 1.1rem;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 700;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            letter-spacing: 0.04em;
        }

        input[type="submit"]:hover {
            background-color: #388e3c;
            box-shadow: 0 6px 15px rgba(56, 142, 60, 0.5);
        }

        .result {
            margin-top: 25px;
            background-color: #d9f2d9;
            padding: 18px 20px;
            border-left: 5px solid #4caf50;
            border-radius: 8px;
            color: #2e5d34;
            font-weight: 700;
            font-size: 1.1rem;
            user-select: all;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Username Generator</h2>

    <form method="post" action="">
        <label for="fname">First Name:</label>
        <input type="text" name="fname" id="fname" required autocomplete="off" />

        <label for="lname">Last Name:</label>
        <input type="text" name="lname" id="lname" required autocomplete="off" />

        <input type="submit" name="submit" value="Generate Username" />
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $fname = htmlspecialchars(trim($_POST["fname"]));
        $lname = htmlspecialchars(trim($_POST["lname"]));

        $fpart = substr($fname, 0, 3);
        $lpart = substr($lname, 0, 3);

        $username = strtolower($fpart . $lpart);

        echo "<div class='result'>Your generated username: <strong>$username</strong></div>";
    }
    ?>
</div>

</body>
</html>
