<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangle Area Calculator</title>
    <style>
        body {
            background: linear-gradient(135deg, #0F2027, #203A43, #2C5364);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            color: #fff;
        }

        .glass-container {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            padding: 40px 50px;
            width: 360px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        h1 {
            margin-bottom: 20px;
            font-size: 22px;
            color: #a8e6cf;
            text-shadow: 0 0 10px rgba(0,0,0,0.5);
        }

        input {
            width: 85%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 8px;
            outline: none;
            font-size: 16px;
            text-align: center;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
        }

        input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        button {
            background: linear-gradient(135deg, #00BFA5, #1DE9B6);
            border: none;
            padding: 10px 25px;
            border-radius: 10px;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        button:hover {
            background: linear-gradient(135deg, #1DE9B6, #00BFA5);
            transform: scale(1.05);
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            color: #a8e6cf;
            text-shadow: 0 0 5px rgba(0,0,0,0.4);
        }
    </style>
</head>
<body>

<div class="glass-container">
    <h1>Rectangle Area Calculator</h1>
    <form method="post">
        <input type="number" name="width" placeholder="Enter width" required min="0">
        <input type="number" name="height" placeholder="Enter height" required min="0">
        <br>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $width = $_POST["width"];
        $height = $_POST["height"];
        $area = $width * $height;
        echo "<div class='result'>The area of a rectangle with width <strong>$width</strong> and height <strong>$height</strong> is <strong>$area</strong>.</div>";
    }
    ?>
</div>

</body>
</html>
