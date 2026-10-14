<?php
$ukuran = $_POST["ukuran"] ?? '';
$warna = $_POST["warna"] ?? '';
$halaman = $_POST["halaman"] ?? '';
$rangkap = $_POST["rangkap"] ?? '';

$tarif = 0;
$total = 0;
$valid = false;
$pesan = "Perhitungan belum dibuat.";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if ($ukuran === "A4") {
        if ($warna === "Hitam Putih") {
            $tarif = 500;
        } elseif ($warna === "Berwarna") {
            $tarif = 1500;
        }
    } elseif ($ukuran === "F4") {
        if ($warna === "Hitam Putih") {
            $tarif = 700;
        } elseif ($warna === "Berwarna") {
            $tarif = 1800;
        }
    }

    if (ctype_digit((string)$halaman) && (int)$halaman > 0 && ctype_digit((string)$rangkap) && (int)$rangkap > 0) {
        if ($tarif > 0) {
            $valid = true;
        } else {
            $pesan = "Pilihan ukuran kertas atau warna tidak valid!";
        }
    } else {
        $pesan = "Jumlah halaman dan rangkap harus berupa bilangan bulat positif!";
    }

    if ($valid) {
        $total = $tarif * (int)$halaman * (int)$rangkap;
    }
}
?>

<?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
    <?php if ($valid): ?>
        <div style="border: 1px solid #000; padding: 15px; margin-top: 15px; width: 300px;">
            <h3>Rincian Biaya Cetak</h3>
            <p>Ukuran Kertas: <?= htmlspecialchars($ukuran) ?></p>
            <p>Warna: <?= htmlspecialchars($warna) ?></p>
            <p>Jumlah Halaman: <?= htmlspecialchars($halaman) ?></p>
            <p>Jumlah Rangkap: <?= htmlspecialchars($rangkap) ?></p>
            <p><strong>Total Biaya: Rp<?= number_format($total, 0, ',', '.') ?></strong></p>
        </div>
    <?php else: ?>
        <p style="color: red; font-weight: bold;"><?= htmlspecialchars($pesan) ?></p>
    <?php endif; ?>
<?php endif; ?>