<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F5F5F5;
            color: #333;
            margin: 20px;
        }

        h2 {
            color: grey;
            text-align: center;
        }

        p {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <h2>Hasil Pendaftaran Siswa</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $nama = isset($_GET['nama']) ? htmlspecialchars($_GET['nama']) : "";
        $email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : "";
        $nisn = isset($_GET['nisn']) ? htmlspecialchars($_GET['nisn']) : "";
        $tanggal_lahir = isset($_GET['tanggal_lahir']) ? htmlspecialchars($_GET['tanggal_lahir']) : "";
        $alamat = isset($_GET['alamat']) ? htmlspecialchars($_GET['alamat']) : "";
        $telepon = isset($_GET['telepon']) ? htmlspecialchars($_GET['telepon']) : "";
    ?>
        <p><strong>Nama:</strong> <?php echo $nama; ?></p>
        <p><strong>E-Mail:</strong> <?php echo $email; ?></p>
        <p><strong>NISN:</strong> <?php echo $nisn; ?></p>
        <p><strong>Tanggal Lahir:</strong> <?php echo $tanggal_lahir; ?></p>
        <p><strong>Alamat:</strong> <?php echo $alamat; ?></p>
        <p><strong>Telepon:</strong> <?php echo $telepon; ?></p>

        <p>Data berhasil diolah. Terima kasih atas pendaftarannya!</p>
    <?php
    } else {
        // Jika bukan metode GET, kembalikan ke halaman form
        header("Location: ridha.html");
        exit();
    }
    ?>
</body>

</html>
