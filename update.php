<?php
// Perbarui data kamera di database
// Ganti dengan konfigurasi koneksi database Anda
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'sewa_kamera';

$connection = mysqli_connect($host, $username, $password, $database);
if (!$connection) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}

$id = $_POST['id'];
$nama = $_POST['nama'];
$tipe_kamera = $_POST['tipe_kamera'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_pengembalian = $_POST['tgl_pengembalian'];
$jumlah = $_POST['jumlah'];
$jaminan = $_POST['jaminan'];

$query = "UPDATE data_peminjam SET nama='$nama', tipe_kamera='$tipe_kamera', tgl_pinjam='$tgl_pinjam',
          tgl_pengembalian='$tgl_pengembalian', jumlah=$jumlah, jaminan='$jaminan' WHERE id = $id";
$result = mysqli_query($connection, $query);

mysqli_close($connection);

if ($result) {
    $message = "Peminjam berhasil diperbarui.";
} else {
    $message = "Terjadi kesalahan: " . mysqli_error($connection);
}

header("Location: table.php?message=" . urlencode($message));
exit();
?>
