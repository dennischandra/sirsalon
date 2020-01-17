<?php
$host = "localhost";
$user = "id11208262_sig_sirsalon";
$pass = "liminchenn";
$name = "id11208262_sig_sirsalon";

$koneksi = mysqli_connect($host, $user, $pass, $name) or die("Koneksi ke database gagal!");
mysqli_select_db($koneksi, $name) or die("Tidak ada database yang dipilih!");
?>