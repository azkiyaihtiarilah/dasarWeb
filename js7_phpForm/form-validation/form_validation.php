<!-- <!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form method="post" action="proses_validasi.php">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama"><br>

        <label for="email">Email: </label>
        <input type="text" id="email" name="email"><br>

        <input type="submit" value="Submit">
    </form>

    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            var nama = $("#nama").val();
            var email = $("#email").val();
            var valid = true;

            if (nama === "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            } else {
                $("#nama-error").text("");
            }

            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else if (!validateEmail(email)) {
                $("#email-error").text("Format email tidak valid.");
                valid = false;
            } else {
                $("#email-error").text("");
            }

            if (!valid) {
                event.preventDefault(); // Menghentikan pengiriman form jika validasi gagal
            }
        });

        function validateEmail(email) {
            var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            return re.test(String(email).toLowerCase());
        }
    });
    </script>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html>
<head>
    <title>Form Input with AJAX Validation</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <h1>Form Input with AJAX Validation</h1>
    <form id="myForm" method="post" action="">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama"><br>

        <label for="email">Email: </label>
        <input type="text" id="email" name="email"><br>

        <input type="submit" value="Submit">
    </form>

    <div id="error-messages"></div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); // Prevent default form submission

                var nama = $("#nama").val();
                var email = $("#email").val();

                $.ajax({
                    url: "validate.php", // Replace with the actual PHP file name
                    type: "POST",
                    data: { nama: nama, email: email },
                    success: function(response) {
                        $("#error-messages").html(response.message);
                    },
                    error: function() {
                        $("#error-messages").html("An error occurred.");
                    }
                });
            });
        });
    </script>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action="">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama"><br>

        <label for="email">Email: </label>
        <input type="text" id="email" name="email"><br>

        <label for="password">Password: </label>
        <input type="password" id="password" name="password"><br>

        <input type="submit" value="Submit">
    </form>

    <div id="error-messages"></div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); // Prevent default form submission

                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();

                // Validasi kata sandi minimal 8 karakter di sisi client
                if (password.length < 8) {
                    $("#error-messages").html("Password harus minimal 8 karakter.");
                    return false;
                }

                $.ajax({
                    url: "validate.php",
                    type: "POST",
                    data: { nama: nama, email: email, password: password },
                    success: function(response) {
                        $("#error-messages").html(response.message);
                    },
                    error: function() {
                        $("#error-messages").html("An error occurred.");
                    }
                });
            });
        });
    </script>
</body>
</html>