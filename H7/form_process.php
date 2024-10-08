<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = isset($_POST["nama"]) ? $_POST["nama"] : "Nama tidak diisi";
    $email = isset($_POST["email"]) ? $_POST["email"] : "Email tidak diisi";

    echo "Nama: " . $nama . "<br>";
    echo "Email: " . $email;
}
?>
