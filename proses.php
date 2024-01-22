<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 20px;
            text-align: center;
        }

        h2 {
            color: #538294;
        }

        p {
            margin: 10px 0;
        }

        button {
            background-color: #538294;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #405c80;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil data yang dikirimkan melalui form
            $nama = htmlspecialchars($_POST["nama"]);
            $email = htmlspecialchars($_POST["email"]);
            $password = htmlspecialchars($_POST["password"]);

            // Tampilkan data yang telah diisi
            echo "<h2>Data Pendaftaran:</h2>";
            echo "<p><strong>Nama:</strong> $nama</p>";
            echo "<p><strong>E-Mail:</strong> $email</p>";
            echo "<p><strong>Password:</strong> $password</p>";

            // Tambahkan button untuk menuju halaman baru.html
            echo '<a href="ridha.html"><button type="button">Ke Halaman Baru</button></a>';
        } else {
            // Jika bukan metode POST, kembalikan ke halaman form
            header("Location: index.html");
            exit();
        }
        ?>
    </div>
</body>

</html>
