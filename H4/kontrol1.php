<?php
// kontrol1.php

// Define the grades of 10 students
$grades = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Sort the grades from lowest to highest
sort($grades);

// Remove the two lowest and two highest grades
$grades = array_slice($grades, 2, -2);


$total = array_sum($grades);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grades Calculation</title>
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
    <h1>Grades Calculation</h1>
    <div class="result">
        The total score used to determine the average grade after ignoring the two highest and two lowest grades is <?php echo $total; ?>.
    </div>
</body>
</html>
