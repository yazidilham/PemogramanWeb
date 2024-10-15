<html>
<head>
    <title>Halaman Home</title>
</head>
<body>
<?php
session_start(); // Start the session

if (isset($_SESSION['status']) && $_SESSION['status'] == 'login') {
    echo "Selamat datang " . htmlspecialchars($_SESSION['username']); // Output the username safely
    echo '<br><a href="sessionLogout.php">Logout</a>'; // Corrected the syntax for echoing HTML
} else {
    echo "Anda belum login, silahkan ";
    echo '<a href="sessionLoginForm.html">Login</a>'; // Corrected the syntax for echoing HTML
}
?>
</body>
</html>
