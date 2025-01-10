<?php
include 'koneksi.php';

$query = "SELECT * FROM produk";
$result = mysqli_query($koneksi, $query);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!-- Sisanya gunakan kode HTML dan PHP yang sudah saya berikan sebelumnya -->