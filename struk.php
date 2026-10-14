<?php
if (!isset($_SESSION["total"])) {
    echo "<p>Belum ada pekerjaan cetak.</p>";
} else {
    echo "<div>";
    echo "<p>Ukuran Kertas: " . htmlspecialchars($_SESSION["ukuran"]) . "</p>";
    echo "<p>Warna: " . htmlspecialchars($_SESSION["warna"]) . "</p>";
    echo "<p>Jumlah Halaman: " . htmlspecialchars($_SESSION["halaman"]) . "</p>";
    echo "<p>Jumlah Rangkap: " . htmlspecialchars($_SESSION["rangkap"]) . "</p>";
    echo "<h3>Total Biaya: Rp" . number_format($_SESSION["total"], 0, ',', '.') . "</h3>";
    echo "</div>";
    
    echo "<form action='hapus.php' method='post'>";
    echo "<button type='submit'>Hapus Ringkasan</button>";
    echo "</form>";
}
?>