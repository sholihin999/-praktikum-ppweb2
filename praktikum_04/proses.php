<?php

require_once ('Kunjungan.php');
session_start();

if (!isset($_SESSION['bukutamu'])) {
    $_SESSION['bukutamu'] = [];
}

if (isset($_POST['submit'])) {
    $kunjungan = new Kunjungan();
    $kunjungan->fullname = $_POST['fullname'];
    $kunjungan->email = $_POST['email'];
    $kunjungan->jenis_kunjungan_id = $_POST['jenis_kunjungan_id'];
    $kunjungan->save();
}

$daftar_kunjungan = Kunjungan::getAll();
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
    <div class="container mt-5">
        <div class="d-flex justify-content-between my-3">
            <h2>Daftar Kunjungan</h2>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Timestamp</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Jenis</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($daftar_kunjungan as $entry): ?>
                    <tr>
                        <td><?= htmlspecialchars($entry->id) ?></td>
                        <td><?= htmlspecialchars($entry->timestamp) ?></td>
                        <td><?= htmlspecialchars($entry->fullname) ?></td>
                        <td><?= htmlspecialchars($entry->email) ?></td>
                        <td><?= htmlspecialchars($entry->jenis_kunjungan_id) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="index"><< kembali</a>
    </div>
</body>

</html>