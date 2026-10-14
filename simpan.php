<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $ukuran  = $_POST["ukuran"] ?? '';
    $warna   = $_POST["warna"] ?? '';
    $halaman = (int)($_POST["halaman"] ?? 0);
    $rangkap = (int)($_POST["rangkap"] ?? 0);

    $tarif = 0;
    if ($ukuran === "A4") {
        $tarif = ($warna === "Hitam Putih") ? 500 : (($warna === "Berwarna") ? 1500 : 0);
    } elseif ($ukuran === "F4") {
        $tarif = ($warna === "Hitam Putih") ? 700 : (($warna === "Berwarna") ? 1800 : 0);
    }

    $total = $tarif * $halaman * $rangkap;

    if ($halaman > 0 && $rangkap > 0 && $total > 0) {
        $_SESSION["ukuran"]  = $ukuran;
        $_SESSION["warna"]   = $warna;
        $_SESSION["halaman"] = $halaman;
        $_SESSION["rangkap"] = $rangkap;
        $_SESSION["total"]   = $total;

        $durasi_cookie = time() + (2 * 24 * 60 * 60); 
        setcookie("ukuran_terakhir", $ukuran, $durasi_cookie, "/");
        setcookie("warna_terakhir", $warna, $durasi_cookie, "/");
    }
}

header("Location: struk.php");
exit();
?>