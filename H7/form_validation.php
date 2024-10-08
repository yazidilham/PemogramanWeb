<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan AJAX dan Validasi Kata Sandi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Form Input dengan AJAX</h2>
    <form id="myForm" method="post">
        <label for="nama">Nama :</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email :</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Kata Sandi :</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil"></div> <!-- Tempat untuk menampilkan hasil -->

    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            event.preventDefault(); // Mencegah pengiriman form secara default

            var nama = $("#nama").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var valid = true;
            $("#nama-error").text(""); // Reset pesan error
            $("#email-error").text("");
            $("#password-error").text("");

            // Validasi Nama
            if (nama === "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            }

            // Validasi Email
            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else if (!filter_var(email, FILTER_VALIDATE_EMAIL)) {
                $("#email-error").text("Format email tidak valid.");
                valid = false;
            }

            // Validasi Kata Sandi
            if (password.length < 8) {
                $("#password-error").text("Kata sandi harus minimal 8 karakter.");
                valid = false;
            }

            // Jika validasi berhasil
            if (valid) {
                $.ajax({
                    url: "proses_validasi.php", // Ganti dengan file PHP yang sesuai
                    type: "POST",
                    data: { nama: nama, email: email, password: password },
                    success: function(response) {
                        $("#hasil").html(response); // Tampilkan hasil
                    },
                    error: function() {
                        $("#hasil").html("Terjadi kesalahan saat mengirim data.");
                    }
                });
            }
        });
    });
    </script>
</body>
</html>
