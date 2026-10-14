<?php
// JANGAN DIUBAH
$ukuran_terakhir = "";
$warna_terakhir = "";
include "level4/baca.php";
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Percetakan Canggih Naya</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Percetakan Canggih Naya</h1>
    <p><a href="index.php">Layanan</a> | <a href="ringkasan.php">Ringkasan</a></p>

    <?php include "level1/etalase.php"; ?>

    <h2>Hitung Biaya Cetak</h2>
    <form action="proses.php" method="post">
        <p>Ukuran kertas:
            <select name="ukuran" required>
                <option value="" <?php if ($ukuran_terakhir == "")
                    echo "selected"; ?>>-- Pilih ukuran --</option>
                <option value="A4" <?php if ($ukuran_terakhir == "A4")
                    echo "selected"; ?>>A4</option>
                <option value="F4" <?php if ($ukuran_terakhir == "F4")
                    echo "selected"; ?>>F4</option>
            </select>
        </p>
        <p>Warna cetak:
            <select name="warna" required>
                <option value="" <?php if ($warna_terakhir == "")
                    echo "selected"; ?>>-- Pilih warna --</option>
                <option value="Hitam Putih" <?php if ($warna_terakhir == "Hitam Putih")
                    echo "selected"; ?>>Hitam Putih
                </option>
                <option value="Berwarna" <?php if ($warna_terakhir == "Berwarna")
                    echo "selected"; ?>>Berwarna</option>
            </select>
        </p>
        <p>Jumlah halaman: <input type="number" name="halaman" min="1" step="1" required></p>
        <p>Jumlah rangkap: <input type="number" name="rangkap" min="1" step="1" required></p>
        <button type="submit">Hitung Biaya</button>
    </form>
</body>

</html>