<?php
// Hapus kamera berdasarkan ID dari database
// Ganti dengan konfigurasi koneksi database Anda
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'sewa_kamera';

$connection = mysqli_connect($host, $username, $password, $database);
if (!$connection) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}

$id = $_GET['id'];
$query = "DELETE FROM data_peminjam WHERE id = $id";
$result = mysqli_query($connection, $query);

mysqli_close($connection);

if ($result) {
    $message = "Peminjam berhasil dihapus.";
} else {
    $message = "Terjadi kesalahan: " . mysqli_error($connection);
}

header("Location: table.php?message=" . urlencode($message));
exit();
?>
