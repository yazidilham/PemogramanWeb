<?php
// Memeriksa apakah form telah disubmit dan 'email' ada dalam input
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    // Mengambil input email
    $email = $_POST['email'];

    // Memeriksa apakah input adalah email yang valid
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Lanjutkan dengan pengolahan email yang aman
        echo "Email valid: " . htmlspecialchars($email);
    } else {
        // Tangani input yang tidak valid
        echo "Format email tidak valid.";
    }
} else {
    echo "Tidak ada input email yang diterima.";
}
?>
