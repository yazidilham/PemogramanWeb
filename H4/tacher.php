<?php
// grades_above_average.php

// Define the students' names and grades
$students = [
    'Alice' => 85,
    'Bob' => 92,
    'Charlie' => 78,
    'David' => 64,
    'Eva' => 90
];

// Calculate the total number of students
$totalStudents = count($students);

// Calculate the sum of all grades
$sumOfGrades = array_sum($students);

// Calculate the class average grade
$classAverage = $sumOfGrades / $totalStudents;

// Filter students who have grades above the class average
$studentsAboveAverage = array_filter($students, function($grade) use ($classAverage) {
    return $grade > $classAverage;
});

// Display the results
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grades Above Average</title>
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
    <h1>Students Above Average</h1>
    <div class="result">
        <p>The class average grade is: <?php echo number_format($classAverage, 2); ?></p>
        <p>Students who achieved grades above the class average:</p>
        <ul>
            <?php foreach ($studentsAboveAverage as $name => $grade): ?>
                <li><?php echo htmlspecialchars($name); ?>: <?php echo $grade; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
