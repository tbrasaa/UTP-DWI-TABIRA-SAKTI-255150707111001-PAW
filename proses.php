<?php
// JANGAN DIUBAH
if (!isset($_POST["ukuran"], $_POST["warna"], $_POST["halaman"], $_POST["rangkap"])) {
    echo "Data belum lengkap. <a href='index.php'>Kembali</a>";
    exit;
}

include "level2/hitung.php";

if ($valid) {
    include "level3/simpan.php";
    include "level4/simpan.php";
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Hasil Perhitungan</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Hasil Perhitungan</h1>
    <?php if ($valid) { ?>
        <p>Ukuran: <?= htmlspecialchars($ukuran) ?></p>
        <p>Warna: <?= htmlspecialchars($warna) ?></p>
        <p>Jumlah halaman: <?= $halaman ?></p>
        <p>Jumlah rangkap: <?= $rangkap ?></p>
        <p>Tarif per halaman: Rp<?= number_format($tarif, 0, ',', '.') ?></p>
        <h2>Total: Rp<?= number_format($total, 0, ',', '.') ?></h2>
        <p><a href="ringkasan.php">Lihat Ringkasan Cetak</a></p>
    <?php } else { ?>
        <p><?= htmlspecialchars($pesan) ?></p>
    <?php } ?>
    <p><a href="index.php">Kembali ke Layanan</a></p>
</body>

</html>