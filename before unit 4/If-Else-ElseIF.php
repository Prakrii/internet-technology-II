<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Roll Game</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #c922f3ff 0%, #fda085 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #333;
        }

        .container {
            background: #fff8e8ff;
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            width: 90%;
            max-width: 400px;
        }

        .dice {
            font-size: 100px;
            margin-bottom: 20px;
            display: inline-block;
            animation: shake 0.8s ease;
        }

        .message {
            font-size: 24px;
            margin: 10px 0;
            font-weight: 600;
        }

        .result {
            font-size: 20px;
            margin-bottom: 30px;
        }

        .btn {
            background-color: #f84737ff;
            color: #fff;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn:hover {
            background-color: #e65c50;
            transform: scale(1.05);
        }

        @keyframes shake {
            0% { transform: rotate(0deg); }
            20% { transform: rotate(15deg); }
            40% { transform: rotate(-15deg); }
            60% { transform: rotate(10deg); }
            80% { transform: rotate(-10deg); }
            100% { transform: rotate(0deg); }
        }

        @media(max-width: 480px) {
            .dice {
                font-size: 70px;
            }

            .message, .result {
                font-size: 20px;
            }

            .btn {
                font-size: 16px;
                padding: 12px 24px;
            }
        }
    </style>
</head>
<body>

<?php
    $roll = rand(1,6);

    // Unicode dice characters from 1 to 6
    $dice_faces = ['⚀', '⚁', '⚂', '⚃', '⚄', '⚅'];
    $dice_face = $dice_faces[$roll - 1];

    $result_message = ($roll == 6) ? "🎉 You win!" : "😞 You lost.";
?>

    <div class="container">
        <div class="dice"><?= $dice_face ?></div>
        <div class="message">You rolled a: <?= $roll ?></div>
        <div class="result"><?= $result_message ?></div>
        <form method="post">
            <button class="btn" type="submit">🎲 Roll Again</button>
        </form>
    </div>

</body>
</html>
