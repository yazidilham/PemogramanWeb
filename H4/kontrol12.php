<?php

$originalPrice = 120000;
$discountRate = 0.20; 

$discountAmount = $originalPrice * $discountRate;

$finalPrice = $originalPrice - $discountAmount;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount Calculation</title>
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
    <h1>Discount Calculation</h1>
    <div class="result">
        The original price is Rp <?php echo number_format($originalPrice, 0, ',', '.'); ?>.<br>
        After applying a 20% discount, the price to be paid is Rp <?php echo number_format($finalPrice, 0, ',', '.'); ?>.
    </div>
</body>
</html>
