<?php
$pattern = '/go{1,3}d/'; // Cocokkan "god", "good", atau "gooood" (o muncul antara 1 hingga 3 kali)
$text = 'god is good. Gooood!';
if (preg_match_all($pattern, $text, $matches)) {
    echo "Cocokkan: " . implode(", ", $matches[0]);
} else {
    echo "Tidak ada yang cocok!";
}
?>
