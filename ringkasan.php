<?php
// JANGAN DIUBAH
session_start();
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Ringkasan Cetak</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Ringkasan Cetak</h1>
    <?php include "level3/struk.php"; ?>
    <form action="hapus.php" method="post">
        <button type="submit">Hapus Ringkasan</button>
    </form>
    <p><a href="index.php">Hitung lagi</a></p>
</body>

</html>