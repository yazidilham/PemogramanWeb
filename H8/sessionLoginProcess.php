<?php
session_start(); // Start the session at the beginning

$username = $_POST['username']; // Use assignment operator '=' instead of '-'
$password = $_POST['password'];

// Check credentials
if ($username == "admin" && $password == "1234") {
    $_SESSION["username"] = $username; // Correct the variable name
    $_SESSION["status"] = 'login';
    echo "Anda berhasil login. Silahkan menuju <a href='homeSession.php'>Halaman Home</a>";
} else {
    echo "Gagal login. Silahkan login lagi <a href='sessionLoginForm.html'>Halaman Login</a>";
}
?>
