<?php

$occupiedSeats = 28;
$emptySeats = $totalSeats - $occupiedSeats;
$percentageEmptySeats = ($emptySeats / $totalSeats) * 100;

echo "Total Seats: " . $totalSeats . "<br>";
echo "Occupied Seats: " . $occupiedSeats . "<br>";
echo "Empty Seats: " . $EmptySeats . "<br>";
echo "Percentage of Empty Seats: " . round($percentageEmptySeats, 2) . "%";
?>
