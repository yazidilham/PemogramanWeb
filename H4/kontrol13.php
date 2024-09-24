<?php
// player_score.php

// Define the player's score
$points = 600; // Example score, you can change this value to test

// Determine if the player gets additional rewards
$additionalRewards = $points > 500 ? 'YES' : 'NO';

// Display the results
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Score</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .result {
            font-size: 1.2em;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <h1>Player Score Calculation</h1>
    <div class="result">
        Player's total score is: <?php echo $points; ?><br>
        Do players get additional rewards? <?php echo $additionalRewards; ?>
    </div>
</body>
</html>
