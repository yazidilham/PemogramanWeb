<html>
<head>
</head>
<body>
<h2> Keranjang Belanja </h2>

<?php
// Check if cookies are set before trying to access them
$beliNovel = isset($_COOKIE['beliNovel']) ? $_COOKIE['beliNovel'] : 0; // Default to 0 if not set
$beliBuku = isset($_COOKIE['beliBuku']) ? $_COOKIE['beliBuku'] : 0; // Default to 0 if not set

echo "Jumlah Novel: " . htmlspecialchars($beliNovel) . "<br>";
echo "Jumlah Buku: " . htmlspecialchars($beliBuku);
?>
</body>
</html>
