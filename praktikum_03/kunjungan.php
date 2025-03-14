<?php
require_once("BukuTamu.php");
session_start();

if (!isset($_SESSION["bukutamu"])) {
    $_SESSION["bukutamu"] = array();
}

if (isset($_POST["submit"])) {
    // Membuat Object dari Class BukuTamu
    $bukutamu = new BukuTamu();

    // Mengisi property dari object BukuTamu
    // Y-m-d H:i:s contoh: 2021-03-25 10:00:00
    $bukutamu->timestamp = date("Y-m-d H:i:s");

    $bukutamu->fullname = $_POST["fullname"];
    $bukutamu->email = $_POST["email"];
    $bukutamu->message = $_POST["message"];

    array_push($_SESSION["bukutamu"], $bukutamu);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <h2 class="mb-4">Daftar Kunjungan</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Timestamp</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['bukutamu'] as $entry): ?>
                    <tr>
                        <td>
                            <?php echo htmlspecialchars($entry->timestamp); ?>
                        </td>
                        <td>
                            <?php echo htmlspecialchars($entry->fullname); ?>
                        </td>
                        <td>
                            <?php echo htmlspecialchars($entry->email); ?>
                        </td>
                        <td>
                            <?php echo htmlspecialchars($entry->message); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="index.php">&lt;&lt;&lt; Kembali</a>
    </div>
</body>

</html>