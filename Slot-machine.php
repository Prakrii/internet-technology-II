<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slot Machine Game</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        .slot-container {
            background-color: #222;
            border-radius: 20px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            width: 90%;
            max-width: 400px;
        }

        .slots {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .reel {
            font-size: 60px;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 3px solid #ffce00;
            border-radius: 10px;
            background-color: #111;
            animation: spin 1s ease-in-out;
            animation-fill-mode: forwards;
        }

        .message {
            font-size: 24px;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .btn {
            background-color: #ffce00;
            color: #222;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.2s ease, background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #ffc107;
            transform: scale(1.05);
        }

        @keyframes spin {
            0% { transform: rotateX(0deg); opacity: 0.2; }
            50% { transform: rotateX(360deg); opacity: 1; }
            100% { transform: rotateX(0deg); opacity: 1; }
        }

        @media(max-width: 480px) {
            .reel {
                font-size: 40px;
                width: 50px;
                height: 50px;
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
    // Slot symbols
    $symbols = ['🍒', '🍋', '🍉', '💎', '🍇', '⭐'];

    // Pick 3 random symbols
    $slot1 = $symbols[rand(0, count($symbols) - 1)];
    $slot2 = $symbols[rand(0, count($symbols) - 1)];
    $slot3 = $symbols[rand(0, count($symbols) - 1)];

    // Determine win condition
    $message = ($slot1 === $slot2 && $slot2 === $slot3)
        ? "🎉 JACKPOT! You win!"
        : "😞 Try again!";
?>

    <div class="slot-container">
        <div class="slots">
            <div class="reel"><?= $slot1 ?></div>
            <div class="reel"><?= $slot2 ?></div>
            <div class="reel"><?= $slot3 ?></div>
        </div>
        <div class="message"><?= $message ?></div>
        <form method="post">
            <button class="btn" type="submit">🎰 Spin Again</button>
        </form>
    </div>

</body>
</html>
